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

        <button id="mdl_btn">Lag henvendelse</button>

        <div id="henven_modal" class="modal">

            <div class="modal_content">
                <div class="modal_header">
                    <span class="close">&times;</span>
                    <h3>Header</h3>
                </div>
                <form action="post" method="create_henven.php">
                    <label for="henvendelse">Beskrivelse av henvendelsen</label>
                    <input type="text" name="henven"/> <br />
                    
                    <input type="submit" name="Send" id="submit">
                </form>
                //send inn til create henven og modal lukkes eller no 
                
            </div>

        </div>

    </div>
    <script src="script.js">
</body>
</html>