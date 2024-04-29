<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <h1>Blog Juanito</h1>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('blog')}}">Blog</a>
            <a href="{{route('post')}}">Post</a>
        </nav>
    </header>
    <hr>
    <main>
        @yield('content')
    </main>
    <footer>
        <section>
            <p>Designed and Developed in Colombia</p>
            <p>@2024 Juan David Santamaría</p>
        </section>
        <section>
            <ul>
                <li>Twitter</li>
                <li>Git Hub</li>
            </ul>
        </section>
    </footer>
</body>
</html>