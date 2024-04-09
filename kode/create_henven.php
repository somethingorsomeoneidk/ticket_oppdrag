<?php
session_start();
include "connect.php";

$henven = $_POST['henven'];
$navn = $_POST['navn'];
$epost = $_POST['epost'];


// $sql = "SELECT * FROM users WHERE brukernavn='$brukernavn'"; 

// $result = mysqli_query($kobling, $sql);

// if(mysqli_num_rows($result) > 0) {
//     header ("Location: index.php?error=This username is already taken!");
//         exit();
// }

$query = "INSERT INTO henvendelser (henven, navn, epost) VALUES ('$henven', '$navn', '$epost')";
mysqli_query($kobling, $query);

echo ("Din henvendelse er sendt!");
echo("<a href='home.php'>Home</a>")


?>