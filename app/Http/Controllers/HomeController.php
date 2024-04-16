<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
    	// mengambil data dari table 
    	$home = DB::table('produk')->get();
 
    	// mengirim data ke view 
    	return view('home',['produk' => $home]);
 
    }
}
