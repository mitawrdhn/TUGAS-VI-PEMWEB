<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo koneksi database MySQL</h1>
<?
$conn=mysql_connect("localhost","root","root","my_db");
//check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
?>
</body>
</html>