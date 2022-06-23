<?php
	include "koneksi.php";
	$NL =$_GET['id_warna'];
	mysqli_query($koneksi,"delete from warna where id_warna ='$NL'") or die(mysql_error());
?>
<script type="text/javascript">
	alert("Hapus Data Warna Berhasil");
	window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=warna");
</script>