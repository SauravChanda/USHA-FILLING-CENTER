<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$check=0;
$id;

$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

$res=mysqli_query($con,"select * from user");

while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    if($row[1]==$user && $row[2]==$pass){
        $check=1;
        header("Refresh:0,url=wellcome.php?user=$user");
        $_SESSION["user"]=$user;
        $_SESSION["userid"]=$row[0];
    }     
    }
if($check==0){
    echo "Invalid username or password";
    header("Refresh:2;url=index.html");
}
?>