<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animate/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animsition/css/animsition.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/select2/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css')}}">

    </head>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url('login/images/bg-01.jpg');">
                <div class="wrap-login100">
                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form" >
                        {{ csrf_field() }}
                        <span class="login100-form-logo">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                        <span class="login100-form-title p-b-34 p-t-27">
                            Admin Login
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>

                             @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                             @endif
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input id="password" type="password" name="password" required class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Ricordami
                            </label>
                            <a class="txt1" href="#" id="registrati">
                                Password dimenticata?
                            </a>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

        <script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
        <script src="{{ asset('login/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('login/vendor/select2/select2.min.js')}}"></script>
        <script src="{{ asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{ asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
        <script src="{{ asset('login/js/main.js')}}"></script>

    </body>
    </html>
