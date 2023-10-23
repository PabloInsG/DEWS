<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1" style="border-collapse: collapse; border-color: white; width: 1080px ">
        <th>Indices</th>
        <th>Valores</th>
        <?php
           $array = array("Palencia"=>8000, "Valladolid"=>306000,"Murcia"=>439000, "Albacete"=>170000, "Barcelona"=>160000, "A Coruña"=>25000);
            foreach($array as $i=>$v){
                print "<tr><td style=\"background-color: grey\">$i</td><td>$v</td></tr>";
            }
        ?>
</table>
</body>
</html>