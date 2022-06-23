<?php
	include "koneksi.php";
	$NL =$_GET['id_kategori'];
	mysqli_query($koneksi,"delete from kategori where id_kategori ='$NL'") or die(mysql_error());
?>
<script type="text/javascript">
	alert("Hapus Data Kategori Berhasil");
	window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=kategori");
</script>