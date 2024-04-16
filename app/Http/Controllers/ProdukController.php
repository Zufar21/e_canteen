<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function produk()
    {
    	// mengambil data dari table 
    	$produk = DB::table('produk')->get();
 
    	// mengirim data ke view 
    	return view('produk',['produk' => $produk]);
 
    }

    public function tambah()
    {

        return view('t_produk');
 
    }
    
    public function store(Request $request)
	{
		// insert data ke table transaksi
		DB::table('produk')->insert([
			'id_produk' => $request->id_produk,
			'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'kategori_produk' => $request->kategori_produk,
            'Desk' => $request->Desk
		]);
		// alihkan halaman ke halaman transaksi
		return redirect('/produk');

	}

        // method untuk edit data pegawai
	public function edit($id_produk)
	{	
		// mengambil data pegawai berdasarkan id yang dipilih
		$produk = DB::table('produk')->where('id_produk',$id_produk)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('e_produk',['produk' => $produk]);
 
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
            DB::table('produk')->where('id_produk',$request->id_produk)->update([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stock' => $request->stock,
                'kategori_produk' => $request->kategori_produk,
                'Desk' => $request->Desk
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/produk');
	}


    // method untuk hapus data pegawai
	public function hapus($id_produk)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('produk')->where('id_produk',$id_produk)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/produk');
	}
}
