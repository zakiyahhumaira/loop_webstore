<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!--<nav class="navbar navbar-expand-sm bg-primary navbar-dark text-right">
  <div class="container">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href=" {{route('home')}} " >Home</a>
      </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('order')}}">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('account')}}">Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('setting')}}">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}" onclick="return confirm('Are you sure want to delete this order?');" >Logout</a>
      </li>

    </ul>
  </div>
</nav>-->

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src={{ asset('img/logo1.png') }} alt="Avatar Logo" style="width:40px;" class="rounded-pill">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{route('order')}}">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('account') }}">Accounts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting') }}">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing') }}" onclick="return confirm('Are you sure want to logout?');">Logout</a>
                </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
            </form>
        </div>
    </div>
</nav>


<div class="mt-4 p-5 bg-info text-white rounded">
  <h1>Welcome to Loop</h1>
  <p>Shopping anything you want...</p>
</div>

<br>

  <div class="container mt-3">
    <h2>Coffe</h2>
    <p>Buy your favorite coffee here</p>
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/coffee.png') }}" alt="Coffe image" style="width:100%">
      <div class="card-body">
        <a href="{{ route('order') }}" class="btn btn-primary">Start From Rp 30.000</a>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <h2>Tea</h2>
    <p>Buy your favorite relaxing tea here</p>
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/tea.jpeg') }}" alt="Tea image" style="width:100%">
      <div class="card-body">
        <a href="{{ route('order') }}" class="btn btn-primary">Start From Rp 30.000</a>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <h2>Juice</h2>
    <p>Buy your favorite healthy juice here</p>
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/juice.jpeg') }}" alt="Juice image" style="width:100%">
      <div class="card-body">
        <a href="{{ route('order') }}" class="btn btn-primary">Buy</a>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <h2>Water</h2>
    <p>Buy your favorite fresh drink here</p>
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/water.jpeg') }}" alt="Water image" style="width:100%">
      <div class="card-body">
        <a href="{{ route('order') }}" class="btn btn-primary">Buy</a>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <h2>Soda</h2>
    <p>Buy your favorite soda here</p>
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/soda.png') }}" alt="Soda image" style="width:100%">
      <div class="card-body">
        <a href="{{ route('order') }}" class="btn btn-primary">Buy</a>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <h2>Olive Oil</h2>
    <p>Buy your virgin oil olive</p>
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/oliveoil.png') }}" alt="Water image" style="width:100%">
      <div class="card-body">
        <a href="{{ route('order') }}" class="btn btn-primary">Buy</a>
      </div>
    </div>
  </div>

  <br><br>

</body>
</html>
