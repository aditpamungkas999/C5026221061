<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BolpenController extends Controller
{
	public function indexbolpen()
	{
    	// mengambil data dari table bolpen
		// $bolpen = DB::table('bolpen')->get();
        $bolpen = DB::table('bolpen')
                    ->orderBy('merkbolpen', 'asc')
                    ->paginate(10);

    	// mengirim data bolpen ke view index
		return view('bolpen',['bolpen' => $bolpen]);

	}

	// method untuk menampilkan view form tambah bolpen
	public function tambahbolpen()
	{

		// memanggil view tambah
		return view('tambahbolpen');

	}

	// method untuk insert data ke table bolpen
	public function storebolpen(Request $request)
	{
		// insert data ke table bolpen
		DB::table('bolpen')->insert([
			'merkbolpen' => $request->merkbolpen,
			'stockbolpen' => $request->stockbolpen,
			'tersedia' => ($request->stockbolpen > 0) ? 'Y' : 'N',
		]);
		// alihkan halaman ke halaman bolpen
		return redirect('/bolpen');

	}

	// method untuk edit data bolpen
	public function edit($kodebolpen)
	{
		// mengambil data bolpen berdasarkan id yang dipilih
		$bolpen = DB::table('bolpen')->where('kodebolpen',$kodebolpen)->get();
		// passing data bolpen yang didapat ke view edit.blade.php
		return view('editbolpen',['bolpen' => $bolpen]);

	}

	// update data bolpen
	public function update(Request $request)
	{
		// update data bolpen
		DB::table('bolpen')->where('kodebolpen',$request->kodebolpen)->update([
			'merkbolpen' => $request->merkbolpen,
			'stockbolpen' => $request->stockbolpen,
			'tersedia' => ($request->stockbolpen > 0) ? 'Y' : 'N',
		]);
		// alihkan halaman ke halaman bolpen
		return redirect('/bolpen');
	}

	// method untuk hapus data bolpen
	public function hapus($kodebolpen)
	{
		// menghapus data bolpen berdasarkan id yang dipilih
		DB::table('bolpen')->where('kodebolpen',$kodebolpen)->delete();

		// alihkan halaman ke halaman bolpen
		return redirect('/bolpen');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bolpen sesuai pencarian data
		$bolpen = DB::table('bolpen')
		            ->where('merkbolpen','like',"%".$cari."%")
                    ->orderBy('merkbolpen', 'asc')
                    ->paginate(10);

    		// mengirim data bolpen ke view index
		return view('bolpen',['bolpen' => $bolpen, 'cari' => $cari]);
	}

    // method untuk menampilkan view form tambah bolpen
	public function view($kodebolpen)
	{
		// mengambil data bolpen berdasarkan id yang dipilih
		$bolpen = DB::table('bolpen')->where('kodebolpen',$kodebolpen)->first();
		// passing data bolpen yang didapat ke view view.blade.php
		return view('viewbolpen',['bolpen' => $bolpen]);

	}
}
