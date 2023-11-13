<?php
session_start();
$_COOKIE["nombre"] = $_POST["nombre"];
$_COOKIE["apellido"] = $_POST["apellido"];
$_COOKIE["fondo"] = $_POST["fondo"];
$_COOKIE["colorLetra"] = $_POST["colorLetra"];
$_COOKIE["tipografia"] = $_POST["tipografia"];
$_COOKIE["tamaño"] = $_POST["tamaño"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $_COOKIE["fondo"] ?>;
            color: <?php echo $_COOKIE["colorLetra"] ?>;
            font-family: <?php echo $_COOKIE["tipografia"] ?>;
            font-size: <?php echo $_COOKIE["tamaño"] ?>;
        }

        button{
            width: 300px;
            height: 70px;
            border: solid 1px #000000;
            color: #000000;
            font-size: <?php echo $_COOKIE["tamaño"] ?>;
            background-color: #FFFFFF;
            margin-top: 30px;
            cursor: pointer;
        }

        button:hover{
            scale: 1.1;
	        transition: all .5s ease-in-out;
            color: <?php echo $_COOKIE["fondo"] ?>;
            background-color: <?php echo $_COOKIE["colorLetra"] ?>;
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

        <a href="ejercicio1_cookies.php"><button>Volver Atras</button></a>
    </div>
</body>
</html>