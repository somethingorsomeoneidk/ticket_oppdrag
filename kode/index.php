<?php
session_start();
include "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Index</title>
</head>
<body>
    <h1>Welcome</h1>

    <h2>Do you have an account?</h2>
    <p>Log in:</p>
    <form method="post" action="login.php">
        <label for="brukernavn">Username</label>
        <input type="text" name="brukernavn" /><br />
        <label for="passord">Password:</label>
        <input type="password" name="passord" /><br />

        <input type="submit" value="Logg inn" name="submit">
    </form>
    <h2>Do you not have an account?</h2>
    <a href="create_user.php"><button>Register here</button>
    </a>
</body>
</html>