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
            background-color: #FFF6EB;
        }

        .image {
            float: right; /* Mendorong gambar ke sisi kanan */
            margin-top: 10%; /* Atur margin sesuai kebutuhan Anda */
        }

        .nav {
            margin-top: 15px;
            margin-left: 10px;
        }

        .nav h5 {
            margin-top: 15px;
            margin-left: 5px; /* Atur jarak antara logo dan teks */
            font-weight: bold;
        }

        .content {
            margin-left: 6%;
            margin-top: 10%;
        }

        .content h1 {
            font-size: 75px;
        }

        .button1 {
            background-color: #B08968;
            border: none;
            color: white;
            border-radius: 20px;
            padding: 10px 30px;
            width: 230px;
            text-align: center;
            font-size: 18px;
            margin: 15px 6%;
            transition-duration: 0.4s;
        }

        .button1:hover {
            background-color: white;
            color: black;
            border: 2px solid #B08968;
        }



    </style>
</head>

<body>

    <div class="container">
        <img class="image" src={{ asset('img/shop.png') }} alt="shop">
    </div>

    <nav class="nav">
        <a class="nav-link" href="{{ route('landing') }}"><img src={{ asset('img/logo.png') }} alt="logo" width="40px"></a>
        <h5 class="bold-text">LOOP</h5>
    </nav>

    <div class="content">
        <h1>Loop is Where Everything Happens</h1>
        <br>
        <p>Welcome to our online store! We are your go-to destination for all your essential needs.<br>
            We curate a wide range of products that cater to your everyday requirements.<br>
            From household essentials to personal care items, we've got you covered.
        </p>
    </div>

    <a href="{{ route('login') }}"><button class="button button1">Login</button></a>



</body>
</html>
