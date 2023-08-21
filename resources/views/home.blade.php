<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>

    .header {
        background-color: #dfa87b;
    }

    #scrollToTopBtn {
        display: none; /* Sembunyikan tombol secara default */
        position: fixed;
        bottom: 20px;
        right: 30px;
        background-color: #000000;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 50px; /* Lebar */
        height: 50px;
        cursor: pointer;
    }

    #scrollToTopBtn:hover {
        background-color: #0056b3;
    }


    .card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(
        0,
        0,
        0,
        0.5
    ); /* Warna gelap yang dapat disesuaikan */
    z-index: 0;
}

.deskripsi {
    z-index: 1;
    color: white;
}

/* .carousel-item {
    height: 100vh;
    width: 300px;
} */

</style>
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
            <input class="form-control me-2" type="text" placeholder="Search" style="">
            <button class="btn btn-light-subtle text-white border border-light" type="button">Search</button>
            </form>
        </div>
    </div>
</nav>

  <div class="header p-5 ">
    <h1 class="fs-1">Welcome to Loop!</h1>
    <p class="fs-5">Welcome to Loop, your one-stop online shop for all your beverage cravings
        <br>
        Indulge in the finest selection of coffee, tea, juice, water, soda, and olive oil </p>
  </div>



<br>

  <div class="container mt-3">
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/coffee.png') }}" alt="Coffe image" style="width:100%">
      <div class="card-img-overlay">
        <div class="deskripsi position-absolute bottom-0 start-2 w-100 pb-3 pl-5">
            <h2>Coffee</h2>
        <p>Awaken your senses with our rich, aromatic coffees. Start your day right!</p>
        <a href="{{ route('orders.create') }}" class="btn btn-dark">Buy Here</a>
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/tea.jpeg') }}" alt="Tea image" style="width:100%">
      <div class="card-img-overlay">
        <div class="deskripsi position-absolute bottom-0 start-2 w-100 pb-3 pl-5">
            <h2>Tea</h2>
        <p>Indulge in the soothing tranquility of our finest teas. Find serenity in every sip.</p>
        <a href="{{ route('orders.create') }}" class="btn btn-dark">Buy Here</a>
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/juice.jpeg') }}" alt="Juice image" style="width:100%">
      <div class="card-img-overlay">
        <div class="deskripsi position-absolute bottom-0 start-2 w-100 pb-3 pl-5">
            <h2>Juice</h2>
        <p>Revitalize your taste buds with our exquisite, handcrafted juices. Shop now!</p>
        <a href="{{ route('orders.create') }}" class="btn btn-dark">Buy Here</a>
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/water.jpeg') }}" alt="Water image" style="width:100%">
      <div class="card-img-overlay">
        <div class="deskripsi position-absolute bottom-0 start-2 w-100 pb-3 pl-5">
            <h2>Water</h2>
        <p>Stay hydrated and refreshed with our pure, revitalizing water. Drink to your well-being.</p>
        <a href="{{ route('orders.create') }}" class="btn btn-dark">Buy Here</a>
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/soda.png') }}" alt="Soda image" style="width:100%">
      <div class="card-img-overlay">
        <div class="deskripsi position-absolute bottom-0 start-2 w-100 pb-3 pl-5">
            <h2>Soda</h2>
        <p>Fizz up your day with our sparkling selection of sodas. Add a pop of joy to your moments.</p>
        <a href="{{ route('orders.create') }}" class="btn btn-dark">Buy Here</a>
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="container mt-3">
    <div class="card" style="width:100%">
      <img class="card-img-top" src="{{ asset('img/oliveoil.png') }}" alt="Olive Oil image" style="width:100%">
      <div class="card-img-overlay">
        <div class="deskripsi position-absolute bottom-0 start-2 w-100 pb-3 pl-5">
            <h2>Olive Oil</h2>
        <p>Elevate your culinary creations with our premium, flavorful olive oils. Taste the essence of excellence.</p>
        <a href="{{ route('orders.create') }}" class="btn btn-dark">Buy Here</a>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <button id="scrollToTopBtn" onclick="scrollToTop()">
    <i class="fas fa-arrow-up"></i> <!-- Ikon anak panah Font Awesome -->
</button>


  <script>
    // Fungsi untuk menggulir halaman ke atas
    function scrollToTop() {
        document.body.scrollTop = 0; // Untuk peramban lama
        document.documentElement.scrollTop = 0; // Untuk peramban modern
    }

    // Tampilkan tombol kembali ke atas saat pengguna menggulir halaman ke bawah
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");

        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    }
</script>

</body>
</html>
