<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Hazamy — Full Stack Developer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="gradient-bg"></div>

<!-- NAVBAR -->
<header class="navbar">

    <div class="container nav-inner">

        <div class="logo">
            Hazamy
        </div>

        <nav>
            <a href="/">Home</a>
            <a href="/projects">Projects</a>
            <a href="/apiShowcase">API Showcase</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>

        <!-- THEME SWITCH -->
        <button class="theme-switch" onclick="toggleTheme()">

            <div class="switch-track">

                <div class="switch-thumb">

                    <span id="switchIcon">🌙</span>

                </div>

            </div>

        </button>

    </div>

</header>

<!-- PAGE CONTENT -->
@yield('content')

<script>

function toggleTheme() {

    const body = document.body;

    body.classList.toggle('light');

    const icon = document.getElementById('switchIcon');

    if(body.classList.contains('light')) {

        localStorage.setItem('theme', 'light');

        icon.innerHTML = '☀️';

    } else {

        localStorage.setItem('theme', 'dark');

        icon.innerHTML = '🌙';
    }
}

window.onload = () => {

    if(localStorage.getItem('theme') === 'light') {

        document.body.classList.add('light');

        document.getElementById('switchIcon').innerHTML = '☀️';
    }
}

</script>

</body>
</html>