<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            justify-content: center;
        }

        .inputs{
            display:flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .horizontal{
            display:flex;
            flex-direction: row;
        }
        input[type="radio"]{
            width: 10px;
            height: 10px;
        }
        .no-radius{
            border-radius: 0rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <h1>PRIMITIVA</h1>
            <div class="inputs">
                <p>Introduce tus numeros del 1 al 49:</p>
                 <input type="number" class="no-radius" name="numeros[numero1]" id="" min="1" max="49">       
                 <input type="number" class="no-radius" name="numeros[numero2]" id="" min="1" max="49">       
                 <input type="number" class="no-radius" name="numeros[numero3]" id="" min="1" max="49">       
                 <input type="number" class="no-radius" name="numeros[numero4]" id="" min="1" max="49">       
                 <input type="number" class="no-radius" name="numeros[numero5]" id="" min="1" max="49">       
                 <input type="number" class="no-radius" name="numeros[numero6]" id="" min="1" max="49">
                 <p>Cuantas veces desea jugar?</p>
                 <input type="number" class="no-radius" name="jugadas" id="" min="1">       
            </div>
            <div class="submit">
                <input type="submit" value="Jugar">
            </div>
        </form>
    </div>

    <?php
        error_reporting(E_ALL ^ E_WARNING); 
        if($_SERVER['PHP_SELF'] = "POST"){
            $numeros = $_POST["numeros"];
            $jugadas = $_POST["jugadas"];
        }

        $combinada = [];
        $contador1acierto= 0;
        $contador2acierto= 0;
        $contador3acierto= 0;
        $contador4acierto= 0;
        $contador5acierto= 0;
        for($i = 1; $i <= $jugadas; $i++){
            for($j = 0; $j < 6; $j++){
                $combinada[$j] = rand(1,49);
            }
            print "Combinada " . $i . ":";
            foreach($combinada as $indice=>$valores){
                print $valores . " | ";
            }
            print "<br>";
        }
        print "<br>";
        print_r($combinada);

    ?>
</body>
</html>