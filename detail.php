<style>
body{
	background-image:url(images/bg-body.jpg);
	background-repeat:repeat-x;
	background-attachment:fixed;
	background-position:bottom;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
}
h2{
	font-size:14px;
	padding:0px;
	margin:0px;
	font-weight:bold;
	color:#666666;
}
h3{
	font-size:11px;
	font-weight:normal;
	color:#666666;
	margin-top:0px;
	margin-bottom:10px;
}
.gambar{
padding:5px;
background-color:#CCCCCC;
border:1px dashed #000;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
	margin:5px;
	float:left;
}
</style>
<?php
include('koneksi.php');
$query=mysql_query("select * from lapangan where No='$_GET[No]'");
$no=1;
while($r=mysql_fetch_array($query)){
echo"<img src='images/$r[Gambar]' class='gambar' width='140'>";
//echo"<h2>$r[nama_barang]</h2>";
echo"<h3>Harga $r[Harga] </h3>";
echo"<b>Keterangan</b><br>$r[Keterangan]";
}
?>
