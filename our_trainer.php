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
    <title>our_trainer</title>
    <link rel="stylesheet" href="css/our_trainer.css">
</head>
<body>
   <img src="image/logo.jpeg" width="80" height="70">
   <br>
   <br>
    <div class="x">
        <div class="y">
            <div class="z">
                <img src="image/khaled.jpeg" width="150px">
                <h2> Cap Khaled Elnagar</h2>
                <P>Bachelor's degree  of Physical education .
                  Diploma in therapeutic and sports nutrition.
                    ISSA Elite trainer:
                     (CFT , sports nutrition, transformation specialist )
                     I’m personal trainer specialising in weight loss and strength training. 
                     I believe that getting fit and healthy should be simple and straight forward
                    14 year of experience In a variety of sports</P>
            </div>
        </div>
    </div>
    <div class="x">
        <div class="y">
            <div class="z">
                <img src="image/photo.jpeg" width=60%>
                <h2> Cap Ebrahim Elhossiny</h2>
                <P>Diploma in Clinical Nutrition. 
                 Diploma in Alternative Medicine (Cupping). 
                  A trainer specializing in physical fitness exercises, kung fu, loads trainer and street fighting. 
                    Kung Fu expert for 14 years. 
                    Assistant trainer, loads and fitness, 4 years. 
                    And a two-year official coach.</P>
                    <br>
            </div>
        </div>
    </div>

</body>
</html>