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
/*hs.graphicsDir = 'http://localhost/distro/images/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';*/
</script>
<title>Wifotran Lasal</title>
</head>

<body>
<?php
include('koneksi.php');
?>
<div id="menu-atas">
<div id="atas"><div class="logo"></div>
<div class="menu" id="nav">
	<ul>
    	<li><a href="index.php">Beranda</a></li>
    	<li><a href="hal-login.php">Login Admin</a></li>
    	<li><a href="product.php">Daftar Lapangan</a></li>
    	<li><a href="hubungi.php">Pelatihan dan Kompetisi</a></li>
		<li><a href="Guestbook/home.php">Guestbook</a></li>
		<li><a href="main_forum.php">Forum</a></li>
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
<div id="judul">Selamat Datang di Wifotran Lasal</div>
Website ini memberikan pemesanan lapangan secara online sehingga memudahkan para pengunjung mengatur jadwal mereka untuk menyewa dan bermain lapangan tersebut.<br /><br />
Website ini juga memberikan informasi tentang jadwal pelatihan dan kompetisi serta sistem transaksi pada suatu lapangan futsal. <br /><br />
<div id="judul">Rekomendasi Dari Kami</div>
<?php
/*$q=mysql_query("select * from tbl_barang order by id_barang DESC LIMIT 3");
while($r=mysql_fetch_array($q))
{
echo"<div id='sub-barang'><div class='jdl-brg'>$r[nama_barang]</div><img src='barang/$r[gambar]' width='110' class='gambar'><div id='harga'><i>Harga Rp.$r[harga]</i>
<a href='pesan.php?id_barang=$r[id_barang]'><div  class='submitButton3'>Buy This Item</div></a><a href='detail.php?id_barang=$r[id_barang]' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div  class='submitButton3'>Review Item</div></a>
</div></div>";
}*/
?>
<br /><br /><p align="center">Ingin melihat semua koleksi produk kami...??? Silahkan cek ke : </p>
<a href="product.php"><div class="submitButton2">Produk Kami</div></a>
</div>
<div id="kanan">

<?php
if(empty($_SESSION[namamember])){
?>
<div id="judul">Member Log In</div>
<div id="widget">
<form method="post" action="log-member.php">
<table>
<tr><td>Username</td><td>:</td><td><input type="text" name="user" class="input" size="25"/></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pass" class="input" size="25"/></td></tr>
<tr><td></td><td></td><td><input type="submit" value="Masuk" class="submitButton" /> <input type="reset" value="Hapus" class="submitButton" /></td></tr>
</table>
</form>
<a href="registrasi.php"><div class="submitButton2">Gak Punya Akun? Daftar Akun Baru</div></a>
</div>
<?php
}
else{
?>
<div id="judul">Selamat Datang</div>
<div id="widget">
<?php
$d=date('d');
$m=date('m');
$y=date('Y');
?>
<img src="images/user-icon.jpg" class="gambar2" />
Halo "<b><?php echo"$_SESSION[nama]"; ?></b>"<br />
Login Tanggal : <?php echo "$d-$m-$y"; ?><br /><br /><br /><br /><br />
<a href="logout.php"><div class="submitButton2">Keluar</div></a>
</div>
<?php
}
?>

<div id="judul">Toko Online Kami</div>
<div id="widget">
<li class="li-class">Medan</li>
<li class="li-class-no">Jl. Thamrin No. 999 A-Z
</li>

<a href="hubungi.php"><div class="submitButton2">Ada Masalah? Hubungi Kami aja..!!</div></a>
</div>

<div id="judul">Temukan Kami di :</div>
<div id="widget">
<img src="images/facebook.gif" class="image" width="30"/><strong>Facebook</strong><br />Wifotran Lasal Booking<br /><br />
</div>

</div>
</div>
</div>
<div id="menu-bawah">
<div id="footer">Copyright © Wifotran Lasal 2013. All Right Reserved</div>
</div>
</body>
</html>
