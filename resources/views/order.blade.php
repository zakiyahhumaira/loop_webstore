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
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{route('order')}}">Orders</a>
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
        <a class="nav-link" href="{{route('home')}}" onclick="return confirm('Are you sure want to logout?');" >Logout</a>
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
                    <a class="nav-link active" href="{{route('order')}}">Orders</a>
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


<div class="container mt-3">
<br/>
  <h3>Order Page</h3>
  <p>This is your order section</p>
</div>

<!-- ADD ORDER
<div class="container mt-3">
  <div class="card">
    <div class="card-header text-white" style="background-color: black;">Add Order</div>
    <div class="card-body">
        <div style="margin-left: 11px;">
        <label for="sel1" class="form-label" >Select Category:</label>
        <select class="form-select" id="sel1" name="sellist1" style="width: 99%;">
        <option>Category</option>
        </select>
        </div>

        <div class="container mt-3">
        <form action="/action_page.php">
        <div class="mb-3 mt-3">
        <label for="name">Enter Item Name:</label>
        <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
        <label for="price">Enter Item Price:</label>
        <input type="price" class="form-control" id="price" name="price">
        </div>
        <div class="mt-3">
        <label for="quantity">Enter Item Quantity:</label>
        <input type="quantity" class="form-control" id="quantity" name="quantity">
        </div>
        <br>
        <div class="button" style="float: right;">
        <button type="submit" class="btn btn-secondary">Add</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
        </div>
        </form>
        </div>
    </div>
  </div>
</div>

<br>

EDIT ORDER
<div class="container mt-3">
  <div class="card">
    <div class="card-header text-white" style="background-color:brown;">Edit Order</div>
    <div class="card-body">
        <div style="margin-left: 11px;">
        <label for="sel1" class="form-label" >Select Category:</label>
        <select class="form-select" id="sel1" name="sellist1" style="width: 99%;">
        <option>Tea</option>
        <option>Coffee</option>
        <option>Mineral Water</option>
        <option>Milk</option>
        </select>
        </div>

        <div class="container mt-3">
        <form action="/action_page.php">
        <div class="mb-3 mt-3">
        <label for="name">Enter Item Name:</label>
        <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
        <label for="price">Enter Item Price:</label>
        <input type="price" class="form-control" id="price" name="price">
        </div>
        <div class="mt-3">
        <label for="quantity">Enter Item Quantity:</label>
        <input type="quantity" class="form-control" id="quantity" name="quantity">
        </div>
        <br>
        <div class="button" style="float: right;">
        <button type="submit" class="btn btn-secondary">Edit</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
        </div>
        </form>
        </div>
    </div>
  </div>
</div>

<br>
-->

<!-- ORDER LIST-->
<div class="container mt-3">
  <div class="card">
    <div class="card-header text-white" style="background-color:brown;">Order List</div>
    <div class="card-body">
    <div class="button" style="margin-left: 11px";>
    <a href=" {{ route('orders.create') }} " class="btn btn-secondary"> Add Order </a>
    </div>
    <div class="container mt-3">
    <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{ $order->item_name }}</td>
        <td>{{ $order->category->name }}</td>
        <td>{{ $order->price }}</td>
        <td>{{ $order->quantity }}</td>
        <td>{{ $order->price * $order->quantity }}</td>
        <td>
            <a href="{{ route('orders.edit', [$order->id]) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('orders.destroy', [$order->id]) }}" class="btn btn-info"
            onclick="return confirm('Are you sure want to delete this order?');" >Delete</a>

        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
    </div>
    </div>
  </div>
</div>

<br><br>

</body>
</html>
