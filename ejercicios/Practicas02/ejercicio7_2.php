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
    </style>
</head>
<body>
    <div class="container">
        <form action="ejercicio7_3.php" method="POST">
                <h1>PRIMITIVA</h1>
                <div class="inputs">
                    <p>Introduce tus numeros del 1 al 49:</p>
                    <input type="number" class="no-radius" name="numeros1[0]" id="" min="1" max="49">       
                    <input type="number" class="no-radius" name="numeros1[1]" id="" min="1" max="49">       
                    <input type="number" class="no-radius" name="numeros1[2]" id="" min="1" max="49">       
                    <input type="number" class="no-radius" name="numeros1[3]" id="" min="1" max="49">       
                    <input type="number" class="no-radius" name="numeros1[4]" id="" min="1" max="49">       
                    <input type="number" class="no-radius" name="numeros1[5]" id="" min="1" max="49">
                    <p>Cuantos aciertos desea poner?</p>
                    <input type="number" class="no-radius" name="aciertos" id="" min="1" max="6">       
                </div>
                <div class="submit">
                    <input type="submit" value="Jugar">
                </div>
        </form>
    </div>
</body>
</html>