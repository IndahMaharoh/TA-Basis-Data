<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WEBSITE DATABASE INVENTORY GUDANG PAKAIAN</title>
</head>
<body>
<style type="text/css">
	body{
		font-family: Kristen ITC;
		font-size: 14px;
	}
#canvas{
	width: 960px;
	margin: 0 auto;
	border: 1px solid silver;
}

#header{
	font-size: 20px;
	font-family: harrington;
	padding: 20px;
	background-color: #d9c7f7;
}

#menu{
		background-color: #7982f5;
}

#menu v1{
	list-style: none;
	margin: 0;
	padding:  0;
}

#menu v1 li.utama{
	display: inline-table;
}

#menu v1 li:hover{
	background-color: #313eeb;
}
#menu v1 li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding: 0 10px;
	color: #fff;
}
.utama v1{
	display: none;
	position: absolute;
	z-index: 2;
}
.utama:hover v1{
	display: block;
}
.utama v1 li{
	display: block;
	background-color: #313eeb;
	width: 140 px;
}

#isi{
	min-height: 200px;
	padding: 20px;
}

#footer{
	text-align: center;
	padding: 20px;
	background-color: #7982f5;
}

</style>

<div = id = "canvas">
	<div id="header">
	<h1 align="center"> 
	Website Database Inventory Gudang Pakaian </h1>
	</div>

	<div id="menu"> 
		<v1>
			<li class="utama"><a href="?page=beranda">Beranda</a></li>
			<li class="utama"><a href="?page=produk">Data Produk</a></li>
			<li class="utama"><a href="?page=jproduk">Data Jenis Produk</a></li>
			<li class="utama"><a href="?page=kategori">Data Kategori</a></li>
			<li class="utama"><a href="?page=ukuran">Data Ukuran</a></li>
			<li class="utama"><a href="?page=warna">Data Warna</a></li>
			<li class="utama"><a href="?page=rak">Data Rak</a></li>
		</v1>
	</div>
	
	<div id="isi"> 
		<?php
		$page=@$_GET['page'];
		if($page=="produk"){
			include "produk.php";
		}
		else if($page=="jproduk"){
			include "jenisproduk.php";
		}
		else if($page=="kategori"){
			include "kategori.php";
		}
		else if($page=="ukuran"){
			include "ukuran.php";
		}
		else if($page=="warna"){
			include "warna.php";
		}
		else if($page=="rak"){
			include "rak.php";
		}
		else if($page=="beranda"){
			echo "Selamat Datang Di Website Kami";
		}
	?>
	</div>

	<div id="footer"> 
	Indah Maharoh
	</div>
</div>
</body>
</html>
