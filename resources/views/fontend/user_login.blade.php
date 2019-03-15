@extends('layout.fontend_layout')
@section('content')

    <div class="" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="title-section">
                        <h1>Login</h1>
                    </div>
                    <form id="login-form" method="post" action="{{route('userLoginProcess')}}">
                        {{csrf_field()}}
                        <p>Welcome! Login to your account.</p>
                        <label for="email">Username or Email Address*</label>
                        <input id="email" name="email" type="text" value="{{old('email')}}">
                        <span class="text text-danger">{{$errors->first('email')}}</span>
                        <label for="password">Password*</label>
                        <input id="password" name="password" type="password" value="{{old('password')}}">
                        <span class="text text-danger">{{$errors->first('password')}}</span>
                        <button type="submit" id="submit-register">
                            <i class="fa fa-paper-plane"></i> Login
                        </button>
                    </form>
                    <p>Don't have account? <a href="register.html">Register Here</a></p>

                </div>
            </div>
        </div>
    </div>

@endsection
