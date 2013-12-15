<?php
include "koneksi.php";
$pass=md5($_POST['pass']);
$user=$_POST['user'];
$login=sprintf("SELECT * FROM tbl_member WHERE user='$user' AND pass='$pass'", mysql_real_escape_string($user), mysql_real_escape_string($pass));
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);

if ($ketemu > 0){
  session_start();
  //session_register('namamember');
  //session_register("nama");

  $_SESSION['namamember'] = $r['user'];
  $_SESSION['nama'] = $r['nama'];
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else{
?>
	<script type="text/javascript">
		alert("Password dan Username tidak Valid...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>
