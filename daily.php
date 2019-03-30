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
  function check(){
    var date=document.myform.date;
    var myForm = document.forms.myform;
    var rate = myForm.elements['rate[]'];
    var outlet1 = myForm.elements['outlet1[]'];
    var outlet2 = myForm.elements['outlet2[]'];
    var outlet3 = myForm.elements['outlet3[]'];
    var outlet4 = myForm.elements['outlet4[]'];
    var recieved = myForm.elements['recieved[]'];

    for(var i=0;i<9;i++){
    if(date.value==""||rate[i].value==""||outlet1[i].value==""||outlet2[i].value==""||outlet3[i].value==""||outlet4[i].value==""||recieved[i].value==""){
      alert("Enter all the values");
      return false;
    }
  }
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
    <h1 class="heading">DAILY SHEET ENTRY</h1>
<div class="dgrid">
    <div class="dgridinsert">
<form name="myform" onsubmit="return check()" action="#" method="POST">
&emsp;&emsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;Select date:
            <input type="date" name="date">
            <br>
            <br>
    <table border=1 class='stable'>
        <tr>
        <th>Shift</th>
        <th>Employee</th>
        <th>Observed Volume</th>
        <th>Product Rate</th>
        <th>Recieved Amount</th>
        <th>Remarks</th>
        </tr>

        <tr>
        <td rowspan=15>Shift1</td>
        <td rowspan="5"><?php
$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- ---------------------------------------------------------------- -->
        <td>Machine 1</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>

        <tr>
        <td rowspan="5"><?php
            $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- -------------------------------------------------------------------------------- -->
        <td>Machine 2</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>
        
        
        <tr>
        <td rowspan="5"><?php
           $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- ------------------------------------------------------------------ -->
        <td>Machine 3</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>
        <!-- ---------------------------------------------------------------------------- -->
        
        <tr>
        <td rowspan=15>Shift2</td>
        <td rowspan="5"><?php
           $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- ---------------------------------------------------------------- -->
        <td>Machine 1</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>

        <tr>
        <td rowspan="5"><?php
            $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- -------------------------------------------------------------------------------- -->
        <td>Machine 2</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>
        
        
        <tr>
        <td rowspan="5"><?php
           $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- ------------------------------------------------------------------ -->
        <td>Machine 3</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>
        <!-- ---------------------------------------------------------------------------- -->
        
        <tr>
        <td rowspan=15>Shift3</td>
        <td rowspan="5"><?php
            $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- ---------------------------------------------------------------- -->
        <td>Machine 1</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>

        <tr>
        <td rowspan="5"><?php
            $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- -------------------------------------------------------------------------------- -->
        <td>Machine 2</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>
        
        
        <tr>
        <td rowspan="5"><?php
           $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

            $res=mysqli_query($con,"select * from user");
            echo "<select name='uname[]'>";
            while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
            
                echo "<option value='$row[1]'>$row[1]</option>";
                }
            echo "</select> ";
        ?></td>
        <!-- ------------------------------------------------------------------ -->
        <td>Machine 3</td>
        <td rowspan="5"><input type="number" step="any" name="rate[]"></td>
        <td rowspan="5"><input type="number" step="any" name="recieved[]"></td>
        <td rowspan="5"><textarea rows="5" name="remarks[]"></textarea></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet1[]" placeholder="Outlet1"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet2[]" placeholder="Outlet2"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet3[]" placeholder="Outlet3"></td>
        </tr>

        <tr>
            <td> <input type="number" step="any" name="outlet4[]" placeholder="Outlet4"></td>
        </tr>
        <!-- ---------------------------------------------------------------------------- -->
        </table>
        <br>
        &emsp;&emsp;&nbsp&nbsp&nbsp&nbsp&nbsp;
            <input type="submit" name="submit" class="sbutton" value="Save">
            <input type="reset" class="sbutton" value="Reset">
            </form>


<?php    

if(isset($_POST['submit'])){

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

    $input_date=$_POST['date'];
    $date=date("Y-m-d",strtotime($input_date));
    $prevdate=date("Y-m-d",strtotime($date . " - 1 day"));
    $uname=$_POST['uname'];
    $rate=$_POST['rate'];
    $recieved=$_POST['recieved'];
    $outlet1=$_POST['outlet1'];
    $outlet2=$_POST['outlet2'];
    $outlet3=$_POST['outlet3'];
    $outlet4=$_POST['outlet4'];
    $remarks=$_POST['remarks'];
    $check=0;
    $datecheck=0;
    $count=0;

    $m1out1=0;
    $m1out2=0;
    $m1out3=0;
    $m1out4=0;

    
    $m2out1=0;
    $m2out2=0;
    $m2out3=0;
    $m2out4=0;

    
    $m1out1=0;
    $m1out2=0;
    $m1out3=0;
    $m1out4=0;

    $totalsale0=0;
    $totalsale1=0;
    $totalsale2=0;
    $totalsale3=0;
    $totalsale4=0;
    $totalsale5=0;
    $totalsale6=0;
    $totalsale7=0;
    $totalsale8=0;

    $m1totalsale=0;
    $m2totalsale=0;
    $m3totalsale=0;



while(1){
    $res=mysqli_query($con,"select * from m1 where udate='$prevdate'");

    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        if($row[0]){
            $datecheck=1;
        }
    }
    if($datecheck==1){
        break;
    }
    $prevdate=date("Y-m-d",strtotime($prevdate . " - 1 day"));  

}
    


    $res=mysqli_query($con,"select * from m1 where udate='$prevdate' and shift=3");

    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        if($row[0]==$prevdate && $row[2]==3){
           $m1out1=$row[3];
           $m1out2=$row[4];
           $m1out3=$row[5];
           $m1out4=$row[6]; 
           $m1totalsale=$row[8];
        }
        else{
            $check=1;
        }
    }  

    
    $res=mysqli_query($con,"select * from m2 where udate='$prevdate' and shift=3");

    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        if($row[0]==$prevdate&&$row[2]==3){
           $m2out1=$row[3];
           $m2out2=$row[4];
           $m2out3=$row[5];
           $m2out4=$row[6]; 
           $m2totalsale=$row[8];
        }
        else{
            $check=1;
        }
    }  
    
    
    $res=mysqli_query($con,"select * from m3 where udate='$prevdate' and shift=3");

    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        if($row[0]==$prevdate&&$row[2]==3){
           $m3out1=$row[3];
           $m3out2=$row[4];
           $m3out3=$row[5];
           $m3out4=$row[6]; 
           $m3totalsale=$row[8];
        }
        else{
            $check=1;
        }
    }  


    if ($outlet1[3]<$outlet1[0]||
        $outlet2[3]<$outlet2[0]||
        $outlet3[3]<$outlet3[0]||
        $outlet4[3]<$outlet4[0]||
        
        $outlet1[4]<$outlet1[1]||
        $outlet2[4]<$outlet2[1]||
        $outlet3[4]<$outlet3[1]||
        $outlet4[4]<$outlet4[1]||

        $outlet1[5]<$outlet1[2]||
        $outlet2[5]<$outlet2[2]||
        $outlet3[5]<$outlet3[2]||
        $outlet4[5]<$outlet4[2]||

        $outlet1[6]<$outlet1[3]||
        $outlet2[6]<$outlet2[3]||
        $outlet3[6]<$outlet3[3]||
        $outlet4[6]<$outlet4[3]||

        $outlet1[7]<$outlet1[4]||
        $outlet2[7]<$outlet2[4]||
        $outlet3[7]<$outlet3[4]||
        $outlet4[7]<$outlet4[4]||

        $outlet1[8]<$outlet1[8]||
        $outlet2[8]<$outlet2[8]||
        $outlet3[8]<$outlet3[8]||
        $outlet4[8]<$outlet4[8]
        ){
            $check=1;
            echo "<script type='text/javascript'>alert('Error! Check the outlet values');</script>";
        }

        

        
    if (
        $outlet1[0]<$m1out1||
        $outlet2[0]<$m1out2||
        $outlet3[0]<$m1out3||
        $outlet4[0]<$m1out4||
        
        $outlet1[1]<$m2out1||
        $outlet2[1]<$m2out2||
        $outlet3[1]<$m2out3||
        $outlet4[1]<$m2out4||
        
        $outlet1[2]<$m3out1||
        $outlet2[2]<$m3out2||
        $outlet3[2]<$m3out3||
        $outlet4[2]<$m3out4
    ){
        $check=1;
        echo "<script type='text/javascript'>alert('Error! Check the outlet values of previous day');</script>";
    }

    if($check==0)
    {
        $totalsale0=($outlet1[0]+$outlet2[0]+$outlet3[0]+$outlet4[0])-($m1out1+$m1out2+$m1out3+$m1out4);
        $totalsale1=($outlet1[1]+$outlet2[1]+$outlet3[1]+$outlet4[1])-($m2out1+$m2out2+$m2out3+$m2out4);
        $totalsale2=($outlet1[2]+$outlet2[2]+$outlet3[2]+$outlet4[2])-($m3out1+$m3out2+$m3out3+$m3out4);

        $totalsale3=($outlet1[3]+$outlet2[3]+$outlet3[3]+$outlet4[3])-($outlet1[0]+$outlet2[0]+$outlet3[0]+$outlet4[0]);
        $totalsale4=($outlet1[4]+$outlet2[4]+$outlet3[4]+$outlet4[4])-($outlet1[1]+$outlet2[1]+$outlet3[1]+$outlet4[1]);
        $totalsale5=($outlet1[5]+$outlet2[5]+$outlet3[5]+$outlet4[5])-($outlet1[2]+$outlet2[2]+$outlet3[2]+$outlet4[2]);

        $totalsale6=($outlet1[6]+$outlet2[6]+$outlet3[6]+$outlet4[6])-($outlet1[3]+$outlet2[3]+$outlet3[3]+$outlet4[3]);
        $totalsale7=($outlet1[7]+$outlet2[7]+$outlet3[7]+$outlet4[7])-($outlet1[4]+$outlet2[4]+$outlet3[4]+$outlet4[4]);
        $totalsale8=($outlet1[8]+$outlet2[8]+$outlet3[8]+$outlet4[8])-($outlet1[5]+$outlet2[5]+$outlet3[5]+$outlet4[5]);

        mysqli_query($con,"insert into m1 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[0]',1,$outlet1[0],$outlet2[0],$outlet3[0],$outlet4[0],$rate[0],$totalsale0,$recieved[0])");

        mysqli_query($con,"insert into m2 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[1]',1,$outlet1[1],$outlet2[1],$outlet3[1],$outlet4[1],$rate[1],$totalsale1,$recieved[1])");

        mysqli_query($con,"insert into m3 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[2]',1,$outlet1[2],$outlet2[2],$outlet3[2],$outlet4[2],$rate[2],$totalsale2,$recieved[2])");


        mysqli_query($con,"insert into m1 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[3]',2,$outlet1[3],$outlet2[3],$outlet3[3],$outlet4[3],$rate[3],$totalsale3,$recieved[3])");

        mysqli_query($con,"insert into m2 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[4]',2,$outlet1[4],$outlet2[4],$outlet3[4],$outlet4[4],$rate[4],$totalsale4,$recieved[4])");

        mysqli_query($con,"insert into m3 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[5]',2,$outlet1[5],$outlet2[5],$outlet3[5],$outlet4[5],$rate[5],$totalsale5,$recieved[5])");


        mysqli_query($con,"insert into m1 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[6]',3,$outlet1[6],$outlet2[6],$outlet3[6],$outlet4[6],$rate[6],$totalsale6,$recieved[6])");

        mysqli_query($con,"insert into m2 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[7]',3,$outlet1[7],$outlet2[7],$outlet3[7],$outlet4[7],$rate[7],$totalsale7,$recieved[7])");

        mysqli_query($con,"insert into m3 (udate,uname,shift,out1,out2,out3,out4,rate,totalsale,recieved) values ('$date','$uname[8]',3,$outlet1[8],$outlet2[8],$outlet3[8],$outlet4[8],$rate[8],$totalsale8,$recieved[8])");

        //Insertion of remarks
        
            if($remarks[0]){
                mysqli_query($con,"update  m1 set remarks='$remarks[0]' where udate='$date' and shift=1");
                echo 'hi';
            }
            
            if($remarks[1]){
                mysqli_query($con,"update  m2 set remarks='$remarks[1]' where udate='$date' and shift=1");
            }
            
            if($remarks[2]){
                mysqli_query($con,"update  m3 set remarks='$remarks[2]' where udate='$date' and shift=1");
            }



            if($remarks[3]){
                mysqli_query($con,"update  m1 set remarks='$remarks[3]' where udate='$date' and shift=2");
            }
            
            if($remarks[4]){
                mysqli_query($con,"update  m2 set remarks='$remarks[4]' where udate='$date' and shift=2");
            }
            
            if($remarks[5]){
                mysqli_query($con,"update  m3 set remarks='$remarks[5]' where udate='$date' and shift=2");
            }
            


            if($remarks[6]){
                mysqli_query($con,"update  m1 set remarks='$remarks[6]' where udate='$date' and shift=3");
            }
            
            if($remarks[7]){
                mysqli_query($con,"update  m2 set remarks='$remarks[7]' where udate='$date' and shift=3");
            }
            
            if($remarks[8]){
                mysqli_query($con,"update  m3 set remarks='$remarks[8]' where udate='$date' and shift=3");
            }
            
        echo "<script type='text/javascript'>alert('SUCCESSFULLY SAVED');</script>";
    }
    

}
?>
</div>
<div class="dgridview">
<?php    
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
if(isset($_POST['submit'])){
    echo "Taking the date ";
    echo $prevdate;
    echo " into account<br>";
    $input_date=$_POST['date'];
    $date=date("Y-m-d",strtotime($input_date));
    $uname=$_SESSION['user'];
 
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

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
    
    echo "Date : $input_date";
    echo '<table border="1" class="stable">
        <tr>
         <th>Shift</th>
         <th>Observed Volume</th>
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
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
        <tr>
         <td rowspan="15">Shift1</td>
         <td>Machine 1</td>
         <td rowspan="5">'.$totalobserved.'</td>
         <td rowspan="5">'.$totalsale.'</td>
         <td rowspan="5">Rs'.$productrate.'</td>
         <td rowspan="5">Rs'.$amount.'</td>
         <td rowspan="5">Rs'.$recieved.'</td>
         <td rowspan="5">'.($amount-$recieved).'</td>
         <td rowspan="5">'.$remarks.'</td>
        </tr>
        
        <tr>
         <td>'.$out1.'</td>
        </tr>

        <tr>
         <td>'.$out2.'</td>
        </tr>

        <tr>
         <td>'.$out3.'</td>
        </tr>

        <tr>
         <td>'.$out4.'</td>
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
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
        <tr>
         <td>Machine 2</td>
         <td rowspan="5">'.$totalobserved.'</td>
         <td rowspan="5">'.$totalsale.'</td>
         <td rowspan="5">Rs'.$productrate.'</td>
         <td rowspan="5">Rs'.$amount.'</td>
         <td rowspan="5">Rs'.$recieved.'</td>
         <td rowspan="5">'.($amount-$recieved).'</td>
         <td rowspan="5">'.$remarks.'</td>
        </tr>
        
        <tr>
         <td>'.$out1.'</td>
        </tr>

        <tr>
         <td>'.$out2.'</td>
        </tr>

        <tr>
         <td>'.$out3.'</td>
        </tr>

        <tr>
         <td>'.$out4.'</td>
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
            $recieved=$row[9];
            $remarks=$row[10];
        }
        
        
        echo'
            <tr>
             <td>Machine 3</td>
             <td rowspan="5">'.$totalobserved.'</td>
             <td rowspan="5">'.$totalsale.'</td>
             <td rowspan="5">Rs'.$productrate.'</td>
             <td rowspan="5">Rs'.$amount.'</td>
             <td rowspan="5">Rs'.$recieved.'</td>
             <td rowspan="5">'.($amount-$recieved).'</td>
             <td rowspan="5">'.$remarks.'</td>
            </tr>
            
            <tr>
             <td>'.$out1.'</td>
            </tr>
    
            <tr>
             <td>'.$out2.'</td>
            </tr>
    
            <tr>
             <td>'.$out3.'</td>
            </tr>
    
            <tr>
             <td>'.$out4.'</td>
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
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
    <tr>
     <td rowspan="15">Shift2</td>
     <td>Machine 1</td>
     <td rowspan="5">'.$totalobserved.'</td>
     <td rowspan="5">'.$totalsale.'</td>
     <td rowspan="5">Rs'.$productrate.'</td>
     <td rowspan="5">Rs'.$amount.'</td>
     <td rowspan="5">Rs'.$recieved.'</td>
     <td rowspan="5">'.($amount-$recieved).'</td>
     <td rowspan="5">'.$remarks.'</td>
    </tr>
    
    <tr>
     <td>'.$out1.'</td>
    </tr>

    <tr>
     <td>'.$out2.'</td>
    </tr>

    <tr>
     <td>'.$out3.'</td>
    </tr>

    <tr>
     <td>'.$out4.'</td>
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
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
    <tr>
     <td>Machine 2</td>
     <td rowspan="5">'.$totalobserved.'</td>
     <td rowspan="5">'.$totalsale.'</td>
     <td rowspan="5">Rs'.$productrate.'</td>
     <td rowspan="5">Rs'.$amount.'</td>
     <td rowspan="5">Rs'.$recieved.'</td>
     <td rowspan="5">'.($amount-$recieved).'</td>
     <td rowspan="5">'.$remarks.'</td>
    </tr>
    
    <tr>
     <td>'.$out1.'</td>
    </tr>

    <tr>
     <td>'.$out2.'</td>
    </tr>

    <tr>
     <td>'.$out3.'</td>
    </tr>

    <tr>
     <td>'.$out4.'</td>
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
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
        <tr>
         <td>Machine 3</td>
         <td rowspan="5">'.$totalobserved.'</td>
         <td rowspan="5">'.$totalsale.'</td>
         <td rowspan="5">Rs'.$productrate.'</td>
         <td rowspan="5">Rs'.$amount.'</td>
         <td rowspan="5">Rs'.$recieved.'</td>
         <td rowspan="5">'.($amount-$recieved).'</td>
         <td rowspan="5">'.$remarks.'</td>
        </tr>
        
        <tr>
         <td>'.$out1.'</td>
        </tr>

        <tr>
         <td>'.$out2.'</td>
        </tr>

        <tr>
         <td>'.$out3.'</td>
        </tr>

        <tr>
         <td>'.$out4.'</td>
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
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
    <tr>
     <td rowspan="15">Shift3</td>
     <td>Machine 1</td>
     <td rowspan="5">'.$totalobserved.'</td>
     <td rowspan="5">'.$totalsale.'</td>
     <td rowspan="5">Rs'.$productrate.'</td>
     <td rowspan="5">Rs'.$amount.'</td>
     <td rowspan="5">Rs'.$recieved.'</td>
     <td rowspan="5">'.($amount-$recieved).'</td>
     <td rowspan="5">'.$remarks.'</td>
    </tr>
    
    <tr>
     <td>'.$out1.'</td>
    </tr>

    <tr>
     <td>'.$out2.'</td>
    </tr>

    <tr>
     <td>'.$out3.'</td>
    </tr>

    <tr>
     <td>'.$out4.'</td>
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
    $recieved=$row[9];
    $remarks=$row[10];
}


echo'
    <tr>
     <td>Machine 2</td>
     <td rowspan="5">'.$totalobserved.'</td>
     <td rowspan="5">'.$totalsale.'</td>
     <td rowspan="5">Rs'.$productrate.'</td>
     <td rowspan="5">Rs'.$amount.'</td>
     <td rowspan="5">Rs'.$recieved.'</td>
     <td rowspan="5">'.($amount-$recieved).'</td>
     <td rowspan="5">'.$remarks.'</td>
    </tr>
    
    <tr>
     <td>'.$out1.'</td>
    </tr>

    <tr>
     <td>'.$out2.'</td>
    </tr>

    <tr>
     <td>'.$out3.'</td>
    </tr>

    <tr>
     <td>'.$out4.'</td>
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
        $recieved=$row[9];
        $remarks=$row[10];
    }
    
    
    echo'
        <tr>
         <td>Machine 3</td>
         <td rowspan="5">'.$totalobserved.'</td>
         <td rowspan="5">'.$totalsale.'</td>
         <td rowspan="5">Rs'.$productrate.'</td>
         <td rowspan="5">Rs'.$amount.'</td>
         <td rowspan="5">Rs'.$recieved.'</td>
         <td rowspan="5">'.($amount-$recieved).'</td>
         <td rowspan="5">'.$remarks.'</td>
        </tr>
        
        <tr>
         <td>'.$out1.'</td>
        </tr>

        <tr>
         <td>'.$out2.'</td>
        </tr>

        <tr>
         <td>'.$out3.'</td>
        </tr>

        <tr>
         <td>'.$out4.'</td>
        </tr>';
//-------------------------------------------------------------------------    

echo '</table>';

}
?>   
 
</div>
</div>
    </body>
</html>