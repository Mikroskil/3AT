<html>
<head>
<title>Halaman Forum Utama</title>
</head>
<body>
<?php
$host="localhost"; 
$username="root";
$password=""; 
$db_name="efutsal";
$tbl_name="forum_question"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
$result=mysql_query($sql);
?>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1"
bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center"
bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>
<?php
$no=1;
?>
<?php
while($rows=mysql_fetch_array($result)){ // Start looping table row
?>
<tr>
<td bgcolor="#FFFFFF" align = "center"><?php echo $no; ?></td>
<td bgcolor="#FFFFFF"><a href="answer_topic.php?id=<?php echo $rows['id']; ?>"><?php
echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
<?php
$no=$no+1;
?>
</tr>
<?php
}
mysql_close();
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a
href="create_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
<p align="right"> <a href="index.php"> <img src="images/prev.gif"> </a> </p>
</body>
</html>