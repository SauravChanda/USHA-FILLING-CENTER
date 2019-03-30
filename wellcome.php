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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
</head>
<BODY>
<div class="header">
                    <a style="font-size: 20px;background-color: grey;border-radius: 5px;" href="wellcome.php">USHA FILLING CENTRE</a>
                    <a href="logout.php" style="float:right; padding:3px;">logout</a>
            </div>
<?php
echo "<h1 style='text-align: center'>";
echo 'Welcome ',$_SESSION['user'];
echo "</h1>";
?>

<div class="options" style="padding:0% 30%;text-align: center;">

<form action="daily.php" method="POST" class="login">
    <input type="submit" value="Daily sheet entry" style="background: white">
</form>

<form action="view.php" method="POST" class="login">
    <input type="submit" value="View your details" style="background: white">
</form>

<form action="credit.php" method="POST" class="login">
    <input type="submit" value="Credit" style="background: white">
</form>

<form action="debit.php" method="POST" class="login">
    <input type="submit" value="Debit" style="background: white">
</form>


<form action="printoption.html" method="POST" class="login">
    <input type="submit" value="View and print" style="background: white">
</form>


<form action="lubedetails.php" method="POST" class="login">
    <input type="submit" value="Lube Details" style="background: white">
</form>
</div>

</BODY>    
</html>

