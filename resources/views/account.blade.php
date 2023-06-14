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
        <a class="nav-link " href="{{route('home')}}">Home</a>
      </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('order')}}">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{route('account')}}">Account</a>
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
        <a class="nav-link" href="{{route('home')}}" onclick="return confirm('Are you sure want to logout');" >Logout</a>
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
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{route('order')}}">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('account') }}">Accounts</a>
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

<div class="container mt-3">
<br/>
  <h3>Account Page</h3>
  <p>Registeres Account</p>
</div>

<div class="container mt-3">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>4</td>
        <td>zakiyah humaira</td>
        <td>zakyumai@gmail.com</td>
      </tr>
      <tr>
        <td>7</td>
        <td>zakiyah.h</td>
        <td>zakiyah@gmail.com</td>
      </tr>

    </tbody>
  </table>
</div>


</body>
</html>
