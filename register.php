<?php
session_start();
require_once "functions/user.php";


if(isset($_POST["Submit"])):
$name = $_POST["Name"];
$weight = $_POST["Weight"];
$fat_mass = $_POST["fat_mass"];
$muscle_mass = $_POST["muscle_mass"];
$body_water = $_POST["body_water"];
$height = $_POST["Height"];
$age = $_POST["Age"];
$phone_number = $_POST["PhoneNumber"];
$email = $_POST["E_Mail"];
$password = $_POST["password"];
$chronic_disease = $_POST["chronic_disease"];
$gender = $_POST["Gender"];



$errors = []; // This is array to show the error
if(empty($name)) {
  $errors[] = "Name Is Required";
}
if(empty($weight)) {
  $errors[] = "Weight Is Required";
}
if(empty($fat_mass)) {
  $errors[] = "fat_mass Is Required";
}
if(empty($muscle_mass)) {
  $errors[] = "muscle_mass Is Required";
}
if(empty($height)) {
  $errors[] = "height Is Required";
}
if(empty($age)) {
  $errors[] = "age Is Required";
}
if(empty($phone_number)) {
  $errors[] = "phone_number Is Required";
}
if(empty($email)) {
  $errors[] = "email Is Required";
}

if(empty($password)) {
  $errors[] = "password Is Required";
}

if(empty($chronic_disease)) {
  $errors[] = "chronic_disease Is Required";
}
if(empty($gender)) {
  $errors[] = "Gender Is Required";
}

if(empty($errors)) {
    addNewUser($name, $phone_number, $muscle_mass, $fat_mass, $body_water, $height, $weight, $age, $email, $gender, $password, $chronic_disease);
    header("refresh:1;url=login.php");
}


// $data = addNewUser($name, $phone_number, $muscle_mass, $fat_mass, $body_water, $height, $weight, $age, $email, $gender, $password, $chronic_disease);



endif;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/s1.css">
    <title>the second page</title>
</head>
<body>
    <header><img src="image/yellow.png" width="120px" height="100px"> </header>
    <div class="container">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
          <!-- Start to validation -->
          <?php if(!empty($errors)): ?>
      <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Errors!</h5>
                  <ul>
                    <?php foreach($errors as $error): ?>
                      <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                  </ul>
      </div>
      <?php endif; ?>

      <?php if(empty($errors)): ?>
        <?php if(!empty($name) && !empty($email) && !empty($password)): ?>
          <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Success</h5>
                  
        </div>
        <?php endif; ?>
      <?php endif; ?>

      <!-- End to validation -->
        <input class="form-control in1" type="text" placeholder="Name" name="Name" >
        <input class="form-control in1" type="text" placeholder="Weight" name="Weight" >
        <input class="form-control in1" type="text" placeholder="Fat mass" name="fat_mass" >
        <input class="form-control in1" type="text" placeholder="Muscle mass" name="muscle_mass" >
        <input class="form-control in1" type="text" placeholder="Body water" name="body_water" >
        <input class="form-control in1" type="text" placeholder="Height" name="Height" >
        <input class="form-control in1" type="text" placeholder="Age" name="Age" >
        <div class="radios d-lg-inline d-md-block">
            <input id="male" type="radio" name="Gender" value="male" >
            <label for="male">male</label>
            <input id="female" type="radio" name="Gender" value="female" >
            <label for="female">female</label>
        </div>
        
        <input class="form-control in1 in8" type="text" placeholder="Chronic_disease" name="chronic_disease" >
        <input class="form-control in1 in8" type="text" placeholder="Phone Number" name="PhoneNumber" >
        <input class="form-control in2 in8" type="email" placeholder="E_Mail" name="E_Mail" >
        <input class="form-control in3 in8" type="password" placeholder="password" name="password" >
        <input class="btn btn-dark in4" type="submit" value="Submit" name="Submit">
        
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>