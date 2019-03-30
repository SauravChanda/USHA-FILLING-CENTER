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
        <script></script>
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
<br><br>
         <table border=1 class="stable">

        <tr><td colspan="3">Employee Details</td></tr>
        <tr>
        <?php
        
        $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

        $res=mysqli_query($con,"select * from user");
        echo "<form action='useredit.php' method='POST'>";
        echo "<th>Please select an employee to view or update details: </th>";
        echo "<td><select name='uname'>";
        while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
           
            echo "<option value='$row[0]'>$row[1]</option>";
            }
        echo "</select></td> ";
        echo "<td><input class='sbutton' type='submit' value='Show'></td>";
        echo "</form>";
        
        ?>
        </tr>
        <tr>
            <?php
        
        $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

        $res=mysqli_query($con,"select * from user");
        echo "<form action='useremove.php' method='POST'>";
        echo "<th>Please select an employee to remove: </th>";
        echo "<td><select name='uname'>";
        while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
           
            echo "<option value='$row[0]'>$row[1]</option>";
            }
        echo "</select></td> ";
        echo "<td><input class='sbutton' type='submit' value='Remove'></td>";
        echo "</form>";
        
        ?>
        </tr>
        </table>
    </body>
</html>