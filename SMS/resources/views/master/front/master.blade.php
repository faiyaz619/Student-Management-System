<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
    <nav>
        <div class="navbar navbar-expand-md navbar-light bg-info shadow sticky-top">
            <div class="container">
                <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}"class="nav-link">Home</a></li>
                <li><a href=""class="nav-link">All course</a></li>
                <li><a href="{{route('user-login')}}"class="nav-link">Login</a></li>
                <li><a href="{{route('user-register')}}"class="nav-link">Registration</a></li>
            </ul>
            </div>
        </div>
    </nav>
@yield('body')

<footer class="bg-dark pt-5 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h3>About Institute</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, quibusdam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body rounded-0 h-100">
                    <h3>Popular Link</h3>
                    <hr/>
                    <ul>
                        <li><a href="" class="">Popular Course One</a></li>
                        <li><a href="" class="">Popular Course two</a></li>
                        <li><a href="" class="">Popular Course three</a></li>
                        <li><a href="" class="">Popular Course four</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body-rounded-0 h-100">
                    <h3>Follow us On</h3>
                    <hr/>
                    <ul class="nav">
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-instagram-square fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-whatsapp-square fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-youtube-square fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-viber fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-css3-alt fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-github-square fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                        <li class="nav-item"><a href=""class="nav-link"><i class="fab fa-bootstrap fa-2x"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="bg-white mt-5">
    <div class="row">
        <div class="col-12 text-center text-white">
            <p>Copyright&copy;2022,All right preseved by Faiyaz Fahim</p>
        </div>
    </div>
</footer>


<script src="{{asset('/')}}js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
