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
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

	@include('layouts.header')<br><br>
	@yield('konten')<br><br><br>
	@include('layouts.footer')

</body>
</html>