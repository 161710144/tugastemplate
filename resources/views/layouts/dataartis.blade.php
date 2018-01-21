@extends('index')
@section('konten')
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
<div class="table-striped">
  <table class="table">
    <th>ID</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Tempat lahir</th>
    <th>Tanggal lahir</th>
    <th>Alamat</th>
    <th>Cita cita</th>
    <th>Hobi</th>
    <th>Foto</th>
    @foreach ($swey as $key)
    <tr>
    	<td>{{$key->id}}</td>
    	<td>{{$key->nis}}</td>
    	<td>{{$key->nama}}</td>
    	<td>{{$key->tempat_lahir}}</td>
    	<td>{{$key->tanggal_lahir}}</td>
    	<td>{{$key->alamat}}</td>
    	<td>{{$key->cita_cita}}</td>
    	<td>{{$key->hobi}}</td>
        <td><img src="{{ asset($key->poto) }}" style="max-height: 150px;max-width: 150px; margin-top: 10px">
        </td>
        @endforeach
    </tr>
  </table>
</div>
</body>
</html>
@endsection