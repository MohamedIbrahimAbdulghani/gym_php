<?php
require_once "db.php";


function addNewUser($name, $phone_number, $muscle_mass, $fat_mass, $body_water, $height, $weight, $age, $email, $gender, $password, $chronic_disease) {
    global $connection_database;
        $sql = "INSERT INTO `customers` (`name`, `phone`, `muscle_mass`, `body_fat_mass`, `total_body_water`, `height`, `weight`, `age`,  `Email`, `Gender`, `password`, `Chronic_disease`) VALUES  ('$name', '$phone_number', '$muscle_mass', '$fat_mass', '$body_water', '$height', '$weight', '$age', '$email', '$gender', '$password', '$chronic_disease')";
        $q = mysqli_query($connection_database, $sql);
        $result = mysqli_affected_rows($connection_database);
        if($result):
            return true;
        else:
            return false;
        endif;
}



function getUser($email, $password) {
    global $connection_database;
    $sql = "SELECT * FROM `customers` WHERE `Email` = '$email' AND `password` = '$password' ";
    $q = mysqli_query($connection_database, $sql);
    $result =  mysqli_fetch_assoc($q);
    return $result;
}
