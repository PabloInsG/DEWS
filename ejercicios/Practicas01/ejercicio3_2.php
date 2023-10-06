<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .estructura{
            width: 500px;
            height: 600px;
            background: #6f4695;
            color: #FFFFFF;
            font-family: Arial, Helvetica, sans-serif;
            border: solid 1px #000000;
            border-radius: 1rem;
            display: flex;
            flex-direction: column;
        }
        .btn{
            width: 200px;
            height: 40px;
            border: solid 1px #000000;
            color: #6f4695;
        }

        .btn:hover{
            scale: 1.1;
            transition: all .5s ease-in-out;
            background-color: #482e5f;
            color: #FFFFFF;
        }

        .linkVolver{
            display: flex;
            text-decoration: none;
            width:200px;
            height: 40px;
            justify-content: center;
        }

        .respuesta{
            margin-top: 20px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="estructura">
            <h1>ENTERO O DECIMAL?</h1>
            <div class="respuesta">
                <?php
                    $numeroOk = false;
                    
                    if(isset ($_GET["numero"])){
                        if($_GET["numero"] == ""){
                            echo "Variable numero vacia";
                        } else{
                            $numeroOK = true;
                        }
                    }
                    
                    if($numeroOK){
                        if((int) $_GET["numero"] == $_GET["numero"]){
                            echo "El numero es entero";
                        } else{
                            echo "El numero contiene decimales";
                        }
                    }
                ?>
            </div>
            <div class="submit">
                <a href="ejercicio3.php" class="linkVolver"><button class="btn">Volver</button></a>
            </div>
        </div>
    </div>
</body>
</html>