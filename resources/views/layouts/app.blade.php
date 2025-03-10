<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aid & Deya</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: rgba(0, 255, 0, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 255, 0, 0.3);
        }

        .navbar-brand {
            font-size: 20px;
            font-weight: bold;
            color: cyan;
            text-transform: uppercase;
            text-shadow: 0px 0px 10px limegreen;
        }

        .navbar-nav {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-item .nav-link {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            padding: 8px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .nav-item .nav-link:hover {
            background: rgba(0, 255, 0, 0.3);
            box-shadow: 0px 0px 10px cyan;
        }

        .navbar-toggler {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar-nav {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 20px;
                background: rgba(0, 128, 0, 0.8);
                padding: 15px;
                border-radius: 10px;
                box-shadow: 0 0 10px limegreen;
            }

            .navbar-nav.active {
                display: flex;
            }

            .navbar-toggler {
                display: block;
            }
        }
    </style>
</head>

</head>

<body>
<nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">Aid & Deya's Website</a>
        <button class="navbar-toggler" onclick="toggleNavbar()">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="navbar-nav" id="navbarNav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        </ul>
    </nav>

    

    <script>
        function toggleNavbar() {
            document.getElementById("navbarNav").classList.toggle("active");
        }
    </script>

    <div class="container mt-4">@yield('content')</div>

    <script src="{{ asset('js/app.js') }}"></script>

    <footer class="footer">
    <div class="footer-container">
        <p>&copy; 2025 Aid & Deya. All Rights Reserved.</p>
        <div class="footer-links">
            <a href="https://instagram.com/friz.eich" target="_blank">Instagram</a>
            <a href="https://instagram.com/deyanrftry" target="_blank">Instagram Deya</a>
            <a href="mailto:aiddeya@email.com">Email</a>
        </div>
    </div>
</footer>

</body>

</html>