<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class uasController extends Controller
{


    public function indexuas()
    {
    	// mengambil data dari table snack
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data snack ke view index
    	return view('uas',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambahuas()
{

	// memanggil view tambah
	return view('tambahuas');

}

public function storeuas(Request $request)
{
	// insert data ke table snack
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS,
	]);
	// alihkan halaman ke halaman snack
	return redirect('/uas');

}



}

