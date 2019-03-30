<?php
	session_start();
	if(!isset($_SESSION['adminuser']))

        {
            header("Refresh:2;url=adminlogin.html");
                die("LOGIN REQUIRED");
        }
?>
<?php
$uid=$_POST['uname'];


$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

$res=mysqli_query($con,"delete from user where userid='$uid'");

echo "successfully removed";
header("Refresh:2;url=edituser.php");
?>
      