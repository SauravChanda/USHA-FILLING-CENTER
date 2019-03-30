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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
</head>
<BODY>
<div class="header">
    <a style="font-size: 20px;background-color: grey;border-radius: 5px; ">Admin home</a>
    <a href="viewsheet.php">View machine details</a>
    <a href="adduser.html">Add employee</a>
    <a href="edituser.php">Employee details</a>
    <a href="admindaily.php">Daily Sheet</a>
    <a href="logout.php" style="float:right; padding:3px;">logout</a>
</div>
<br><br><br>
<div class="options" style="padding:0% 30%;text-align: center;">

<form action="admindailyview.php" method="POST" class="login">
    <input type="submit" value="View daily sheet" style="background: white">
</form>

<form action="admindailydrop.php" method="POST" class="login">
    <input type="submit" value="Delete a particular entry" style="background: white">
</form>


</div>

</BODY>    
</html>

