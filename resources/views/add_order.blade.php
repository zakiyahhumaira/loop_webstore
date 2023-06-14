<!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Laravel Project</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
body {
    margin: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
</style>
 <body>

<!-- <nav class="navbar navbar-expand-sm bg-primary navbar-dark text-right">
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

<h3>Order Page</h3>
  <p>This is your order section</p>


  <div class="row">
       <div class="col-sm-12">
          <div class="card ">
            <form action="{{ route('orders.store') }}" method="post">
                {!! csrf_field() !!}
              <div class="card-header bg-dark text-white"> Add Order  </div>
              <div class="card-body">


              <label for="category" class="form-label"> Select Category: </label>
                <select name="category_id"  id="category_id"  class="form-select" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                 </select>

                  <div class="mb-3 mt-3">
                  <label for="item_name">Enter Item Name:</label>
                  <input type="text" class="form-control" id="item_name"  name="item_name" required >
                  </div>

                  <div class="mb-3 mt-3">
                  <label for="item_price">Enter Item Price:</label>
                  <input type="number" class="form-control" id="price"   name="price" required >
                  </div>


                    <div class="mb-3 mt-3">
                    <label for="item_qty">Enter Item Quantity:</label>
                    <input type="number" class="form-control" id="quantity"  name="quantity" required >
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <input class="btn btn-success btn-sm" type="submit" name="add" id="add" value="SAVE" />
                      <a href="{{ route('order') }}" class="btn btn-danger btn-sm"  > CANCEL </a>
                    </div>

              </div>


              </form>
          </div>



       </div>



     </div>

</div>


 </body>
 </html>
