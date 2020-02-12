<?php

namespace App\Http\Controllers;

use App\CuciMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuciMobilController extends Controller
{
    public function index()
    {
		// mengambil data dari table pegawai
		$cucimobil = CuciMobil::paginate(10);

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
		$validator = Validator::make($request->all(), [
			'plat_mobil' => 'required',
			'nama_mobil' => 'required',
			'jenis_mobil' => 'required'
		]);
		if ($validator->passes()) {
			$cucimobil = CuciMobil::find($id);
			$cucimobil->plat_mobil = $request->plat_mobil;
			$cucimobil->nama_mobil = $request->nama_mobil;
			$cucimobil->jenis_cuci = $request->jenis_cuci;
			$cucimobil->foto = $request->foto;
			$cucimobil->save();

			$request->session()->flash('msg', 'Sukses menambah data!');
			return redirect('/cucimobil');
		} else {
			return redirect('/cucimobil');
		}
	
	}

	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$cucimobil = CuciMobil::where('id', $id)->first();
		if (!$cucimobil) {
			$request->session()->flash('errorMsg', 'Data tidak ditemukan!');
			return view('edit', ['cucimobil' => $cucimobil]);		
		}
		return view('edit', ['cucimobil' => $cucimobil]);
	
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		$validator = Validator::make($request->all(), [
			'plat_mobil' => 'required',
			'nama_mobil' => 'required',
			'jenis_mobil' => 'required'
		]);
		if($validator->passes()) {
			$cucimobil = CuciMobil::find($id);
			$cucimobil->plat_mobil = $request->plat_mobil;
			$cucimobil->nama_mobil = $request->nama_mobil;
			$cucimobil->jenis_cuci = $request->jenis_cuci;
			$cucimobil->foto = $request->foto;
			$cucimobil->save();

			$request->session()->flash('msg', 'Sukses update!');
			return redirect('/cucimobil');

		} else {
            return redirect('/cucimobil');
        }
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		$cucimobil = CuciMobil::where('id', $id)->first();
		if(!$cucimobil) {
			$request->session()->flash('errorMsg', 'Gagal menghapus!');
			return redirect('/cucimobil');
		}
		
		CuciMobil::where('id', $id)->delete();
		$request->session()->flash('Msg', 'Berhasil menghapus!');
		return redirect('/cucimobil');
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table pegawai sesuai pencarian data
		$cucimobil = DB::table('cucimobil')
			->where('cucimobil_plat_mobil', 'like', "%" . $cari . "%")
			->paginate();

		// mengirim data pegawai ke view index
		return view('index', ['cucimobil' => $cucimobil]);
	}

}