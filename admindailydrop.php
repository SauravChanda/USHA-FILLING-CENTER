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
</div>
    <h1 >Daily report</h1>
<form action="#" method="POST">

Select which day's entry to be drop:
<select name="date">
<?php
$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
$count=0;
$res=mysqli_query($con,"select distinct (udate) from m1");
while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    if($row[0]!='2018-05-31'){
    echo "<option value='$row[0]'>$row[0]</option>";
    }
    
}
?>
</select>
&nbsp&nbsp;<input type="submit" value="delete" name="submit" class="sbutton">
</form>

<?php    

if(isset($_POST['submit'])){

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

$input_date=$_POST['date'];
$date=date("Y-m-d",strtotime($input_date));

$res=mysqli_query($con,"delete from m1 where udate='$date'");
$res=mysqli_query($con,"delete from m2 where udate='$date'");
$res=mysqli_query($con,"delete from m3 where udate='$date'");

echo "<script>document.writeln('Delete successful')</script>";
header("Refresh:1;url=admindailydrop.php");
}
?>


</body>
</html>