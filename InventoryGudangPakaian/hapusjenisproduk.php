<?php
	include "koneksi.php";
	$NL =$_GET['id_jenis_produk'];
	mysqli_query($koneksi,"delete from jenis_produk where id_jenis_produk ='$NL'") or die(mysql_error());
?>
<script type="text/javascript">
	alert("Hapus Data Jenis Produk Berhasil");
	window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=jproduk");
</script>