<?php
session_start();

$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["apellido"] = $_POST["apellido"];
$_SESSION["fondo"] = $_POST["fondo"];
$_SESSION["color"] = $_POST["color"];
$_SESSION["tipografia"] = $_POST["tipografia"];
$_SESSION["tamaño"] = $_POST["tamaño"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $_SESSION["fondo"] ?>;
            color: <?php echo $_SESSION["color"] ?>;
            font-family: <?php echo $_SESSION["tipografia"] ?>;
            font-size: <?php echo $_SESSION["tamaño"] ?>;
        }

        button{
            width: 300px;
            height: 70px;
            border: solid 1px #000000;
            color: #000000;
            font-size: <?php echo $_SESSION["tamaño"] ?>;
            background-color: #FFFFFF;
            margin-top: 30px;
            cursor: pointer;
        }

        button:hover{
            scale: 1.1;
	        transition: all .5s ease-in-out;
            color: <?php echo $_SESSION["fondo"] ?>;
            background-color: <?php echo $_SESSION["color"] ?>;
        }
        .div{
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 768px;
            align-items: center;
            justify-content: center; 
        }
    </style>
</head>
<body>
    <div class="div">
        <?php
            print "Hola " . $_SESSION["nombre"] . " " . $_SESSION["apellido"];
        ?>

        <a href="ejercicio1.php"><button>Volver Atras</button></a>
    </div>
</body>
</html>