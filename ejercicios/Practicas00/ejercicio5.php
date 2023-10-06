<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="background-color: #6f4695; color: #FFFFFF; text-align: center; width: 500px">
        <tr >
            <td>X</td>
            <?php
            for($i = 1; $i <= 10; $i++){
                print "<td>$i</td>";
            }
            ?>
        </tr>
        <?php
            for($i = 1; $i <= 10; $i++){
                print "<tr>";
                print "<td>$i</td>";
                for($j = 1; $j <= 10; $j++){
                    print "<td>" . $i * $j . "</td>";
                }

            }
        ?>
    </table>
</body>
</html>