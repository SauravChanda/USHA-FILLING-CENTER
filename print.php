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
    </head>
    <body>
    <div class="header">
        <a style="font-size: 20px;background-color: grey;border-radius: 5px;" href="wellcome.php">USHA FILLING CENTRE</a>
        <a href="view.php">My details</a>
        <a href="daily.php">Daily sheet</a>
        <a href="credit.php">Credit</a>
        <a href="debit.php">Debit</a>
        <a href="printoption.php">View and print</a>
        <a href="index.html" style="float:right; padding:3px;">logout</a>

        </form>
    </div>
        
    </body>
</html>