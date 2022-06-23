<?php
$koneksi=mysqli_connect("localhost", "root", "", "InventoryGudangPakaian") or die (mysql_error());
if(mysqli_connect_errno()){
	echo "Gagal Koneksi". mysqli_connect_error();
}
?>