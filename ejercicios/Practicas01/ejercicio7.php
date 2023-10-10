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
        <table border="1" style="border-collapse: collapse; border-color: #FFFFFF; text-align: center">
            <?php
                $numColumnas = 5;
                
                for($i = 0; $i < 50; $i++){
                    if($i % $numColumnas == 0){
                        echo "<tr>";
                    }
                    print "<td>" . $i . "</td>";
                }
                /*$numero = 1;
                $k = $numero + 50;
                do{
                    for($i = 0; $i < 200; $i++){
                        print "<tr>";
                        for($j = 0; $j < 5; $j++){
                            print "<td>" . $numero++ . "</td>";
                        }
                        print "</tr>";
                    }
                } while($numero < $k);
                */
            ?>
        </table>
    </div>
</body>
</html>