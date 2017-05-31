@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @include('layouts.partials.notifications')
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address/Username</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group" style="margin-left: 35%;">
                            {!! Form::captcha() !!}
                            @if ($errors->has('g-recaptcha-response')) <span class="help-block"> <strong>{{ $errors->first('g-recaptcha-response') }}</strong> </span> @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 btn-group-login">
                                 <a href="{{ url('auth/google') }}" class="btn btn-danger btn-block ">
                                    <strong>Google +</strong>
                                </a>
                                <a href="{{ url('auth/facebook') }}" class="btn btn-primary btn-block" >
                                    <strong>Facebook</strong>
                                </a>
                                <a href="{{ url('auth/twitter') }}" class="btn btn-warning btn-block" >
                                    <strong>Twitter</strong>
                                </a>
                                <a href="{{ url('custom-auth/pinterest') }}" class="btn btn-danger btn-block" >
                                    <strong>Pinterest</strong>
                                </a>
                                <a href="{{ url('auth/linkedin') }}" class="btn btn-defualt btn-block" style="background-color: #0077B5;border-color:#0077B5;color:#fff;">
                                    <strong>Linked In</strong>
                                </a>
                            </div>
                        </div>
                    </form>
                    {!! Captcha::script() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
