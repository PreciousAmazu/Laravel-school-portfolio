<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!--Link to css-->
    <link rel="stylesheet" href="./css-DESKTOP-0B7C0U9_1/style.css">
</head>

<body>
<header>
    <nav class="nav-container">
        <div class="logo">
            <a href="/"><img class="nav-logo" src="./images_1/HZ-logo.png" alt="HZ LOGO"></a>
        </div>
        <ul class="nav-list">
            <li class="nav-item"><a href="/" class="{{ Request::path() === 'welcome' ? 'active' : '' }}">Index</a></li>
            <li class="nav-item"><a href="/profile" class="{{ Request::path() === 'profile' ? 'active' : '' }}">Profile</a></li>
            <li class="nav-item"><a href="/dashboard" class="{{ Request::path() === 'dashboard' ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="/faq" class="{{ Request::path() === 'faq' ? 'active' : '' }}">FAQ</a></li>
            <li class="nav-item"><a href="/blog" class="{{ Request::path() === 'blog' ? 'active' : '' }}">Blog</a></li>
            <li class="nav-item"><a href="/articles" class="{{ Request::path() === 'articles' ? 'active' : '' }}">Articles</a></li>
        </ul>
    </nav>
</header>
<main class="main">
    @yield('content')
    @yield('style')
</main>
</body>

</html>
