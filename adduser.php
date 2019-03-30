<?php
	session_start();
	if(!isset($_SESSION['adminuser']))

        {
            header("Refresh:2;url=adminlogin.html");
                die("LOGIN REQUIRED");
        }
?>
<html>
    <head></head>

<body>
<?php

$user=$_POST['user'];
$pass=$_POST['password'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$address=$_POST['address'];
$mname=$_POST['mname'];

$input_date=$_POST['dob'];
$dob=date("Y-m-d",strtotime($input_date));

$phone=$_POST['phone'];
$sex=$_POST['sex'];
$father=$_POST['father'];
$education=$_POST['education'];
$cif=$_POST['cif'];
$acc=$_POST['acc'];
$branch_name=$_POST['branchname'];
$branch_code=$_POST['branchcode'];
$bank_name=$_POST['bank'];
$ifsc=$_POST['ifsc'];
$micr=$_POST['micr'];

$check=0;
$id;


$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

$res=mysqli_query($con,"select * from user");

while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    if($row[1]==$user){
        $check=1;
        echo "Sorry username already used";
        header("Refresh: 2 ;url=adduser.html");
    }     
    }
    if($check==0){
        mysqli_query($con,"insert into user (uname,password) values ('$user','$pass')");

        if($fname){
            mysqli_query($con,"update user set fname='$fname' where uname='$user'");
        }
        if($mname){
            mysqli_query($con,"update user set mname='$mname' where uname='$user'");
        }
        if($lname){
            mysqli_query($con,"update user set lname='$lname' where uname='$user'");
        }
        if($dob){
            mysqli_query($con,"update user set dob='$dob' where uname='$user'");
        }
        if($address){
            mysqli_query($con,"update user set address='$address' where uname='$user'");
        }
        if($age){
            mysqli_query($con,"update user set age=$age where uname='$user'");
        }
        if($phone){
            mysqli_query($con,"update user set phone=$phone where uname='$user'");
        }
        if($sex){
            mysqli_query($con,"update user set sex='$sex' where uname='$user'");
        }
        if($father){
            mysqli_query($con,"update user set father='$father' where uname='$user'");
        }
        if($education){
            mysqli_query($con,"update user set education='$education' where uname='$user'");
        }
        if($cif){
            mysqli_query($con,"update user set cif=$cif where uname='$user'");
        }
        if($acc){
            mysqli_query($con,"update user set accno=$acc where uname='$user'");
        }
        if($branch_name){
            mysqli_query($con,"update user set branchname='$branch_name' where uname='$user'");
        }
        if($branch_code){
            mysqli_query($con,"update user set branchcode=$branch_code where uname='$user'");
        }
        if($bank_name){
            mysqli_query($con,"update user set bankname='$bank_name' where uname='$user'");
        }
        if($ifsc){
            mysqli_query($con,"update user set ifsc='$ifsc' where uname='$user'");
        }
        if($micr){
            mysqli_query($con,"update user set micr='$micr' where uname='$user'");
        }
        
        echo "successful signup";
    }


header("Refresh:2;url=edituser.php");
?>
</body>
</html>