<!DOCTYPE html>
<html>
<head>
	<title>SISTEM DM (User)</title>
</head>
<body style="background-image: url('image/firewatch.jpg')" style="font-family:('FontAwesome')">
	    <link rel="stylesheet" href="style/styleusermenu.css">
<center>
<?php
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}
include('cek_pengguna.php');
?>

<!-- SENARAI MENU ADMIN -->

<div class="container">
<span class="text1">SELAMAT DATANG KE</span>
<span class="text2"><b>SISTEM DEWAN MAKAN</b></span>
</div>
<div class="box">
<img src="image/KS.png" height="90px" width="130px">

<a class="c1" href="userview1.php"><input type="submit" name="submit" value="JADUAL DM"></a>

<a class="c1" href="report.php"><input type="submit" name="submit" value="REPORT"></a>

<a class="c2" href="logout.php"><input type="submit" name="submit" value="LOGOUT"></a>
</div>
</center>
</body>
</html>