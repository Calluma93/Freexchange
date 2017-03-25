@extends('layouts.master')

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-box">
                            <p style='text-align:center; color:#888;'>Enter your Email and Password to sign in</p>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="sr-only">E-Mail Address</label>
                          
                                <input id="email" type="email" placeholder="Email Address..." class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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

                            <input type="submit" class="btn" value="Sign in">

                            <a style='padding:0%; color:#888;' class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgotten Your Password?
                            </a>                          

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