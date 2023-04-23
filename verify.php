<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
die("connection failed".mysqli_connect.error());
}
else{
$un=$_POST["id"];
$p=$_POST["pass"];
$sql="SELECT * from userdata where ID ='$un' and password='$p'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)>=1)
{
$_SESSION["username"]=$_POST["id"];
$_SESSION["password"]=$_POST["pass"];
header("location:puzzle1.html");
}
else{
header("location:login.php");
}
}
mysqli_close($conn);
?>