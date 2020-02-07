<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuciMobilController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $cucimobil = DB::table('cucimobil')->get();

        // mengirim data pegawai ke view index
        return view('index', ['cucimobil' => $cucimobil]);
    }

	public function tambah()
	{
	
		// memanggil view tambah
		return view('tambah');
	
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('cucimobil')->insert([
			'cucimobil_plat_mobil' => $request->plat_mobil,
			'cucimobil_nama_mobil' => $request->nama_mobil,
			'cucimobil_jenis_cuci' => $request->jenis_cuci,
			'cucimobil_foto' => $request->foto
		]);

		$this->validate($request, [
			'featured_image' => 'required|file|max:7000', // max 7MB
		]);

		$path = Storage::putFile(
			'storage/Images',
			$request->file('featured_image'),
		);

		// alihkan halaman ke halaman pegawai
		return redirect('/cucimobil');
	
	}

	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$cucimobil = DB::table('cucimobil')->where('cucimobil_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['cucimobil' => $cucimobil]);
	
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('cucimobil')->where('cucimobil_id',$request->id)->update([
			'cucimobil_plat_mobil' => $request->plat_mobil,
			'cucimobil_nama_mobil' => $request->nama_mobil,
			'cucimobil_jenis_cuci' => $request->jenis_cuci
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/cucimobil');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('cucimobil')->where('cucimobil_id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/cucimobil');
	}

}