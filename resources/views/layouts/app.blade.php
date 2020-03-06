<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>
  <div class="container">

    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">      
          <a class="navbar-brand" href="/posts">Portfolio</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="">Posts mais recentes</a></li>
          <li><a href="">New</a></li>
        </ul>

      </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <p class="text-muted">2020</p>
    </footer>
    
  </div>
</body>
</html>