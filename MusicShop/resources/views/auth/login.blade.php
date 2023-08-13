<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login-signuppage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/img/music-icon.jpg" type="image/x-icon">
    <title>Shop | Login</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="content">
                <h2 class="logo mr150">
                    Tune Source
                </h2>
                <div class="content-form">
                    <h1 class="items ">Welcome To Us Website</h1>
                    <p class="items">Login and experience our service</p>
                </div>

                <div class="footer">
                    <a href="#" class="icon-app"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="icon-app"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon-app"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="icon-app"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon-app"><i class="fa-brands fa-google"></i></a>
                </div>
            </div>

            <div class="form-signup-login">
                <h2 class="nameform mr150 mr90">
                    Login
                </h2>
                @if(Session::has('error'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('error')}}
                        </div>
                        @endif
                <form class="subform mr90 mr150" action="{{route('login')}}" method="POST">
                @csrf

                    <input  name="name" class="username ip" type="username" placeholder="User name ...."> <i class="fa-regular fa-eye"></i>

                    <input  name="password" class="password ip " type="password" placeholder="Password ...."> <i class="fa-regular fa-eye"></i>

                    <div class="footer-form">
                        <div class=" tick fogot">
                            <a href="#" class="fogot-pass">Forgot password</a>
                        </div>
                        
                        <button type="submit" class="btn-log">Login</button>

                        <a class="have" href="/Signup">Haven't an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>