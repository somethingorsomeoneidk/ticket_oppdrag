<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    
    <div class="box">

        <form action="create_henven.php" method="post">
            <label for="henvendelse">Beskrivelse av henvendelsen</label>
            <input type="text" name="henven"/> <br />
            <label for="navn">Navn:</label>
            <input type="text" name="navn" id="navn">
            <label for="epost">Epost:</label>
            <input type="text" name="epost" id="epost">
                    
            <input type="submit" name="Send" id="submit">
        </form>

    </div>
    <script src="script.js">
</body>
</html>