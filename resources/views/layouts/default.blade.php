<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Weibo App')- Laravel 新手入门教程
    </title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


</head>
<body>
  <nan class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="/">Weibo App</a>
          <ul class="navbar-nav justify-content-end">
              <li calss="nav-item"><a class="nav-link" href="/help">帮助</a></li>
              <li class="nav-item"><a class="nav-link" href="#">登陆</a></li>
          </ul>
      </div>
  </nan>

@yield('content')
</body>
</html>