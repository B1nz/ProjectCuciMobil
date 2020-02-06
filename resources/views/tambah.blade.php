<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		beautiful and simple website using html only -- fullywrold web tutorials
	</title>
</head>
<body background="1.jpg" link="#000" alink="#017bf5" vlink="#000">
	<br />
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<h1 align="center">
		<font face="Lato" color="#017bf5" size="7">
			Data Cuci Mobil
		</font>
    </h1>
    <h3 align="center">
        <a href="/cucimobil"> Kembali</a>
    </h3>
	<h3 align="center">
		<form action="/cucimobil/store" method="post">
		{{ csrf_field() }}
		No. Plat Mobil <input type="text" name="plat_mobil" required="required"> <br/>
		Nama Mobil <input type="text" name="nama_mobil" required="required"> <br/>
		Janis Cuci <input type="text" name="jenis_cuci" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
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