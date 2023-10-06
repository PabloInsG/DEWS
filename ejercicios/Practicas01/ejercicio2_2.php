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
        .texto{
            display: flex;
            justify-content: center;
            margin-top: 40px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="estructura">
            <div class="texto">
                <?php
                    $nombreOk = false;
                    $apellidosOk = false;
                    $edadOk = false;
                    $salarioOk = false;
                    
                    if(isset ($_GET["nombre"])){
                        if($_GET["nombre"] == ""){
                            echo "Variable nombre vacia,";
                        } elseif($_GET["nombre"] == (int)$_GET["nombre"]){
                            echo "Valores de la variable \"nombre\" incorrectos, deben de ser letras";
                        } 
                        else{
                            $nombreOk = true;
                        }
                    }
                    if(isset ($_GET["apellidos"])){
                        if($_GET["apellidos"] == ""){
                            echo "Variable apellidos vacia";
                        } elseif($_GET["apellidos"] == (int)$_GET["apellidos"]){
                            echo "Valores de la variable \"apellidos\" incorrectos, deben de ser letras";
                        } else{
                            $apellidosOk = true;
                        }
                    }
                    if(isset ($_GET["edad"])){
                        if($_GET["edad"] == ""){
                            echo "Variable edad vacia";
                        } elseif($_GET["edad"] < 0){
                            echo "Valores de la variable \"edad\" incorrecto, debe de ser positivo";
                        } elseif($_GET["edad"] < 18){
                            echo "Valores de la variable \"edad\" incorrecto, debe de ser mayor de edad";
                        }else{
                            $edadOk = true;
                        }
                    }
                    if(isset ($_GET["salario"])){
                        if($_GET["salario"] == ""){
                            echo "Variable salario vacia";
                        } elseif($_GET["salario"] < 0){
                            echo "La variable \"salario\" no puede ser un valor negativo";
                        } 
                        else{
                            $salarioOk = true;
                        }
                    }
                    
                    if($nombreOk && $apellidosOk && $edadOk && $salarioOk){
                        if($_GET["salario"] > 2000){
                            print $_GET["nombre"] . " " . $_GET["apellidos"] . ", tu salario será de " . $_GET["salario"] . "€";
                        } elseif($_GET["salario"] >= 1000 && $_GET["salario"] <= 2000){
                            if($_GET["edad"] > 45){
                                $salarioMayor45 = ($_GET["salario"] * 0.03) + $_GET["salario"];
                                print $_GET["nombre"] . " " . $_GET["apellidos"] . ", tu salario será de: " . $salarioMayor45 . "€";
                            } elseif($_GET["edad"] <= 45){
                                $salarioMenor45 = ($_GET["salario"] * 0.10) + $_GET["salario"];
                                print $_GET["nombre"] . " " . $_GET["apellidos"] . ", tu salario será de: " . $salarioMenor45 . "€";
                            }
                        } elseif($_GET["salario"] < 1000){
                            if($_GET["edad"] < 30){
                                print $_GET["nombre"] . " " . $_GET["apellidos"] . ", tu salario será de: 1000€";
                            } elseif($_GET["edad"] > 30 && $_GET["edad"] < 45){
                                $entre30y45 = ($_GET["salario"] * 0.03) + $_GET["salario"];
                                print $_GET["nombre"] . " " . $_GET["apellidos"] . ", tu salario será de: " . $entre30y45 . "€";
                            } elseif($_GET["edad"] > 45){
                                $mayores45 = ($_GET["salario"] * 0.15) + $_GET["salario"];
                                print $_GET["nombre"] . " " . $_GET["apellidos"] . ", tu salario será de: " . $mayores45 . "€";
                            }
                        }
                    }
                ?>
            </div>
            <div class="submit">
                <a href="ejercicio2.php" class="linkVolver"><button class="btn">Volver</button></a>
            </div>
        </div>
    </div>
</body>
</html>