<?php
	include "koneksi.php";
	$NL =$_GET['id_rak'];
	mysqli_query($koneksi,"delete from rak where id_rak ='$NL'") or die(mysql_error());
?>
<script type="text/javascript">
	alert("Hapus Data Rak Berhasil");
	window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=rak");
</script>