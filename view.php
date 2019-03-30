<html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
<body>
<div class="header">
        <a style="font-size: 20px;background-color: grey;border-radius: 5px;" href="wellcome.php">USHA FILLING CENTRE</a>
        <a href="view.php">My details</a>
        <a href="daily.php">Daily sheet</a>
        <a href="credit.php">Credit</a>
        <a href="debit.php">Debit</a>
        <a href="lubedetails.php">Lube Details</a>
        <a href="printoption.html">View and print</a>
        <a href="logout.php" style="float:right; padding:3px;">logout</a>
</div>   

<?php
session_start();
$fname;
$lname;
$address;
$age;
//echo $uid;
$uname=$_SESSION['user'];

        echo "<br>";
ob_start();
$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
        
        $res=mysqli_query($con,"select * from user");
        while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
           if($row[1]==$uname){
        echo "<br>PERSONAL DETAILS :<br><br>";
        echo "<table border='1' class='stable'>";
        if($row[3]){
           echo "<tr><th>";
           echo "First name: ";
           echo "</th><td>";
           echo $row[3];
           echo "</td></tr>";
        }
        if($row[7]){
                echo "<tr><th>";
                echo "Middle name: ";
                echo "</th><td>";
                echo $row[7];
                echo "</td></tr>";
             }
        if($row[4]){
           echo "<tr><th>";
           echo "Last name: ";
           echo "</th><td>";
           echo $row[4];
           echo "</td></tr>";
        }
        if($row[5]){
                echo "<tr><th>";
                echo "Age: ";
                echo "</th><td>";
                echo $row[5];
                echo "</td></tr>";
        }
        if($row[6]){
                echo "<tr><th>";
                echo "Address: ";
                echo "</th><td>";
                echo $row[6];
                echo "</td></tr>";
        }
        if($row[8]){
                echo "<tr><th>";
                echo "DOB: ";
                echo "</th><td>";
                $viewdate=date("d-m-Y",strtotime($row[8]));
                echo $viewdate;
                echo "</td></tr>";
        }
        if($row[9]){
                echo "<tr><th>";
                echo "Phone: ";
                echo "</th><td>";
                echo $row[9];
                echo "</td></tr>";
        }
        if($row[10]){
                echo "<tr><th>";
                echo "Sex: ";
                echo "</th><td>";
                echo $row[10];
                echo "</td></tr>";
        }
        if($row[11]){
                echo "<tr><th>";
                echo "Father: ";
                echo "</th><td>";
                echo $row[11];
                echo "</td></tr>";
        }
        if($row[12]){
                echo "<tr><th>";
                echo "Education: ";
                echo "</th><td>";
                echo $row[12];
                echo "</td></tr>";
        }
        echo "</table>";
        echo "<table border='1' class='stable'>";
        echo "<br>BANK DETAILS :<br><br>";
        if($row[13]){
                echo "<tr><th>";
                echo "CIF No: ";
                echo "</th><td>";
                echo $row[13];
                echo "</td></tr>";
        }
        if($row[14]){
                echo "<tr><th>";
                echo "Account No: ";
                echo "</th><td>";
                echo $row[14];
                echo "</td></tr>";
        }
        if($row[15]){
                echo "<tr><th>";
                echo "Branch name: ";
                echo "</th><td>";
                echo $row[15];
                echo "</td></tr>";
        }
        if($row[16]){
                echo "<tr><th>";
                echo "Branch code: ";
                echo "</th><td>";
                echo $row[16];
                echo "</td></tr>";
        }
        if($row[17]){
                echo "<tr><th>";
                echo "Bank name: ";
                echo "</th><td>";
                echo $row[17];
                echo "</td></tr>";
        }
        if($row[18]){
                echo "<tr><th>";
                echo "IFSC code: ";
                echo "</th><td>";
                echo $row[18];
                echo "</td></tr>";
        }
        if($row[19]){
                echo "<tr><th>";
                echo "MICR code: ";
                echo "</th><td>";
                echo $row[19];
                echo "</td></tr>";
        }

        echo "</table>";
            }
        }
?>

</body>
</html>