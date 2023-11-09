<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Practicas02/style.css">
</head>
<body>
    <?php
            if(!isset($_GET['numero'])){
                if(!isset($_GET['adivinar'])){
                    $adivinar = rand(1, 100);
                    $intentos = 0;
                } else{
                    $adivinar = $_GET['adivinar'];
                    $intentos = $_GET['intentos'];
                }
                echo "<form action=\"ejercicio2.php\" method=\"GET\">
                <p>Introduce un numero</p>
                <input type=\"number\" name=\"num\" id=\"\" min=\"1\" max=\"100\">
                <input type=\"hidden\" name=\"adivinar\" value=\"$adivinar\">
                <input type=\"hidden\" name=\"intentos\" value=\"$intentos\">
                <input type=\"submit\" value=\"Enviar\">
                </form>";
            } else{
                $numero = $_GET["num"];
                    if($numero > $adivinar){
                        print "El numero a adivinar es mas pequeño que el introducido";
                        print "<a href=\"ejercicio2.php\"><button>Seguir jugando</button></a>";
                        $intentos++;
                    } else if($numero < $adivinar){
                        print "El numero a adivinar es mas grande que el introducido";
                        print "<a href=\"ejercicio2.php\"><button>Seguir jugando</button></a>";
                        $intentos++;
                    } else{
                        print "Enhorabuena has adivinado el numero en: " . $intentos . " intentos";
                    }
                }
    ?>
</body>
</html>