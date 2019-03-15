<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showLandPage(){

        return view('fontend.landpage');

    }
    public function addUserForm(){
        return view('fontend.user_registration');
    }
    public function createUser(Request $request){
        $this->validate($request,[
            'first_name'=>'required|min:3|max:10',
            'last_name'=>'required|min:3|max:10',
            'email'=>'required|unique:users|min:5|max:30',
            'username'=>'required|unique:users|min:5|max:15',
            'mobile_number'=>'required|unique:users|min:10|max:15',
            'password'=>'required|min:4|max:15',
            'retype_password'=>'required|same:password|min:4|max:15',
        ]);


        $result=User::create([
            'name'=>$request->first_name.' '.$request->last_name,
            'email'=>$request->email,
            'username'=>$request->username,
            'mobile_number'=>$request->mobile_number,
            'password'=>bcrypt($request->password),
        ]);

        if ($result){
            $request->session()->flash('success','User create successfully');
            return redirect()->back();
        }else{
            $request->session()->flash('error','User create Failed !');
            return redirect()->back();
        }
    }
    public function userLogin(){

        return view('fontend.user_login');
    }
    public function userLoginProcess(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $email=$request->email;
        $password=$request->password;



        if(Auth::attempt(['email'=>$email,'password'=>$password])) {
            return redirect()->route('showLandPage');
        }elseif (Auth::attempt(['mobile_number'=>$email,'password'=>$password])){
            return redirect()->route('showLandPage');
        }else{
            $request->session()->flash('error','your email or password is wrong');
            return redirect()->route('userLogin');
        }




    }
    public function userLogout(){
        Auth::logout();
        return redirect()->route('userLogin');
    }
}
