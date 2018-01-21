<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Daftar Minuman</h2>
	<center>
@foreach($swey as $key)
{{ $key->kode_barang }}<br>
{{ $key->nama_barang }}<br>
{{ $key->harga_barang }}
<hr>
@endforeach
</center>
</body>
</html>

