<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Image upload in Laravel 5.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('head')

</head>

<body>

<div class="container">

    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Dropzone + Laravel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Upload</a></li>
            </ul>
        </div>
    </div>

    <br><br>

@yield('content')

</div>
</body>

@yield('footer')
</html>
