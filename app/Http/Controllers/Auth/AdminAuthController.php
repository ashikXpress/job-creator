<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminAuth')->except('loginForm','adminLoginProcess');
    }

    public function showDashboard(){
        return view('admin.dashboard');
    }

    public function adminForm(Request $request){
        $data=[];
        $data['admins']=Admin::paginate(1);
        return view('admin.admin_registration_and_modification',$data);
    }
    public function createAdmin(Request $request){

        $this->validate($request,[
            'name'=>'required|min:3|max:20',
            'email'=>'required|min:5|max:30|unique:admins',
            'mobile_number'=>'required|unique:admins|min:10|max:15',
            'password'=>'required|min:4|max:15',
            'retype_password'=>'required|same:password|min:4|max:15',
        ]);
        $result=Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_number'=>$request->mobile_number,
            'password'=>bcrypt($request->password),
        ]);

        if ($result){
            $request->session()->flash('success','admin create successfully');
            return redirect()->back();
        }else{
            $request->session()->flash('error','admin create Failed !');
            return redirect()->back();
        }

    }
    public function loginForm(){
        return view('admin.login');
    }
    public function adminLoginProcess(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $email=$request->email;
        $password=$request->password;
        if (Auth::guard('admin')->attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('showDashboard');

        }else{
            return redirect()->route('loginForm');
        }

    }
}
