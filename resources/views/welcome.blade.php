<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		Data Cuci Mobil
	</title>
</head>
<body background="#000" link="#000" alink="#017bf5" vlink="#000">
	<br />
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<h1 align="center">
		<font face="Lato" color="#017bf5" size="7">
			Data Cuci Mobil
		</font>
    </h1>
    <h3 align="center">
        <a href="/cucimobil/tambah"> + Tambah Data Baru</a>
    </h3>
	<h3 align="center">
		<table border="1">
		<tr>
			<th>ID</th>
			<th>Plat Mobil</th>
			<th>Nama Mobil</th>
			<th>Jenis Cuci</th>
			<th>Foto Mobil</th>
			<th>Edit</th>
		</tr>
		@foreach($cucimobil as $cm)
		<tr>
			<td>{{ $cm->cucimobil_id }}</td>
			<td>{{ $cm->cucimobil_plat_mobil }}</td>
			<td>{{ $cm->cucimobil_nama_mobil }}</td>
			<td>{{ $cm->cucimobil_jenis_cuci }}</td>
			<?php $path = Storage::url('Images/' {{ $cm->cucimobil_jenis_cuci }}); ?>
            <th><img width="100px" src="{{ url($path) }}" alt="" srcset=""></th>
			<td>
				<a href="/cucimobil/edit/{{ $p->cucimobil_id }}">Edit</a>
				|
				<a href="/cucimobil/hapus/{{ $p->cucimobil_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	</h3>
	<br />
	<h3 align="center">
	<a href="#">
		<font face="Lato" color="#000">GET STARTED</font>
	</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="#">
		<font face="Lato" color="#fff">SUBSCRIBE US</font>
	</a>
	</h3>
</body>
</html>