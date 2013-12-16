<?php 
	session_start();
?>
<?php
include('koneksi.php');
$email = $_POST['email'];
$valid_mail = "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i";
if(!preg_match($valid_mail,$email)){
	print '<script type="text/javascript">';
	print 'alert("Salah")';
	print '</script>';
	return;
}
$hS=$_POST['hstart'];
$hA=$_POST['hakhir'];
$mS=$_POST['mstart'];
$mA=$_POST['makhir'];
if($hS < 10){
	$hS = '0' . $hS;
}
if($mS < 10){
	$mS = '0' . $mS;
}
$jamAwal = $hS . $mS . '00';
if($hA < 10){
	$hA = '0' . $hA;
}
if($mA < 10){
	$mA = '0' . $mA;
}
$jamAkhir = $hA . $mA . '00';
  $query=mysql_query("select * from pemesanan WHERE JamMulai BETWEEN ".$jamAwal." AND ".$jamAkhir." AND Nolap = ".$_POST['nolap']."") or die (mysql_error());

 $row = mysql_num_rows($query);
 
 if($row > 0){
 //echo $row;
 ?>
	<script type="text/javascript">
		alert("Sudah ada jam");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=pemesanan.php'>";
return;
}
?>

<?php
if(empty($_SESSION['namamember'])){
?>
<script type="text/javascript">
		alert("Anda belum Log In...!!!\nUntuk melakukan pembelian/pemesanan, anda diwajibkan untuk Log In terbelih dahulu.\nJika belum menjadi member, silahkan mendaftar terlebih dahulu...!!!");
</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=registrasi.php'>";
return;
}
?>
<?php
$mem=$_POST['Member'];
$id=$_POST['noPesan'];
$n=$_POST['nama'];
$l=$_POST['nolap'];
$e=$_POST['email'];
$p=$_POST['pesan'];
$hS=$_POST['hstart'];
$hA=$_POST['hakhir'];
$mS=$_POST['mstart'];
$mA=$_POST['makhir'];
$jamAwal = $hS . ':' . $mS;
$jamAkhir = $hA . ':'. $mA;
$tgl = $_POST['tanggal'];

mysql_query("insert into pemesanan (Nopesanan,nama,nolap,email,tanggal,JamMulai,pesan,JamAkhir,Anggota) values ('$id','$n','$l','$e','$tgl','$jamAwal','$p','$jamAkhir','$mem')");
?>
	<script type="text/javascript">
		alert("Pesan Terkirim...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
?>