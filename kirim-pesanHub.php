<?php
include('koneksi.php');
$n=$_POST['nama'];
$e=$_POST['email'];
$a=$_POST['alamat'];
$p=$_POST['pesan'];
mysql_query("insert into tbl_hubungi (nama,email,alamat,pesan) values ('$n','$e','$a','$p')");
?>
	<script type="text/javascript">
		alert("Pesan Terkirim...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
?>