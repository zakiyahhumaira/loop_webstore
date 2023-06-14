<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>About Me</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 20px auto;
            display: block;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Warna-warna pastel */
        .pastel-purple {
            background-color: #c9a9e0;
            color: #493267;
        }

        .contact-section {
            margin-top: 40px;
            text-align: center;
        }

        .contact-heading {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .contact-link {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-link:hover {
            color: #333;
        }
    </style>
</head>

<body>
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

    <div class="container">
        <h1>About Me</h1>
        <img class="profile-image" src={{ asset('img/me.jpg') }} alt="Profile Image">
        <p>
            Hello, my name is Zakiyah Humaira. I am a Computer Science student with a passion for coding and problem-solving.
            I am currently pursuing my degree in Computer Science at Pakuan University, where I am gaining a strong
            foundation in various programming languages, algorithms, and software development principles.
        </p>
        <p>
            Throughout my academic journey, I have developed a keen interest in web development and application
            programming. I enjoy working on projects that challenge me to think creatively and find innovative solutions.
            I am constantly learning and exploring new technologies to expand my skill set and stay updated with the
            latest industry trends.
        </p>
        <p>
            Apart from programming, I am also actively involved in extracurricular activities related to technology. I
            participate in coding competitions, attend tech conferences, and contribute to open-source projects. I
            believe in the power of collaboration and enjoy working in teams to create impactful solutions.
        </p>

        <div class="contact-section">
            <h2 class="contact-heading">Contact Me</h2>
            <div class="contact-info">
                <img class="contact-icon" src={{ asset('img/email.png') }} alt="Email Icon">
                <a class="contact-link" href="mailto:zakyumai@gmail.com">zakyumai@gmail.com</a>
            </div>
            <div class="contact-info">
                <img class="contact-icon" src={{ asset('img/linkedin.png') }} alt="LinkedIn Icon">
                <a class="contact-link" href="https://www.linkedin.com/in/zakiyah-humaira-90aa031ba/" target="_blank">LinkedIn</a>
            </div>
            <div class="contact-info">
                <img class="contact-icon" src={{ asset('img/github.png') }} alt="GitHub Icon">
                <a class="contact-link" href="https://github.com/zakiyahhumaira" target="_blank">GitHub</a>
            </div>
        </div>
    </div>
</body>

</html>
