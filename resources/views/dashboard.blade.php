<html>
<head>
    <title></title>
    <style>
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
    </style>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
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
                </div>
            </div>
        </div>
    </div>

    <div>
        <table>
            <h1>Jumlah Produk</h1>
            <th>Total :</th>
        </table>
    </div>

    <div>
        <table>
            <h1>Jumlah Barang harus Resupply</h1>
            <th>Total :</th>
        </table>
    </div>
</x-app-layout>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | e-canteen JTI Polinema</title>
</head>
<body>
    <header>
    <h1>PROTOTYPE E-CANTEEN</h1>
        <nav>
			<a href="/dashboard">Dashboard</a>
			|
			<a href="/Produk">Data Produk</a>
            |
            <a href="/Kategori">Kategori Barang</a>
            |
            <a href="/Supplier">Data Supplier</a>
	    </nav>

    </header>



    <br/>
	<br/>
	<hr/>
	<footer>
		<p>PROTOTYPE SISTEM E-CANTEEN</p>
	</footer>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Toko Tahu Bulat & Sotong Enggal</title>
</head>
<body>
    <header>
    <h1>PROTOTYPE E-CANTEEN</h1>
        <nav>
			<a href="/">Lanjut</a>
			|
			<a href="/admin">Admin</a>
	    </nav>

    </header>



    <br/>
	<br/>
	<hr/>
	<footer>
		<p>PROTOTYPE SISTEM E-CANTEEN</p>
	</footer>
</body>
</html> --}}