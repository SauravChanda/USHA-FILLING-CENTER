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
            a.innerHTML=a.innerHTML+ "<tr><td>" + (count+1) + "</td><td><input type='text' name='name"+count+"'></td><td><input type='number' step='any' name='price"+count+"'></td></tr>";
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
        
        <h1 class="heading">Lube add or remove</h1><br>
        <div class="dgrid">    
            <div class="dgridinsert">
            <h2>Add lube</h2><br>
            <button class="sbutton" onclick="formtest()">Add</button>
            <form action="#" method="POST">
                <br>
            <table border="1" id="test" class="stable"> 
            <tr><th>Sl no</th><th>Name</th><th>Price</th></tr>
            <tr><td>1</td><td><input type='text' name='name0'></td><td><input type='number' step='any' name='price0'></td></tr>
            </table>
            <br>
            <input type="submit" name="submit" class="sbutton" value="Save">
            <button class="sbutton" href="Lubeentry.php">Reset</button>
            </form>


        <h2>Remove lube</h2><br>
        <form action="#" method="POST">
            <table border="1" id="test" class="stable"> 
<tr><td colspan="2">Select the one to be removed</td></tr>
<tr><th>Name</th>
<td><select name='name0'>
<?php
        $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
        $res=mysqli_query($con,"select distinct (name) from lube order by name asc");

        while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
           echo '<option value="';
           echo $row[0];
           echo '">';
           echo $row[0];
           echo '</option>'; 
            }
        ?>
            </select>
            </td>
        </tr>
        <tr>
            <th>Price</th>
            <td>
            <input type='number' step='any' name='price0'>
            </td>
        </tr>

            </table>
            <br>
            <input type="submit" name="remove" class="sbutton" value="Remove">
            <button class="sbutton" href="Lubeentry.php">Reset</button>
            </form>

<?php
$user=$_SESSION['user'];
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

if(isset($_POST['remove'])){
    $name=$_POST['name0'];
    $price=$_POST['price0'];
    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
    $res=mysqli_query($con,"delete from lube where name='$name' and price='$price'");
    if(mysqli_affected_rows($con) == 0){
        echo "Warning: Lube Name=$name with Price=$price doesnt exists to remove";
    }
    else{
        echo "Successfully removed Lube Name=$name with Price=$price";  
    }
}
if(isset($_POST['submit'])){

    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));


    $name0=$_POST['name0'];
    $name1=$_POST['name1'];
    $name2=$_POST['name2'];
    $name3=$_POST['name3'];
    $name4=$_POST['name4'];
    $name5=$_POST['name5'];
    $name6=$_POST['name6'];
    $name7=$_POST['name7'];

    $price0=$_POST['price0'];
    $price1=$_POST['price1'];
    $price2=$_POST['price2'];
    $price3=$_POST['price3'];
    $price4=$_POST['price4'];
    $price5=$_POST['price5'];
    $price6=$_POST['price6'];
    $price7=$_POST['price7'];

    $size0=0;
    $size1=0;
    $size2=0;
    $size3=0;
    $size4=0;
    $size5=0;
    $size6=0;
    $size7=0;

    $quantity0=0;
    $quantity1=0;
    $quantity2=0;
    $quantity3=0;
    $quantity4=0;
    $quantity5=0;
    $quantity6=0;
    $quantity7=0;

    $check=0;
    $lubecheck=0;

    $res=mysqli_query($con,"select * from lube");

    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
        if(($row[0]==$name0 && $row[1]==$price0)
        ||($row[0]==$name1 && $row[1]==$price1)
        ||($row[0]==$name2 && $row[1]==$price2)
        ||($row[0]==$name3 && $row[1]==$price3)
        ||($row[0]==$name4 && $row[1]==$price4)
        ||($row[0]==$name5 && $row[1]==$price5)
        ||($row[0]==$name6 && $row[1]==$price6)
        ||($row[0]==$name7 && $row[1]==$price7)){
            $check=1;
            echo "One of the lube already exists";
            $lubecheck=1;
        }  
    } 
if($lubecheck==0){
    echo "<table border='1' class='stable'>";
    echo "<tr colspan='4'>Inserted rows:<tr>";
    echo "<tr><th>Name</th><th>Price</th><th>Size</th><th>Quantity</th></tr>";
    if($name0){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name0',$price0,$size0,$quantity0)");
        echo "<tr><td>$name0</td> <td>$price0</td> <td>$size0</td> <td>$quantity0</td> </tr>" ;
        $check=1;
    }
    if($name1){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name1',$price1,$size1,$quantity1)");
        echo "<tr><td>$name1</td> <td>$price1</td> <td>$size1</td> <td>$quantity1</td> </tr>" ;
        $check=1;
    }
    if($name2){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name2',$price2,$size2,$quantity2)");
        echo "<tr><td>$name2</td> <td>$price2</td> <td>$size2</td> <td>$quantity2</td> </tr>" ;
        $check=1;
    }
    if($name3){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name3',$price3,$size3,$quantity3)");
        echo "<tr><td>$name3</td> <td>$price3</td> <td>$size3</td> <td>$quantity3</td> </tr>" ;
        $check=1;
    }
    if($name4){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name4',$price4,$size4,$quantity4)");
        echo "<tr><td>$name4</td> <td>$price4</td> <td>$size4</td> <td>$quantity4</td> </tr>" ;
        $check=1;
    }
    if($name5){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name5',$price5,$size5,$quantity5)");
        echo "<tr><td>$name5</td> <td>$price5</td> <td>$size5</td> <td>$quantity5</td> </tr>" ;
        $check=1;
    }
    if($name6){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name6',$price6,$size6,$quantity6)");
        echo "<tr><td>$name6</td> <td>$price6</td> <td>$size6</td> <td>$quantity6</td> </tr>" ;
        $check=1;
    }
    if($name7){
        mysqli_query($con,"insert into lube (name,price,size,quantity)  values('$name7',$price7,$size7,$quantity7)");
        echo "<tr><td>$name7</td> <td>$price7</td> <td>$size7</td> <td>$quantity7</td> </tr>" ;
        $check=1;
    }
    if($check==0){
        echo "<tr><td colspan='4'>Warning! empty values are not inserted</td></tr>";
    }
    
    echo "</table>";

}
}


?>


            </div>

            <div class="dgridview">
            <h2>VIEW</h2><br><br>
                
<?php
$count=0;

$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

echo '<div id="print">';

$res=mysqli_query($con,"select * from lube order by name asc");
                    echo'<table border="1" class="stable"><tr><th>Name</th><th>Price</th><th>Size</th><th>Quantity</th></tr>';
                    while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><tr>";
                    $count++;    
                        }

                    
if($count==0){
    echo "<tr><td colspan='4'>No reasults found</td></tr>";
}
echo'</table>';
echo '</div>';
echo '<br><button class="sbutton" onclick="print()">Print</button>'; 


?>
</div>
</div>   

</body>
</html>