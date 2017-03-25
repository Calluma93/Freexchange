@extends('layouts.master')

@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                    <div class="form-box">
                        <p style='text-align:center; color:#888;'>Enter your username, password, and e-mail to sign up</p>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="sr-only">Name</label>

                            <input id="name" type="text" placeholder="Username..." class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="sr-only">E-Mail Address</label>

                            <input id="email" type="email" placeholder="Email Address..." class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="sr-only">Password</label>

                            <input id="password" type="password" placeholder="Password..." class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="sr-only">Confirm Password</label>
                            <input id="password-confirm" type="password" placeholder="Confirm Password..." class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <div class="rad">
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="freelancer">I'm a Freelancer
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="employer">I'm an Employer
                                </label>
                            </div>
                        </div>

                        <input type="submit" class="btn" value="Sign up">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('styles')
<link rel="stylesheet" href="css/login/form-elements.css">
<link rel="stylesheet" href="css/login/style.css">
@endsection

@section('scripts')
<script src="js/login/jquery-1.11.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/login/jquery.backstretch.min.js"></script>
<script src="js/login/scripts.js"></script>
@endsection