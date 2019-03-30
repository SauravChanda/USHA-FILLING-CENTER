<?php
	session_start();
	if(!isset($_SESSION['user']))

        {
            header("Refresh:2;url=index.html");
                die("LOGIN REQUIRED");
        }
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
        <script>
            var count=1;

        function print(){
            var printContent = document.getElementById('print');
            var WinPrint = window.open('', '', 'width=900,height=650');
            WinPrint.document.write(printContent.innerHTML);
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
            WinPrint.document.close();
        }
        function formtest(){
            if(count < 8){
            var a=document.getElementById('test');
            a.innerHTML=a.innerHTML+ "<tr><td>" + (count+1) + "</td><td><input type='date' name='date"+count+"'></td><td><input type='text' name='purpose"+count+"'></td><td><select name='type"+count+"'><option value='HSD'>HSD</option><option value='MS'>MS</option><option value='CC'>CC</option><option value='Others'>Others</option></select></td><td><input type='number' name='quantity"+count+"'></td><td><input type='number' step='any' name='amount"+count+"'></td></tr>";
            ++count;
            }
            else{
                alert("Exceeded maximum number of rows");
            }
        }
        </script>
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
        
        <h1 class="heading">CREDIT</h1><br>
        <div class="dgrid">    
            <div class="dgridinsert">
            <h2>INSERT</h2><br>
            <button class="sbutton" onclick="formtest()">Add</button>
            <form action="#" method="POST">
            <table border="1" id="test" class="stable"> 
            <tr><th>Sl no</th><th>Date</th><th>Purpose</th><th>Type</th><th>Quantity</th><th>Amount</th></tr>
            <tr><td>1</td><td><input type='date' name='date0'></td><td><input type='text' name='purpose0'></td><td><select name='type0'><option value="HSD">HSD</option><option value="MS">MS</option><option value="CC">CC</option><option value="Others">Others</option></select></td><td><input type='number' name='quantity0'></td><td><input type='number' step='any' name='amount0'></td></tr>
            </table>
            <br>
            <input type="submit" name="submit" class="sbutton" value="Save">
            <button class="sbutton" href="credit.php">Reset</button>
            </form>

<?php
$user=$_SESSION['user'];
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
if(isset($_POST['submit'])){

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

    $user=$_SESSION['user'];

    $input_date=$_POST['date0'];
    $date0=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date1'];
    $date1=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date2'];
    $date2=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date3'];
    $date3=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date4'];
    $date4=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date5'];
    $date5=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date6'];
    $date6=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date7'];
    $date7=date("Y-m-d",strtotime($input_date));

    $purpose0=$_POST['purpose0'];
    $purpose1=$_POST['purpose1'];
    $purpose2=$_POST['purpose2'];
    $purpose3=$_POST['purpose3'];
    $purpose4=$_POST['purpose4'];
    $purpose5=$_POST['purpose5'];
    $purpose6=$_POST['purpose6'];
    $purpose7=$_POST['purpose7'];

    $type0=$_POST['type0'];
    $type1=$_POST['type1'];
    $type2=$_POST['type2'];
    $type3=$_POST['type3'];
    $type4=$_POST['type4'];
    $type5=$_POST['type5'];
    $type6=$_POST['type6'];
    $type7=$_POST['type7'];

    $quantity0=$_POST['quantity0'];
    $quantity1=$_POST['quantity1'];
    $quantity2=$_POST['quantity2'];
    $quantity3=$_POST['quantity3'];
    $quantity4=$_POST['quantity4'];
    $quantity5=$_POST['quantity5'];
    $quantity6=$_POST['quantity6'];
    $quantity7=$_POST['quantity7'];

    $amount0=$_POST['amount0'];
    $amount1=$_POST['amount1'];
    $amount2=$_POST['amount2'];
    $amount3=$_POST['amount3'];
    $amount4=$_POST['amount4'];
    $amount5=$_POST['amount5'];
    $amount6=$_POST['amount6'];
    $amount7=$_POST['amount7'];

    $check=0;

    echo "<table border='1' class='stable'>";
    echo "<tr colspan='4'>Inserted rows:<tr>";
    echo "<tr><th>Date</th><th>Purpose</th><th>Type</th><th>Quantity</th><th>Amount</th></tr>";
    if($date0&&$purpose0&&$type0&&$amount0){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity)  values('$date0','$purpose0','$type0',$amount0,'$user',$quantity0)");
        echo "<tr><td>$date0</td> <td>$purpose0</td> <td>$type0</td> <td>$quantity0</td> <td>$amount0</td> </tr>" ;
        $check=1;
    }
    if($date1&&$purpose2&&$type1&&$amount1){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity) values('$date1','$purpose1','$type1',$amount1,'$user',$quantity1)");
        echo "<tr><td>$date1</td> <td>$purpose1</td> <td>$type1</td> <td>$quantity1</td> <td>$amount1</td> </tr>" ;
        $check=1;
    }
    if($date2&&$purpose2&&$type2&&$amount2){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity) values('$date2','$purpose2','$type2',$amount2,'$user',$quantity2)");
        echo "<tr><td>$date2</td> <td>$purpose2</td> <td>$type2</td> <td>$quantity2</td> <td>$amount2</td> </tr>" ;
        $check=1;
    }
    if($date3&&$purpose3&&$type3&&$amount3){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity) values('$date3','$purpose3','$type3',$amount3,'$user',$quantity3)");
        echo "<tr><td>$date3</td> <td>$purpose3</td> <td>$type3</td> <td>$quantity3</td> <td>$amount3</td> </tr>" ;
        $check=1;
    }
    if($date4&&$purpose4&&$type4&&$amount4){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity) values('$date4','$purpose4','$type4',$amount4,'$user',$quantity4)");
        echo "<tr><td>$date4</td> <td>$purpose4</td> <td>$type4</td> <td>$quantity4</td> <td>$amount4</td> </tr>" ;
        $check=1;
    }
    if($date5&&$purpose5&&$type5&&$amount5){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity) values('$date5','$purpose5','$type5',$amount5,'$user',$quantity5)");
        echo "<tr><td>$date5</td> <td>$purpose5</td> <td>$type5</td> <td>$quantity5</td> <td>$amount5</td> </tr>" ;
        $check=1;
    }
    if($date6&&$purpose6&&$type6&&$amount6){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity) values('$date6','$purpose6','$type6',$amount6,'$user',$quantity6)");
        echo "<tr><td>$date6</td> <td>$purpose6</td> <td>$type6</td> <td>$quantity6</td> <td>$amount6</td> </tr>" ;
        $check=1;
    }
    if($date7&&$purpose7&&$type7&&$amount7){
        mysqli_query($con,"insert into credit (date,purpose,type,amount,user,quantity) values('$date7','$purpose7','$type7',$amount7,'$user',$quantity7)");
        echo "<tr><td>$date7</td> <td>$purpose7</td> <td>$type7</td> <td>$quantity7</td> <td>$amount7</td> </tr>" ;
        $check=1;
    }
    if($check==0){
        echo "<tr><td colspan='4'>Warning! empty values are not inserted</td></tr>";
    }
    
    echo "</table>";

}

?>


            </div>

            <div class="dgridview">
            <h2>VIEW</h2><br><br>
                <form action="#" method="POST">
                <table class="stable" border="1">
                <tr>
                    <th>Date start :</th><td><input type="date" name="start"></td>
                </tr>
                <tr>
                    <th>End start :</th><td><input type="date" name="end"></td>
                </tr>
                <tr>
                    <th>Purpose :</th>
                    <td><?php
                    $user=$_SESSION['user'];
                    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

                    $res=mysqli_query($con,"select distinct (purpose) from credit where user='$user'");
                    
                    echo '<select name="viewpurpose">';

                    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
                       echo '<option value="';
                       echo $row[0];
                       echo '">';
                       echo $row[0];
                       echo '</option>'; 
                        }
                       echo'<option value="all">All</option>';
                    echo '</select>';
                    ?>
                    </td>
                    </tr>
                    <tr>
                    <th>Type : </th><td><select name="viewtype">
                                <option value="HSD">HSD</option>
                                <option value="MS">MS</option>
                                <option value="CC">CC</option>
                                <option value="Others">Others</option>
                                <option value="all">All</option>
                            </select></td>
                    </tr>
                    </table>
                    <br><br>
                    &nbsp&nbsp&nbsp;<input type="submit" class="sbutton" value="View" name="view">
                     

                </form>
<?php
$user=$_SESSION['user'];
if(isset($_POST['view'])){

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

$input_date=$_POST['start'];
$start=date("Y-m-d",strtotime($input_date));
$input_date=$_POST['end'];
$end=date("Y-m-d",strtotime($input_date));
$purpose=$_POST['viewpurpose'];
$type=$_POST['viewtype'];
$count=0;
echo '<div id="print">';
if($purpose=='all' && $type=='all'){
    $res=mysqli_query($con,"select * from credit where date between '$start' and '$end' and user='$user'");
    echo'<table border="1" class="stable"><tr><th>Date</th><th>Purpose</th><th>Type</th><th>Quantity</th><th>Amount</th></tr>';
    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $viewdate=date("d-m-Y",strtotime($row[0]));
    echo "<tr><td>$viewdate</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td><td>$row[3]</td><tr>";
    $count++;    
        }   
}
else if($purpose=='all'){
    $res=mysqli_query($con,"select * from credit where date between '$start' and '$end' and type='$type' and user='$user'");
    echo'<table border="1" class="stable"><tr><th>Date</th><th>Purpose</th><th>Type</th><th>Quantity</th><th>Amount</th></tr>';
    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $viewdate=date("d-m-Y",strtotime($row[0]));
    echo "<tr><td>$viewdate</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td><td>$row[3]</td><tr>";
    $count++;    
        }   
}
else if($type=='all'){
    $res=mysqli_query($con,"select * from credit where date between '$start' and '$end' and purpose='$purpose' and user='$user'");
    echo'<table border="1" class="stable"><tr><th>Date</th><th>Purpose</th><th>Type</th><th>Quantity</th><th>Amount</th></tr>';
    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $viewdate=date("d-m-Y",strtotime($row[0]));
    echo "<tr><td>$viewdate</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td><td>$row[3]</td><tr>";
    $count++;    
        }   
}
else{
$res=mysqli_query($con,"select * from credit where date between '$start' and '$end' and purpose='$purpose' and type='$type' and user='$user'");
                    echo'<table border="1" class="stable"><tr><th>Date</th><th>Purpose</th><th>Type</th><th>Quantity</th><th>Amount</th></tr>';
                    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
                        $viewdate=date("d-m-Y",strtotime($row[0]));
                        echo "<tr><td>$viewdate</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td><td>$row[3]</td><tr>";
                    $count++;    
                        }
}
                    
if($count==0){
    echo "<tr><td colspan='4'>No reasults found</td></tr>";
}
echo'</table>';
echo '</div>';
echo '<br><button class="sbutton" onclick="print()">Print</button>'; 
}

?>
    </div>
</div>   

    </body>
</html>