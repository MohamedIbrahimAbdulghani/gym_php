<?php
session_start();
require_once "functions/user.php";

if(isset($_POST["Login"])):
    $email = $_POST["E_Mail"];
    $password = $_POST["password"];

    $data = getUser($email, $password);
    if($data):
        $_SESSION["user"] = $data ;
        header("Location: index.php");
    else:
        $error = "email or password is not found";
    endif;

endif;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="image/fontawesome/css/all.css"> -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/s2.css">
    <title>the third page</title>
</head>
<body>
    <header><img src="image/yellow.png" width="120px" height="100px"> </header>
              <!-- Start to validation -->
              <?php if(!empty($error)): ?>
        <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <?php echo $error ?>
        </div>
      <?php endif; ?>
      <!-- End to validation -->
   <div> <form action="login.php" method="post">

        <input class="form-control in2" type="email" placeholder="E-Mail" name="E_Mail" required><br>
        <input class="form-control in3" type="password" placeholder="password" name="password" required><br>
        <input class="btn btn-dark in4 in4" type="submit" value="Login" name="Login">
    </form></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>