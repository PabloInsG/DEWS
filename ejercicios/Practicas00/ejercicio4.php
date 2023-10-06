<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Selecciona del 1 al 10</p>
    <select name="" id="">
        <option></option>
        <?php
            for($i = 1; $i <= 10;$i++){
                print "<option value=\"$i\">$i</option>";
            }
        ?>
    </select>
</body>
</html>