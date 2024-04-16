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
				{{ __('Data supplier') }}
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
        @foreach($supplier as $s)
        <form action="/supplier/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id_supplier" value="{{ $s->id_supplier }}"> <br/>
            Nama supplier <input type="text" name="nama_supplier" required="required" value="{{$s->nama_supplier}}"> <br/>
            Alamat <input type="text" name="alamat_supplier" required="required" value="{{$s->alamat_supplier}}"></text> <br/>
            No.Telp <input type="text" name="no_hp_supplier" required="required" value="{{$s->no_hp_supplier}}"></text> <br/>
            <input type="submit" value="Simpan Data">
        </form>
        @endforeach
</div>
</div>
</div>
</div>
</x-app-layout>	 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>supplier - E-CANTEEN</p>
	</footer>
</div>
</div>
</div>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>