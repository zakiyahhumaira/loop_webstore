<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url('/img/bg_login.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.5);
        }

        .footer {
            position: fixed;
            left: 70%;
            bottom: 3%;
            width: 100%;
        }

    </style>
</head>
<body>
<!--
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src={{ asset('img/me.jpg') }} alt="Avatar Logo" style="width:40px;" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order') }}">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('account') }}">Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('setting') }}">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
-->

    <br>
    <div class="text-center">
        <h1>Hi!</h1>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card ">
                    <div class="card-header bg-dark text-white text-center"> <h5> LOGIN </h5> </div>
                    <div class="card-body">

                        <form action="{{ route('loginvalidate') }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="item_name">Email:</label>
                                <input type="text" class="form-control" id="email" name="email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="item_price">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <br>
                            <!-- all errors -->

                            @if ($errors->has('all'))
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {{ $errors->first('all') }}
                            </div>
                            <!--<span class="text-danger">{{ $errors->first('all') }}</span>-->
                            @endif

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn btn-success" type="submit" name="login" id="login" value="LOGIN" />
                                <a href="" class="btn btn-danger"  > CANCEL </a>
                            </div>

                            <br>

                            <div class="d-flex justify-content-center">
                                <a class="btn btn-default text-center" href="{{ route('register') }}"> Dont have an account? Register here</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        &copy; All Rights Reserved. Design by Zakiyah Humaira 2023
    </div>








</body>
</html>
