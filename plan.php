<?php

session_start();

if(empty($_SESSION["user"])):
    header("Location: login.php");
endif;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/plan.css">
    <title>plan</title>
</head>
<body>
    <img src="image/logo.jpeg" width="90px">
    <center>
        <h1 class="x">start <br><span class="y">training</span><br>now
            <br>
            <br>
            <span class="z">choose your<br><span class="a" >workout<span class="b"> & </span>meal plan</span></span></h1>
    </center>

    <div class="c">
        <div class="d">
            <div class="e">
                <h1>1 Month</h1>
                <hr>
                <p>400 EGP <br>
                every month</p>
            </div>
        </div>
    </div>
    
    <div class="c">
        <div class="d">
            <div class="e">
                <h1>2 Month</h1>
                <hr>
                <p>1000 EGP <br>
                every 3 month</p>
            </div>
        </div>
    </div>
    <div class="c">
        <div class="d">
            <div class="e">
                <h1>1 Year</h1>
                <hr>
                <p>2000 EGP <br>
                every year</p>
            </div>
        </div>
    </div>
    
</body>
</html>