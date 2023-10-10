<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table border="1" style="border-collapse: collapse; border-color: white; width: 1080px ">
            <?php
                $numColumnas = 16;
                for($i = 0; $i < $numColumnas; $i++){
                    print "<th>Codigo</th><th>Valor</th>";
                }
                for($j = 0; $j < 256; $j++){
                    if($j % $numColumnas == 0){
                        echo "<tr>";
                    }
                    print "<td>" . $j . "</td>";
                    print "<td>" . chr($j) . "</td>";
                }
            ?>
        </table>
    </div>
</body>
</html>