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
<div id="judul">Jadwal Pelatihan dan Kompetisi</div>
<?php
$batas=15;
$no=1;
//$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$no=$posisi+1;
//echo $posisi . " " .  $batas ."ajdk";
$query=mysql_query("select * from jadwal order by no DESC limit $posisi,$batas");
echo"<table style='border:1px dashed #333;' width='100%' border=1>";
echo"<tr><td>No</td><td>No Lapangan</td><td>Tanggal Pelatihan</td><td>Tanggal Kompetisi</td><td>Jam</td></tr>";
while($r=mysql_fetch_array($query))
{
echo"<tr><td>$no</td><td align ='center'>$r[No]</td><td>$r[Tgl_Pelatihan]</td><td>$r[Tgl_Kompetisi]</td><td>$r[Jam]</a></td></tr>";
$no++;
}
echo"</table>";

//penomoran
echo "<tr><td colspan='2' valign='top' align='center'>";
$query2=mysql_query("select * from jadwal");
$jumlah_data=mysql_num_rows($query2);
$jumlah_halaman=ceil($jumlah_data/$batas);
if (1 != $paging){//tanda != berarti perintah akan dijalankan jika $paging tidak sama dengan 1, copyright all teknik paging by go_blind_hacker, powered by V-boys_studio
	$back=$paging-1;
	echo "<div id='kotak-paging'><a href='member.php?paging=$back'><b>Back</b></a></div>";
	}
	else{
	echo"<div id='kotak-paging'>Back</div>";
	}
	
if ($paging != $jumlah_halaman){
	$next=$paging+1;
	echo" <div id='kotak-paging'><a href='member.php?paging=$next'>  <b>Next</b></a></div>";
	}
	else
	{
	echo "<div id='kotak-paging'>Next</div>";
	}
?>

</div>
</div>
</div>

<div id="menu-bawah">
<div id="footer">Copyright © Wifotran Lasal 2013. All Right Reserved</div>
</div>
</body>
</html>
