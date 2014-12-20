<html>
<head>
</head>
<body>
<?php
DEFINE("host", 'localhost');
DEFINE("username", 'root');
DEFINE("pass", '');
DEFINE("db", 'alfaevote');

$connect = mysql_connect(host, username, pass);
$myDatabase = mysql_select_db(db, $connect);

if ($connect)
{
	//echo "berhasil";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?php
}
?>

</body>
</html>
