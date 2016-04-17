<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("projects",$con);
if(isset($_POST['submit'])){

$email = $_POST["email"];
$password=$_POST["password"];
$result=mysql_query("select * from register where email='$email' and password='$password'");
$count=mysql_num_rows($result);
if($count==1)
{
header("location:http://localhost/Library/index.html#/app/home");
}
else
{
echo "<script type='text/javascript'>alert('Wrong username or Password');</script>";
}
}
mysql_close($con);
?>