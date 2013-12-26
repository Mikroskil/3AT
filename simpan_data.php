<?php
include('koneksi.php');
$id=$_POST['noPesan'];
$l=$_POST['noLap'];
$u=$_POST['user'];
$h=$_POST['harga'];
$d=$_POST['diskon'];
$t=$_POST['gTotal'];
mysql_query("insert into tbl_transaksi (Nopesanan,Nolap,Nama,Harga,Diskon,Total) values ('$id','$l','$u','$h','$d','$t')");
?>
<script type="text/javascript">
		alert("Data Tersimpan...!!!");
</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
?>
