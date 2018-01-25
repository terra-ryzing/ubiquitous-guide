<?php
session_start();
if(!isset($_SESSION["sess_user"])){
 header("Location: login.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome</title>
</head>
<h1>Welcome <?=$_SESSION['sess_user'];?></h1>
<p>Page under construction</p>
<p><a href="logout.php" class="logout">Logout</a></p>
<body>
<style>
h1{
	font-family: Helvetica Neue;
	font-size:55px;
	color:black;
	text-align:center;
}
p{
font-family: Helvetica Neue;
	font-size:45px;
	color:black;
	text-align:center;
}
	

body{
    background-color: #e05915;
}
</style>
</body>
</html>
<?php
}
?>