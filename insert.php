<?php
session_start();
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
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
$uid=$_SESSION['userid'];
$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));


if($fname){
    $res=mysqli_query($con,"update user set fname='$fname' where userid=$uid");
}
if($mname){
    $res=mysqli_query($con,"update user set mname='$mname' where userid=$uid");
}
if($lname){
    $res=mysqli_query($con,"update user set lname='$lname' where userid=$uid");
}
if($dob){
    $res=mysqli_query($con,"update user set dob='$dob' where userid=$uid");
}
if($address){
    mysqli_query($con,"update user set address='$address' where userid=$uid");
}
if($age){
    $res=mysqli_query($con,"update user set age=$age where userid=$uid");
}
if($phone){
    $res=mysqli_query($con,"update user set phone=$phone where userid=$uid");
}
if($sex){
    $res=mysqli_query($con,"update user set sex='$sex' where userid=$uid");
}
if($father){
    $res=mysqli_query($con,"update user set father='$father' where userid=$uid");
}
if($education){
    $res=mysqli_query($con,"update user set education='$education' where userid=$uid");
}
if($cif){
    $res=mysqli_query($con,"update user set cif=$cif where userid=$uid");
}
if($acc){
    $res=mysqli_query($con,"update user set accno=$acc where userid=$uid");
}
if($branch_name){
    $res=mysqli_query($con,"update user set branchname='$branch_name' where userid=$uid");
}
if($branch_code){
    $res=mysqli_query($con,"update user set branchcode=$branch_code where userid=$uid");
}
if($bank_name){
    $res=mysqli_query($con,"update user set bankname='$bank_name' where userid=$uid");
}
if($ifsc){
    $res=mysqli_query($con,"update user set ifsc='$ifsc' where userid=$uid");
}
if($micr){
    $res=mysqli_query($con,"update user set micr='$micr' where userid=$uid");
}




// $res=mysqli_query($con,"update user set fname='$fname',lname='$lname',age=$age,address='$address' where userid=$uid");
echo "SUCCESSFULLY SAVED";
header("Refresh:2; url=edituser.php");

?>