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
</script>
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
    <h1 >Daily sheet entry</h1>
        <form action="#" method="POST">

Select start date:
            <input type="date" name="date1"><br>
Select end date:
            <input type="date" name="date2">
            
<br>
            <input type="submit" class="sbutton" name="submit" value="Show">
            <button class="sbutton" href="periodicreport.php">Reset</button>
        </form>



<?php    

if(isset($_POST['submit'])){
    $input_date=$_POST['date1'];
    $date1=date("Y-m-d",strtotime($input_date));
    $input_date=$_POST['date2'];
    $date2=date("Y-m-d",strtotime($input_date));
    $temp;

    if($date1>$date2){
        $temp=$date1;
        $date1=$date2;
        $date2=$temp;
    }
    $date=$date1;
echo '<div id="print">';
echo '<table border="1" class="stable">';

while($date<=$date2){

    $out1=0;
    $out2=0;
    $out3=0;
    $out4=0;
    $totalsaleamount=0;
    $totalobserved=0;
    $totalsale=0;
    $productrate=0;
    $amount=0;
    $recieved=0;
    $short=0;
    $remarks=0;

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
    $viewdate=date("d-m-Y",strtotime($date));
    echo "<tr><td colspan='9'>Date : $viewdate</td></tr>";
    
    echo'<tr>
         <th>Shift</th>
         <th>Machine</th>
         <th>Total Observed Volume</th>
         <th>Total Sale Volume</th>
         <th>Product Rate</th>
         <th>Amount</th>
         <th>Recieved amount</th>
         <th>Short</th>
         <th>Remarks</th>
        </tr>';
//------------------------------------------------------------------------------------------
//Shift1 Machine1
    $res=mysqli_query($con,"select * from m1 where udate='$date' and shift=1");
    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        $out1=$row[3];
        $out2=$row[4];
        $out3=$row[5];
        $out4=$row[6];
        $totalobserved=$out1+$out2+$out3+$out4;
        $productrate=$row[7];
        $totalsale=$row[8];
        $amount=$totalsale*$productrate;
        $totalsaleamount=$totalsaleamount+$amount;
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
        <tr>
         <td rowspan="3">Shift1</td>
         <td>Machine 1</td>
         <td>'.$totalobserved.'</td>
         <td>'.$totalsale.'</td>
         <td>Rs'.$productrate.'</td>
         <td>Rs'.$amount.'</td>
         <td>Rs'.$recieved.'</td>
         <td>'.($amount-$recieved).'</td>
         <td>'.$remarks.'</td>
        </tr>';
//-----------------------------------------------------------------------------------------------
//Shift1 Machine2        

    $out1=0;
    $out2=0;
    $out3=0;
    $out4=0;

    $totalobserved=0;
    $totalsale=0;
    $productrate=0;
    $amount=0;
    $recieved=0;
    $short=0;
    $remarks=0;

    $res=mysqli_query($con,"select * from m2 where udate='$date'and shift=1");
    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        $out1=$row[3];
        $out2=$row[4];
        $out3=$row[5];
        $out4=$row[6];
        $totalobserved=$out1+$out2+$out3+$out4;
        $productrate=$row[7];
        $totalsale=$row[8];
        $amount=$totalsale*$productrate;
        $totalsaleamount=$totalsaleamount+$amount;
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
        <tr>
         <td>Machine 2</td>
         <td>'.$totalobserved.'</td>
         <td>'.$totalsale.'</td>
         <td>Rs'.$productrate.'</td>
         <td>Rs'.$amount.'</td>
         <td>Rs'.$recieved.'</td>
         <td>'.($amount-$recieved).'</td>
         <td>'.$remarks.'</td>
        </tr>';
//-----------------------------------------------------------------------------------------
//Shift1 Machine3

    $out1=0;
    $out2=0;
    $out3=0;
    $out4=0;

    $totalobserved=0;
    $totalsale=0;
    $productrate=0;
    $amount=0;
    $recieved=0;
    $short=0;
    $remarks=0;

        $res=mysqli_query($con,"select * from m3 where udate='$date'and shift=1");
        while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            $out1=$row[3];
            $out2=$row[4];
            $out3=$row[5];
            $out4=$row[6];
            $totalobserved=$out1+$out2+$out3+$out4;
            $productrate=$row[7];
            $totalsale=$row[8];
            $amount=$totalsale*$productrate;
            $totalsaleamount=$totalsaleamount+$amount;
            $recieved=$row[9];
            $remarks=$row[10];
        }
        
        
        echo'
        <tr>
         <td>Machine 3</td>
         <td>'.$totalobserved.'</td>
         <td>'.$totalsale.'</td>
         <td>Rs'.$productrate.'</td>
         <td>Rs'.$amount.'</td>
         <td>Rs'.$recieved.'</td>
         <td>'.($amount-$recieved).'</td>
         <td>'.$remarks.'</td>
        </tr>';
//-------------------------------------------------------------------------    
//Shift2 Machine1

$out1=0;
$out2=0;
$out3=0;
$out4=0;

$totalobserved=0;
$totalsale=0;
$productrate=0;
$amount=0;
$recieved=0;
$short=0;
$remarks=0;


$res=mysqli_query($con,"select * from m1 where udate='$date'and shift=2");
while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $out1=$row[3];
    $out2=$row[4];
    $out3=$row[5];
    $out4=$row[6];
    $totalobserved=$out1+$out2+$out3+$out4;
    $productrate=$row[7];
    $totalsale=$row[8];
    $amount=$totalsale*$productrate;
    $totalsaleamount=$totalsaleamount+$amount;
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
    <tr>
     <td rowspan="3">Shift2</td>
     <td>Machine 1</td>
     <td>'.$totalobserved.'</td>
     <td>'.$totalsale.'</td>
     <td>Rs'.$productrate.'</td>
     <td>Rs'.$amount.'</td>
     <td>Rs'.$recieved.'</td>
     <td>'.($amount-$recieved).'</td>
     <td>'.$remarks.'</td>
    </tr>';
//-----------------------------------------------------------------------------------------------
//Shift2 Machine2

$out1=0;
$out2=0;
$out3=0;
$out4=0;

$totalobserved=0;
$totalsale=0;
$productrate=0;
$amount=0;
$recieved=0;
$short=0;
$remarks=0;

$res=mysqli_query($con,"select * from m2 where udate='$date'and shift=2");
while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $out1=$row[3];
    $out2=$row[4];
    $out3=$row[5];
    $out4=$row[6];
    $totalobserved=$out1+$out2+$out3+$out4;
    $productrate=$row[7];
    $totalsale=$row[8];
    $amount=$totalsale*$productrate;
    $totalsaleamount=$totalsaleamount+$amount;
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
<tr>
 <td>Machine 3</td>
 <td>'.$totalobserved.'</td>
 <td>'.$totalsale.'</td>
 <td>Rs'.$productrate.'</td>
 <td>Rs'.$amount.'</td>
 <td>Rs'.$recieved.'</td>
 <td>'.($amount-$recieved).'</td>
 <td>'.$remarks.'</td>
</tr>';
//-----------------------------------------------------------------------------------------
//Shift2 Machine3

$out1=0;
$out2=0;
$out3=0;
$out4=0;

$totalobserved=0;
$totalsale=0;
$productrate=0;
$amount=0;
$recieved=0;
$short=0;
$remarks=0;

    $res=mysqli_query($con,"select * from m3 where udate='$date'and shift=2");
    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        $out1=$row[3];
        $out2=$row[4];
        $out3=$row[5];
        $out4=$row[6];
        $totalobserved=$out1+$out2+$out3+$out4;
        $productrate=$row[7];
        $totalsale=$row[8];
        $amount=$totalsale*$productrate;
        $totalsaleamount=$totalsaleamount+$amount;
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
    <tr>
     <td>Machine 3</td>
     <td>'.$totalobserved.'</td>
     <td>'.$totalsale.'</td>
     <td>Rs'.$productrate.'</td>
     <td>Rs'.$amount.'</td>
     <td>Rs'.$recieved.'</td>
     <td>'.($amount-$recieved).'</td>
     <td>'.$remarks.'</td>
    </tr>';
//-------------------------------------------------------------------------    
//Shift3 Machine1

$out1=0;
$out2=0;
$out3=0;
$out4=0;

$totalobserved=0;
$totalsale=0;
$productrate=0;
$amount=0;
$recieved=0;
$short=0;
$remarks=0;

$res=mysqli_query($con,"select * from m1 where udate='$date'and shift=3");
while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $out1=$row[3];
    $out2=$row[4];
    $out3=$row[5];
    $out4=$row[6];
    $totalobserved=$out1+$out2+$out3+$out4;
    $productrate=$row[7];
    $totalsale=$row[8];
    $amount=$totalsale*$productrate;
    $totalsaleamount=$totalsaleamount+$amount;
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
<tr>
 <td rowspan="3">Shift3</td>
 <td>Machine 1</td>
 <td>'.$totalobserved.'</td>
 <td>'.$totalsale.'</td>
 <td>Rs'.$productrate.'</td>
 <td>Rs'.$amount.'</td>
 <td>Rs'.$recieved.'</td>
 <td>'.($amount-$recieved).'</td>
 <td>'.$remarks.'</td>
</tr>';
//-----------------------------------------------------------------------------------------------
//Shift3 Machine2

$out1=0;
$out2=0;
$out3=0;
$out4=0;

$totalobserved=0;
$totalsale=0;
$productrate=0;
$amount=0;
$recieved=0;
$short=0;
$remarks=0;

$res=mysqli_query($con,"select * from m2 where udate='$date'and shift=3");
while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
    $out1=$row[3];
    $out2=$row[4];
    $out3=$row[5];
    $out4=$row[6];
    $totalobserved=$out1+$out2+$out3+$out4;
    $productrate=$row[7];
    $totalsale=$row[8];
    $amount=$totalsale*$productrate;
    $totalsaleamount=$totalsaleamount+$amount;
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
<tr>
 <td>Machine 3</td>
 <td>'.$totalobserved.'</td>
 <td>'.$totalsale.'</td>
 <td>Rs'.$productrate.'</td>
 <td>Rs'.$amount.'</td>
 <td>Rs'.$recieved.'</td>
 <td>'.($amount-$recieved).'</td>
 <td>'.$remarks.'</td>
</tr>';
//-----------------------------------------------------------------------------------------
//Shift3 Machine3

$out1=0;
$out2=0;
$out3=0;
$out4=0;

$totalobserved=0;
$totalsale=0;
$productrate=0;
$amount=0;
$recieved=0;
$short=0;
$remarks=0;

    $res=mysqli_query($con,"select * from m3 where udate='$date'and shift=3");
    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        $out1=$row[3];
        $out2=$row[4];
        $out3=$row[5];
        $out4=$row[6];
        $totalobserved=$out1+$out2+$out3+$out4;
        $productrate=$row[7];
        $totalsale=$row[8];
        $amount=$totalsale*$productrate;
        $totalsaleamount=$totalsaleamount+$amount;
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
    <tr>
     <td>Machine 3</td>
     <td>'.$totalobserved.'</td>
     <td>'.$totalsale.'</td>
     <td>Rs'.$productrate.'</td>
     <td>Rs'.$amount.'</td>
     <td>Rs'.$recieved.'</td>
     <td>'.($amount-$recieved).'</td>
     <td>'.$remarks.'</td>
    </tr>';
//-------------------------------------------------------------------------    
echo "<tr><td colspan='9'>Total sale: $totalsaleamount</td></tr>";
$date=date("Y-m-d",strtotime($date . " + 1 day"));
    }
    echo '</table></div>';
    echo '<br><button class="sbutton" onclick="print()">Print</button>';    
}

?>

   
    </body>
</html>