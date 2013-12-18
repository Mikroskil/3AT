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
		<li><a href="pemesanan.php">Pesan Lapangan</a></li>
		<li><a href="main_forum.php">Masuk Ke Forum</a></li>
		<li><a href="about.php">Tentang Kami</a></li>		
	</ul>
</div>
<div id="head">
<div id="imgSShow" align="center"><img src="images/header.jpg" alt="large image" name="SLIDESIMG" id="SLIDESIMG" style="opacity: 1;"><script type="text/javascript" src="js/slide-2.js"></script></div>
</div>

</div>
</div>
<div id="isi">
<div id="kiri">
<div id="judul">Form Administrasi</div>
<?php
$q = mysql_query("SELECT * FROM pemesanan WHERE Nopesanan = '".$_GET['Nopesan']."'") or die(mysql_error());
$d = mysql_fetch_array($q); 
$harga = 0;

if($d[2]=='1')
	$harga = 120000;
else if($d[2] == 2)
	$harga = 200000;
else if($d[2] == '3')
	$harga = 220000;
else if($d[2] == '4')
	$harga = 200000;
	
$diskon = 0;
if($d[8] == "anggota"){
	$diskon = 20000;
}
else{
	$diskon = 0;
}
$gtotal = $harga - $diskon;	
?>
<form action="simpan_data.php?Nolap=<?php echo $_GET['Nopesan'];?>" method = "POST" >
<table>
<tr><td width="100">No Pesanan</td><td width="20">:</td><td><input type="text" class="input" size="40" name="noPesan" value='<?php echo $d[0];?>'/></td></tr>
<tr><td width="100">Nama Pengunjung</td><td width="20">:</td><td><input type="text" class="input" size="40" name="user" value='<?php echo $d[1];?>'/></td></tr>
<tr><td width="100">No Lapangan</td><td width="20">:</td><td><input type="text" class="input" size="40" name="noLap" value='<?php echo $d[2];?>'/></td></tr>
<tr><td width="100">Harga Penyewaan</td><td width="20">:</td><td><input type="text" class="input" size="40" name="harga" value='<?php echo $harga;?>' /></td></tr>
<tr><td width="100">Diskon</td><td width="20">:</td><td><input type="text" class="input" size="40" name="diskon" value='<?php echo $diskon;?>'/></td></tr>
<tr><td width="100">Grand Total</td><td width="20">:</td><td><input type="text" class="input" size="40" name="gTotal" value='<?php echo $gtotal;?>'/></td></tr>
<tr><td width="100"></td><td width="20"></td><td><input type="submit" class="submitButton" value="Simpan"/> <input type="reset" class="submitButton" value="Hapus"/></td></tr>
</form>

<a href = "logoutadmin.php"> <div color='green' class='AvailableBtn'>Keluar </div> </a>
<a href = "daftar_pesanan.php"> <div color='green' class='AvailableBtn'>Lihat Daftar Pesanan </div> </a>
</div>
</div>
</div>


</body>
</html>
