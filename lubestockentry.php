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
        
        <h1 class="heading">Lube Stock Entry</h1><br>
        <div class="dgrid">    
            <div class="dgridinsert">
            <h2>UPDATE</h2><br>
            <form action="#" method="POST">
            <table border="1" id="test" class="stable"> 
<tr><td colspan="2">Entry 1</td></tr>
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
</td></tr>
<tr><th>Price</th><td><input type='number' step='any' name='price0'></td></tr>
<tr><th>Size</th><td><input type='number' step='any' name='size0'></td></tr>
<tr><th>Quantity</th><td><input type='number' name='quantity0'></td></tr>

            </table>
            <br>
            <input type="submit" name="submit" class="sbutton" value="Save">
            <button class="sbutton" href="Lubesaleentry.php">Reset</button>
            </form>

<?php
$user=$_SESSION['user'];
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));
    $name0=$_POST['name0'];
    $price0=$_POST['price0'];
    $size0=$_POST['size0'];
    $quantity0=$_POST['quantity0'];

    $quantity;
    
    if($size0){
        $res=mysqli_query($con,"update lube set size=$size0 where name='$name0' and price=$price0");
    }
    
    if($quantity0){
        $res=mysqli_query($con,"update lube set quantity=$quantity0 where name='$name0' and price=$price0");
    }   

    echo "<table border='1' class='stable'>";
    echo "<tr colspan='4'>Result:<tr>";
    echo "<tr><td>Data Updated</td></tr>";

    echo "</table>";

}

?>


            </div>

            <div class="dgridview">
            <h2>VIEW</h2><br><br>
                
<?php
$count=0;

$con=mysqli_connect("localhost","ufs","ufspump","ufspump") or die(mysqli_error($con));

echo '<div id="print">';

$res=mysqli_query($con,"select * from lube");
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