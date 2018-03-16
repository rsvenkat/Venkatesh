<?php
session_start();
include("include/connect.php");  
$username= $_POST["username"];
$password = $_POST["password"]; 

$result = mysqli_query($connect,"SELECT * FROM admin where u_name ='$username' and pass='$password' ") or (mysqli_error());

$num=mysqli_num_rows($result);
if($num>0)
{
	$row=mysqli_fetch_array($result);
	$_SESSION['uname']=$row['u_name'];	
	$_SESSION['pwd']=$row['pass'];	
	echo "<script type=text/javascript>window.location='add_employee.php'</script>";
	
}

else 
{
	echo "<script type=text/javascript>
	alert('Invalid userName or Password')
	window.location='index.php'
	</script>";
}


mysqli_close($connect);
?>