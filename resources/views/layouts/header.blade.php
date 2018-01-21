<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Musix</title>
	<link href="/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/dist/css/bootstrap.css" rel="stylesheet">
	<link href="/dist/css/bootstrap-theme.css" rel="stylesheet">
	<link href="/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Musix 1.0.1</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://localhost:8000/lusa">Gallery</a></li>
            <li class="active"><a href="http://localhost:8000/data">Data</a></li>
            <li class="active"><a href="http://localhost:8000/lusa01">About</a></li>
            <li class="active"><a href="http://localhost:8000/lusa002">Info</a></li>
            <li class="active"><a href="http://localhost:8000/lusa003">Explore</a></li></ul>
            <ul class="nav navbar-nav navbar-right"><li class="dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
</body>
</html>