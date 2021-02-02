<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
<div class="container">
		<div class="card">
			<div class="card-body">
	<h3>Data Pegawai</h3>
	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form">
		{{ csrf_field() }}
		Nama <input class="form-control" type="text" name="nama" required="required"> <br/>
		Jabatan <input class="form-control" type="text" name="jabatan" required="required"> <br/>
		TTL <input class="form-control" type="text" name="umur" required="required"> <br/>
		Alamat <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
		<input class="btn btn-primary ml-3" type="submit" value="Simpan Data">
	</form>

	</div>
	</div>
</div>
</body>
</html>