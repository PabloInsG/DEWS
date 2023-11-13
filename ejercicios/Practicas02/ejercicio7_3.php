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
            justify-content: space-around;
        }

        form{
            height: 700px;
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
        .link{
            text-decoration: none;
            color: #6f4695;
            font-size: 20px;
        }
        .submit{
            background-color: white;
            width: 300px;
            height: 40px;
            border: solid 1px #000000;
            align-items: center;
        }
        .botonera{
            display: flex;
            margin-left: -10px;
            width: 102%;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <form>
        <div class="inputs">
            <h1>RESULTADO</h1>
                <?php
                    error_reporting(E_ALL ^ E_WARNING); 
                    
                    $numeros = $_POST["numeros1"];
                    $aciertos = $_POST["aciertos"];
                    $acierto = false;
                    $arrayNumeros = array_map('intval', $numeros);
                    $combinada = [];
                    $intentos = 0;
                    do{
                        for($j = 0; $j < 6; $j++){
                            $combinada[$j] = rand(1,49);
                                $count = count(array_intersect($arrayNumeros, $combinada));
                            }
                            if($aciertos == $count){
                                print "Para tener " . $aciertos . " aciertos, necesitas " . $intentos . " intentos.";
                                print "<div class=\"botonera\"><button class=\"submit\"><a href=\"ejercicio7_2.php\" class=\"link\">Volver A Jugar</a></button></div>";
                                $acierto = true;
                            } else{
                                $intentos++;
                            }
                    } while($acierto == false);
            ?>
        </div>
    </form>
    </div>
</body>
</html>