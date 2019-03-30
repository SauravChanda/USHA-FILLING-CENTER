<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$check=0;
$id;

$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

$res=mysqli_query($con,"select * from admin");

while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    if($row[0]==$user && $row[1]==$pass){
        $check=1;
        $_SESSION["adminuser"]=$user;
        header("Refresh:0,url=viewsheet.php?user=$user");
    }     
    }
if($check==0){
    echo "Invalid username or password";
    header("Refresh:2;url=adminlogin.html");
}
?>