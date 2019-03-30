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
    <script>

    function print(){
        var printContent = document.getElementById('print');
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
        WinPrint.document.close();
    }

    function check(){
        var option=myform.machine;
        if(option.value==""){
            alert("Please select an option");
            return false;
        }
    }
    </script>
    <link rel="stylesheet" href="style.css"></head>
    <body>
    <div class="header">
    <a style="font-size: 20px;background-color: grey;border-radius: 5px; ">Admin home</a>
    <a href="viewsheet.php">View machine details</a>
    <a href="adduser.html">Add employee</a>
    <a href="edituser.php">Employee details</a>
    <a href="admindaily.php">Daily Sheet</a>
    <a href="logout.php" style="float:right; padding:3px;">logout</a>
</div>
    <h1 >Machine Details</h1>
        <form name="myform" onsubmit="return check()" action="#" method="POST">
Select machine:            
                <select name="machine">
                <option value="" disabled selected>Select your option</option>
                <option value="1">Machine1</option>
                <option value="2">Machine2</option>
                <option value="3">Machine3</option>
            </select>
&nbsp;
            <input type="submit" class="sbutton" name="submit" value="View">
</form>


<?php    

if(isset($_POST['submit'])){

    echo '<br><button class="sbutton" onclick="print()">Print</button><br>'; 

    $machine=$_POST['machine'];

    echo "<br>";

    echo "Your selected machine is Machine ";
    echo $machine;
    echo "<br><br>";
    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
$tablename="m".$machine;
$res=mysqli_query($con,"select * from $tablename order by udate desc");
echo '<div id="print">';
echo "<table border='1' class='stable'>";
    echo "<tr>
            <th>Date</td>
            <th>Employee</th>
            <th>Shift</th>
            <th>Outlet 1</th>
            <th>Outlet 2</th>
            <th>Outlet 3</th>
            <th>Outlet 4</th>
         </tr>";
while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $viewdate=date("d-m-Y",strtotime($row[0]));
    echo "<tr>
            <td>$viewdate</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
          </tr>";
}
echo '</table></div>';
}
?>