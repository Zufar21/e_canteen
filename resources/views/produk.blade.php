<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">

	<x-app-layout>
		<x-slot name="header">
			<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
				{{ __('Data Produk') }}
			</h2>
		</x-slot>
	
		<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 text-gray-900 dark:text-gray-100">
						<h1>PROTOTYPE E-CANTEEN</h1>
						<nav>
							<a href="/dashboard">Dashboard</a>
							|
							<a href="/produk">Data Produk</a>
							|
							<a href="/kategori">Kategori Barang</a>
							|
							<a href="/supplier">Data Supplier</a>
						</nav>            
 

	<div class="form-group">
	</div>
	<a href="produk/t_produk">+Tambah</a> 
	<table class="table table-bordered">
		<tr>
			<th>Kode Produk</th>
			<th>Nama Produk</th>
			<th>Harga produk</th>
			<th>Stok</th>
            <th>Deskripsi</th>
			<th>Opsi</th>
		</tr>
		@foreach($produk as $p)
		<tr>
			<td scope="row">{{ $loop->iteration}}</td>
			<td>{{ $p->nama_produk }}</td>
			<td>{{ $p->harga }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->Desk }}</td>
			<td>
				<a class="btn btn-warning btn-sm"  href="/produk/e_produk/{{ $p->id_produk }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/produk/hapus/{{ $p->id_produk }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
</div>
</div>
</x-app-layout>	 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>PRODUK - E-CANTEEN</p>
	</footer>
</div>
</div>
</div>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>