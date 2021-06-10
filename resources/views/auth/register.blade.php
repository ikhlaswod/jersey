
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    
    <div class="container-login100" style="background-image: url('/assets/img/blur-1283865__480.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                <span class="login100-form-title p-b-37">
                    Daftar
                </span>

                <div class="wrap-input100 validate-input m-b-20 {{ $errors->has('name') ? ' has-error' : '' }}" data-validate="Ketik Nama Pengguna Anda">
                    <input id="name" type="name" class="input100" name="name" value="{{ old('name') }}" placeholder="Nama Pengguna " required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                </div>

                <div class="wrap-input100 validate-input m-b-20 {{ $errors->has('email') ? ' has-error' : '' }}" data-validate="Ketik Email Anda">
                    <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="wrap-input100 validate-input m-b-25{{ $errors->has('password') ? ' has-error' : '' }}" data-validate = "Ketik Kata Sandi Anda">
                    <input id="password" type="password" class="input100" name="password"   type="password" name="pass" placeholder="Kata Sandi" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                @endif
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Ketik Ulang Kata Sandi Anda Dengan Benar">
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation"   placeholder="Konfirmasi Kata Sandi" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Daftar
                    </button>
                </div>

                <br><br>
                <p>Jika anda memiliki akun silahkan untuk Masuk</p>
                <div class="btn text-center">
                    <a href="{{ route('login') }}" class="txt1 hov2">
                        Masuk
                    </a>
                </div>
        </form>

            
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="assets/login/js/main.js"></script>

</body>
</html>