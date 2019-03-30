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
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
        function formtest(){
            if(count < 8){
            var a=document.getElementById('test');
            a.innerHTML=a.innerHTML+ "<tr><td>" + (count+1) + "</td><td><input type='date' name='date"+count+"'></td><td><input type='text' name='reason"+count+"'></td><td><input type='number' step='any' name='amount"+count+"'></td></tr>";
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
        
        <h1 class="heading">DEBIT</h1><br>
        <div class="dgrid">    
            <div class="dgridinsert">
            <h2>INSERT</h2><br>
            <button class="sbutton" onclick="formtest()">Add</button>
            <form action="#" method="POST">
            <table border="1" id="test" class="stable">
            <tr><th>Sl no</th><th>Date</th><th>Reason</th><th>Amount</th></tr>
            <tr><td>1</td><td><input type='date' name='date0'></td><td><input type='text' name='reason0'></td><td><input type='number' step='any' name='amount0'></td></tr>
            </table>
            <br>
            <input type="submit" class="sbutton" name="submit" value="Save">
            <button class="sbutton" href="debit.php">Reset</button>
            </form>

<?php
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

    $reason0=$_POST['reason0'];
    $reason1=$_POST['reason1'];
    $reason2=$_POST['reason2'];
    $reason3=$_POST['reason3'];
    $reason4=$_POST['reason4'];
    $reason5=$_POST['reason5'];
    $reason6=$_POST['reason6'];
    $reason7=$_POST['reason7'];

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
    echo "<tr colspan='3'>Inserted rows:<tr>";
    echo "<tr><th>Date</th><th>Reason</th><th>Amount</th></tr>"; 

    if($date0&&$reason0&&$amount0){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date0','$reason0',$amount0,'$user')");
        echo "<tr><td>$date0</td><td>$reason0</td><td>$amount0</td></tr>" ;
        $check=1;
    }
    if($date1&&$reason1&&$amount1){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date1','$reason1',$amount1,'$user')");
        echo "<tr><td>$date1</td><td>$reason1</td><td>$amount1</td></tr>" ;
        $check=1;
    }
    if($date2&&$reason2&&$amount2){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date2','$reason2',$amount2,'$user')");
        echo "<tr><td>$date2</td><td>$reason2</td><td>$amount2</td></tr>" ;
    }
    if($date3&&$reason3&&$amount3){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date3','$reason3',$amount3,'$user')");
        echo "<tr><td>$date3</td><td>$reason3</td><td>$amount3</td></tr>" ;
        $check=1;
    }
    if($date4&&$reason4&&$amount0){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date4','$reason4',$amount4,'$user')");
        echo "<tr><td>$date4</td><td>$reason4</td><td>$amount4</td></tr>" ;
        $check=1;
    }
    if($date5&&$reason5&&$amount5){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date5','$reason5',$amount5,'$user')");
        echo "<tr><td>$date5</td><td>$reason5</td><td>$amount5</td></tr>" ;
        $check=1;
    }
    if($date6&&$reason6&&$amount6){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date6','$reason6',$amount6,'$user')");
        echo "<tr><td>$date6</td><td>$reason6</td><td>$amount6</td></tr>" ;
        $check=1;
    }
    if($date7&&$reason7&&$amount7){
        mysqli_query($con,"insert into debit (date,reason,amount,user)  values('$date7','$reason7',$amount7,'$user')");
        echo "<tr><td>$date7</td><td>$reason7</td><td>$amount7</td></tr>" ;
        $check=1;
    }
    if($check==0){
        echo "<tr><td colspan='3'>Warning! empty values are not inserted</td></tr>";
    }
    
    echo'</table>';
   
}

?>


            </div>

            <div class="dgridview">
            <h2>VIEW</h2><br>
                <form action="#" method="POST">
                <table class="stable" border="1">
                <tr><th>Date start :</th><td><input type="date" name="start"></td></tr>
                <tr><th>End start :</th><td><input type="date" name="end"></td></tr>
                <tr><th>Purpose :</th><td><?php
                    $user=$_SESSION['user'];
                    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

                    $res=mysqli_query($con,"select distinct (reason) from debit where user='$user'");
                    
                    echo '<select name="viewreason">';
        
                    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
                       echo '<option value="';
                       echo $row[0];
                       echo '">';
                       echo $row[0];
                       echo '</option>'; 
                        }
                        echo '<option value="all">All</option>';
                    echo '</select>';
                    ?>
                    </td></tr>
                    </table>
                    <br>
                    <br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="sbutton" type="submit" value="View" name="view">
                     

                </form>
<?php
$user=$_SESSION['user'];
if(isset($_POST['view'])){

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

$input_date=$_POST['start'];
$start=date("Y-m-d",strtotime($input_date));
$input_date=$_POST['end'];
$end=date("Y-m-d",strtotime($input_date));
$count=0;
echo '<div id="print">';
$reason=$_POST['viewreason'];
if($reason=='all'){
    $res=mysqli_query($con,"select * from debit where date between '$start' and '$end' and user='$user'");
    
echo'<table border="1" class="stable"><tr><th>Date</th><th>Reason</th><th>Amount</th></tr>';
                    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
                        $viewdate=date("d-m-Y",strtotime($row[0]));
                        echo "<tr><td>$viewdate</td><td>$row[1]</td><td>$row[2]</td></tr>";    
                    $count++;
                        }
}
else{
$res=mysqli_query($con,"select * from debit where date between '$start' and '$end' and reason='$reason' and user='$user'");
echo'<table border="1" class="stable"><tr><th>Date</th><th>Reason</th><th>Amount</th></tr>';
                    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
                        $viewdate=date("d-m-Y",strtotime($row[0]));
                        echo "<tr><td>$viewdate</td><td>$row[1]</td><td>$row[2]</td></tr>";  
                    $count++;
                        }
}
if($count==0){
    echo "<tr><td colspan='3'>No reasults found</td></tr>";
}   
echo'</table>';
echo '</div>';
echo '<br><button onclick="print()" class="sbutton">Print</button>'; 
}
?>
    </div>
</div>   

    </body>
</html>