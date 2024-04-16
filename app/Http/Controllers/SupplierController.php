<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function supplier()
    {
    	// mengambil data dari table 
    	$supplier = DB::table('supplier')->get();
 
    	// mengirim data ke view 
    	return view('supplier',['supplier' => $supplier]);
 
    }

    public function tambah()
    {

        return view('t_supplier');
 
    }
    
    public function store(Request $request)
	{
		// insert data ke table transaksi
		DB::table('supplier')->insert([
			'id_supplier' => $request->id_supplier,
			'nama_supplier' => $request->nama_supplier,
            'alamat_supplier' => $request->alamat_supplier,
            'no_hp_supplier' => $request->no_hp_supplier
		]);
		// alihkan halaman ke halaman transaksi
		return redirect('/supplier');

	}

        // method untuk edit data pegawai
	public function edit($id_supplier)
	{	
		// mengambil data pegawai berdasarkan id yang dipilih
		$supplier = DB::table('supplier')->where('id_supplier',$id_supplier)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('e_supplier',['supplier' => $supplier]);
 
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
            DB::table('supplier')->where('id_supplier',$request->id_supplier)->update([
                'nama_supplier' => $request->nama_supplier,
                'alamat_supplier' => $request->alamat_supplier,
                'no_hp_supplier' => $request->no_hp_supplier
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/supplier');
	}


    // method untuk hapus data pegawai
	public function hapus($id_supplier)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('supplier')->where('id_supplier',$id_supplier)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/supplier');
	}
}
