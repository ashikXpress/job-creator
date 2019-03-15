@extends('layout.fontend_layout')
@section('content')

    <!-- register box -->
    <div class="register-box">
        <div class="title-section">
            <h1><span>Register Form


                <span>
                    @if(session()->has('success'))
                        <span class="text-success">{{session()->get('success')}}</span>
                    @endif
                    @if(session()->has('error'))
                        <span class="text-danger">{{session()->get('error')}}</span>
                    @endif
                </span>
                </span></h1>
        </div>
        <form id="register-form" action="{{route('createUser')}}" method="post">
            {{csrf_field()}}
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="row">
                <div class="col-md-6">
                    <label for="first-name">First Name* <span class="text-danger">{{$errors->first('first_name')}}</span></label>
                    <input id="first-name" name="first_name" type="text" value="{{old('first_name')}}">

                </div>
                <div class="col-md-6">
                    <label for="last-name">Last Name* <span class="text-danger">{{$errors->first('last_name')}}</span></label>
                    <input id="last-name" name="last_name" type="text"  value="{{old('last_name')}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="email">E-mail* <span class="text-danger">{{$errors->first('email')}}</span></label>
                    <input id="email" name="email" type="text"  value="{{old('email')}}">
                </div>
                <div class="col-md-6">
                    <label for="username2">Username <span class="text-danger">{{$errors->first('username')}}</span></label>
                    <input id="username2" name="username" type="text"  value="{{old('username')}}">
                </div>
            </div>


            <label for="mobile_number">Mobile Number* <span class="text-danger">{{$errors->first('mobile_number')}}</span></label>
            <input id="mobile_number" name="mobile_number" type="text"  value="{{old('mobile_number')}}">

            <label for="password2">Password* <span class="text-danger">{{$errors->first('password')}}</span></label>
            <input id="password2" name="password" type="password"  value="{{old('password')}}">
            <label for="repeat-password">Retype Password* <span class="text-danger">{{$errors->first('retype_password')}}</span></label>
            <input id="repeat-password" name="retype_password" type="password"  value="{{old('retype_password')}}">
            {{--<div class="user-thumbnail">--}}
                {{--<input type="file" name="user-thumb" id="user-thumb"/>--}}
                {{--<span>Upload your Image</span>--}}
                {{--<div class="thumb-holder">--}}
                    {{--<span>100x100</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            <button style="cursor: pointer" type="submit" id="submit-register2">
                <i class="fa fa-paper-plane"></i> Sign Up
            </button>
        </form>
    </div>
    <!-- End register box -->

@endsection