<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SnackDBController extends Controller
{
    public function index1()
    {
    	// mengambil data dari table snack
    	$snack = DB::table('snack')->paginate(10);

    	// mengirim data snack ke view index
    	return view('index1',['snack' => $snack]);

    }

    // method untuk menampilkan view form tambah snack
public function tambah1()
{

	// memanggil view tambah
	return view('tambah1');

}
// method untuk insert data ke table snack
public function store1(Request $request)
{
	// insert data ke table snack
	DB::table('snack')->insert([
		'merksnack' => $request->merk,
		'stocksnack' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack');

}
// method untuk edit data snack
public function edit1($id)
{
	// mengambil data snack berdasarkan id yang dipilih
	$snack = DB::table('snack')->where('kodesnack',$id)->get();
	// passing data snack yang didapat ke view edit.blade.php
	return view('edit1',['snack' => $snack]);

}

// update data snack
public function update1(Request $request)
{
	// update data snack
	DB::table('snack')->where('kodesnack',$request->id)->update([
		'merksnack' => $request->merk,
		'stocksnack' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack');
}

public function hapus1($id)
{
	// menghapus data snack berdasarkan id yang dipilih
	DB::table('snack')->where('kodesnack',$id)->delete();

	// alihkan halaman ke halaman snack
	return redirect('/snack');
}

public function cari1(Request $request)
{
    // menangkap data pencarian
    $cari1 = $request->cari1;

        // mengambil data dari table snack sesuai pencarian data
    $snack = DB::table('snack')
    ->where('merksnack','like',"%".$cari1."%")
    ->paginate();

        // mengirim data snack ke view index1
    return view('index1',['snack' => $snack]);

}

}
