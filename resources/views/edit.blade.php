<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
<div class="container">
		<div class="card">
			<div class="card-body">
	<h3>Edit Pegawai</h3>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input  class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input  class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		TTL <input  class="form-control" type="text" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea  class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"  class="btn btn-primary ml-3" >
	</form>
	@endforeach
	</div>
	</div>
</div>	

</body>
</html>