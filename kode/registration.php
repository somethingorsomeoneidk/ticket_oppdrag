<?php
session_start();
include "connect.php";

$brukernavn = $_POST['username'];
$passord = $_POST['password'];

$sql = "SELECT * FROM users WHERE brukernavn='$brukernavn'"; 

$result = mysqli_query($kobling, $sql);

if(mysqli_num_rows($result) > 0) {
    header ("Location: index.php?error=This username is already taken!");
        exit();
}
else {
    $query = "INSERT INTO users (brukernavn, passord) VALUES ('$brukernavn','$passord')";
    $result = mysqli_query($kobling, $query);
    echo ("Registration success! Go back to main page <a href='home.php'>here</a>");
    //dodo: ta deg rett til henvendelses siden?
}

?>