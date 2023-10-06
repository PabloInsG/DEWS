<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        print "<body style=\"background-color: rgb($r, $g, $b\">";
        ?>
        <div style="display:flex; width: 100%; heigth: 700px; justify-content: center;">
            <a href="ejercicio4.php" style="position: absolute; top: 40%;"><button style="width: 500px; height: 100px; font-size: 50px;font-family: Arial, sans-serif; color: rgb(<?php print "$r, $g, $b"?>)">Recargar Fondo</button></a>
        </div>
</body>
</html>