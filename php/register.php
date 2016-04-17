<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $connection, "projects"); 
if(isset($_POST['submit']))
{ 
$name=$_POST["name"];
$email = $_POST["email"];
$password=$_POST["password"];
    $sql="SELECT * FROM register WHERE email='$email' ";
    $result=mysqli_query($connection, $sql);
    $count=mysqli_num_rows($result);
    if($count<1)
    {
         $query = mysqli_query($connection, "insert into register (name,email,password) values ('$name','$email,'$password')");
          
        header( "location:http://localhost/Library-master/index.html#/app/home");
    }
    else
    {
            echo "<script>alert('Email-id already exist');</script>";    
    }
}
mysqli_close($connection);
?>