<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		beautiful and simple website using html only -- fullywrold web tutorials
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
        <a href="/cucimobil"> Kembali</a>
    </h3>
	<h3 align="center">
		@foreach($cucimobil as $cm)
            <form action="/cucimobil/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $cm->cucimobil_id }}"> <br/>
                No. Plat Nomor <input type="text" required="required" name="plat_mobil" value="{{ $cm->cucimobil_plat_mobil }}"> <br/>
                Nama Mobil <input type="text" required="required" name="nama_mobil" value="{{ $cm->cucimobil_nama_mobil }}"> <br/>
                Jenis Cuci <input type="text" required="required" name="jenis_cuci" value="{{ $cm->cucimobil_jenis_cuci }}"> <br/>
				Foto Mobil <input type="file" name="foto"> <br/>
                <input type="submit" value="Simpan Data">
            </form>
	@endforeach
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