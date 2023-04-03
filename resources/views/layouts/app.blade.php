<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite('resources/js/app.js')

  <title>Laravel Song-DB - @yield('title')</title>
</head>
<body class="body">
  <header>
    @include('partials.navbar')
  </header>
  <main>
    @yield('main-content')
  </main>
</body>
</html>