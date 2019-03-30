<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['adminuser']))

        {
            header("Refresh:2;url=adminlogin.html");
                die("LOGIN REQUIRED");
        }
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <a style="font-size: 20px;background-color: grey;border-radius: 5px; ">Admin home</a>
    <a href="viewsheet.php">View machine details</a>
    <a href="adduser.html">Add employee</a>
    <a href="edituser.php">Employee details</a>
    <a href="admindaily.php">Daily Sheet</a>
    <a href="logout.php" style="float:right; padding:3px;">logout</a>
</div><br>
<?php
$fname;
$mname;
$lname;
$address;
$age;
$phone;
$sex;
$father;
$education;

$cif;
$acc;
$branch_code;
$branch_name;
$bank_name;
$ifsc;
$micr;

$uid=$_POST['uname'];
//echo $uid;
$_SESSION["userid"]=$uid;

$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

        $res=mysqli_query($con,"select * from user");
        while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
           if($row[0]==$uid){
            $fname=$row[3];
            $lname=$row[4];
            $age=$row[5];
            $address=$row[6];
            $mname=$row[7];
            $viewdate=date("d-m-Y",strtotime($row[8]));
            $dob=$viewdate;
            $phone=$row[9];
            $sex=$row[10];
            $father=$row[11];
            $education=$row[12];
            $cif=$row[13];
            $acc=$row[14];
            $branch_name=$row[15];
            $branch_code=$row[16];
            $bank_name=$row[17];
            $ifsc=$row[18];
            $micr=$row[19];
            }
        }


echo"
<table border='1' class='stable'>

<tr><td colspan='2'>Personal details: </td></tr>
<form action='insert.php' method='POST'>
<tr><th>First name :</th><td><input type='text' name='fname' placeholder='$fname'></td></tr>
<tr><th>Middle name :</th><td><input type='text' name='mname' placeholder='$mname'></td></tr>
<tr><th>Last name :</th><td><input type='text' name='lname' placeholder='$lname'></td></tr>";

if($dob){
        echo "<tr><th>DOB :</th><td> $dob </td></tr>";
}

echo"
<tr><th>Update DOB :</th><td><input type='date' name='dob'></td></tr>
<tr><th>Age :</th><td><input type='number' name='age' placeholder='$age'></td></tr>
<tr><th>Address :</th><td><input type='text' name='address' placeholder='$address'></td></tr>
<tr><th>Phone :</th><td><input type='number' name='phone' placeholder='$phone'></td></tr>
<tr><th>Sex :</th><td><select name='sex'>
<option value='' disabled selected>$sex</option>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
<option value='Others'>Others</option>
</select></td></tr>
<tr><th>Father :</th><td><input type='text' name='father' placeholder='$father'></td></tr>
<tr><th>Education :</th><td><select name='education'>
<option value='' disabled selected>$education</option>
<option value='Matric'>Matric</option>
<option value='HS'>HS</option>
<option value='Graduate'>Graduate</option>
<option value='Post Graduate'>Post Grduate</option>
</select></td></tr>

<tr><td colspan='2'>Bank details: </td></tr>
<tr><th>CIF No :</th><td><input type='number' name='cif' placeholder='$cif'></td></tr>
<tr><th>A/C No :</th><td><input type='number' name='acc' placeholder='$acc'></td></tr>
<tr><th>Bank Name :</th><td><input type='text' name='bank' placeholder='$bank_name'></td></tr>
<tr><th>IFSC Code :</th><td><input type='text' name='ifsc' placeholder='$ifsc'></td></tr>
<tr><th>Branch Name :</th><td><input type='text' name='branchname' placeholder='$bank_name'></td></tr>
<tr><th>Branch Code :</th><td><input type='number' name='branchcode' placeholder='$branch_code'></td></tr>
<tr><th>MICR Code :</th><td><input type='text' name='micr' placeholder='$micr'></td></tr>
</table>
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class='sbutton' type='submit' value='Update details'>
</form>";

?>

</body>
</html>