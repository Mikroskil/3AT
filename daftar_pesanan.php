<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/highslide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/utilities.js"></script>
<script type="text/javascript" src="js/highslide-with-html.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<link rel="shortcut icon" href="images/icon.png" />
<script type="text/javascript">
 hs.graphicsDir = 'http://localhost/project/images/';
 hs.outlineType = 'rounded-white';
 hs.wrapperClassName = 'draggable-header';
</script>
<title>Wifotran Lasal</title>
</head>

<body>
<?php
include('koneksi.php');
?>
<div id="menu-atas">
<div id="atas"><div class="logo"> </div>
<div class="menu" id="nav">
	<ul>
    	<li><a href="index.php">Beranda</a></li>
    	<li><a href="hal-login.php">Login Admin</a></li>
    	<li><a href="daftar_lap.php">Daftar Lapangan</a></li>
    	<li><a href="latKompetisi.php">Pelatihan dan Kompetisi</a></li>
		<li><a href="pemesanan.php">Pemesanan</a></li>
		<li><a href="main_forum.php">Forum</a></li>
		<li><a href="about.php">Tentang Kami</a></li>
	</ul>
</div>
<div id="head">
<div id="imgSShow" align="center"><img src="images/header.jpg" alt="large image" name="SLIDESIMG" id="SLIDESIMG" style="opacity: 1;"><script type="text/javascript" src="js/slide-2.js"></script></div>
</div>
<div> </div>
</div>
</div>
<div id="isi">
<div id="kiri">
<div id="judul">Daftar Pesanan</div>
<table border = 1 width = '100%' cellpadding = '3' cellspacing = '0'>
	<tr align='center'>
		<td>No</td>
		<td>No Pesanan</td>
		<td>Nama</td>
		<td>No Lapangan</td>
		<td>Email</td>
		<td>Tanggal</td>
		<td>JamMulai</td>
		<td>JamAkhir</td>
		<td>Pesan</td>
		<td>Member</td>
		<td>Transaksi</td>
	</tr>
<?php
$i = 1;
$no = 1;
$query=mysql_query("select * from pemesanan order by tanggal");
while($r=mysql_fetch_array($query))
{
echo "<tr align='center'>
			<td>$i</td>
			<td>".$r['Nopesanan']."</td>
			<td>".$r['Nama']."</td>
			<td>".$r['Nolap']."</td>
			<td>".$r['Email']."</td>
			<td>".$r['Tanggal']."</td>
			<td>".$r['JamMulai']."</td>
			<td>".$r['JamAkhir']."</td>
			<td>".$r['Pesan']."</td>;
			<td>".$r['Anggota']."</td>;
			<td><a href ='formAdmin.php?Nopesan=".$r[0]."'>Buat</td>
	  </tr>";
	$i++;
}
?>
</table>
</div>
<div id="kanan">

</div>
</div>
</div>
<div id="menu-bawah">
<div id="footer">Copyright © Wifotran Lasal 2013. All Right Reserved</div>
</div>
</body>
</html>