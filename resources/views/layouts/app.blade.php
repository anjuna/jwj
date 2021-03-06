<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JWJ</title>

    <link href="/css/all.css" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
        window.easter = 'egg';
    </script>
</head>
<body>
    <nav class="navbar navbar-static-top navbar-jwj">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="active">
                  <a href="/">JWJ</a>
              </li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/about-me">Me</a></li>
                  <li><a href="/about-site">This site</a></li>
                </ul>
             </li>
              <li><a href="/reviews">My reviews</a></li>
              @if(Auth::user())
                  <li><a href="/logout">Logout</a></li>
              @else
                  <li>
                      <a href="/login">Login</a>
                  ``</li>
              @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
        <div>
            @yield('content')
        </div>
    </div>
</body>
<script src="/js/main.js"></script>
@yield('scripts')
</html>
