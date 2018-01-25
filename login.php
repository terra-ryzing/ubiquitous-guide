<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="" method="post">
<label>Username:</label><input type="text" name="user"><br/>
<label>Password:</label><input type="password" name="pass"><br/>
<input type="submit" value="Login" name="submit"><br/>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 //DB Connection
 $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'responses') or die("databse error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser
 header("Location:welcome.php");
 }
 }
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
?>
<style>
label{
font-family: Helvetica Neue;
font-size:20px;
color:black;
}
h1{
font-family: Helvetica Neue;
font-size:55px;
color:black;
}
body{
    background-color: #e05915;
}

input[type=text], input[type=password] {
	padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
    box-sizing: border-box;
	border: 1px solid #c7d0d2;
    border-radius: 2px;
	color:black;
}
input[type=submit]{
    width: 80px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
	border-radius: 20px;
	cursor: pointer;
	}
</style>
</body>
</html>