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
	<form action="/t_produk/store" method="post" class="form-inline">
		{{ csrf_field() }}
		Nama Produk <input type="text" name="nama_produk" required="required"> <br/>
		Harga Produk <input type="text" name="harga" required="required"></text> <br/>
		Stok <input type="text" name="stock" required="required"></text> <br/>
		Kategori <input type="text" name="kategori_produk" required="required"> <br/>
        Deskripsi <input type="text" name="Desk" required="required"></text> <br/>
		<input type="submit" value="Simpan Data">
	</form>
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