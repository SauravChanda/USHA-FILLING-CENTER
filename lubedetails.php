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
        <a href="view.php">My details</a>
        <a href="daily.php">Daily sheet</a>
        <a href="credit.php">Credit</a>
        <a href="debit.php">Debit</a>
        <a href="lubedetails.php">Lube Details</a>
        <a href="printoption.html">View and print</a>
        <a href="logout.php" style="float:right; padding:3px;">logout</a>
    </div>
<br><br><br>
<div class="options" style="padding:0% 30%;text-align: center;">

<form action="lubeentry.php" method="POST" class="login">
    <input type="submit" value="Lube add or remove" style="background: white">
</form>

<form action="lubestockentry.php" method="POST" class="login">
    <input type="submit" value="Lube Stock Entry" style="background: white">
</form>


<form action="lubesaleentry.php" method="POST" class="login">
    <input type="submit" value="Lube Sale Entry" style="background: white">
</form>

</div>

</BODY>    
</html>

