<?php
	include "koneksi.php";
	$NL =$_GET['id_produk'];
	mysqli_query($koneksi,"delete from produk where id_produk ='$NL'") or die(mysql_error());
?>
<script type="text/javascript">
	alert("Hapus Data Produk Berhasil");
	window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=produk");
</script>