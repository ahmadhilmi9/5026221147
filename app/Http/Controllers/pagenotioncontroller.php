<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagenotionController extends Controller
{

    public function index2()
    {
        $pagecounter = DB::table('pagecounter')->get();

        DB::table('pagecounter')->increment('Jumlah');

    	return view('index2',['pagecounter' => $pagecounter]);

    }

}

