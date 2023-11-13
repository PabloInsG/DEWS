<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 90%;
            background-color: #482e5f;
            color: #FFFFFF;
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            background: #6f4695;
            border-radius: 0.5rem;
            display: flex;
            flex-direction: column;
            width: 450px;
            height: 500px;
            margin-left: 10%;
        }
        .formulario{
            width: 100%;
            height: 760px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        p{
            margin-left: 10px;
        }

        input{
            margin-left:10px;
            width: 90%;
            height: 20px;
            border: solid 1px #000000;
        }

        select{
            margin-left: 10px;
            width: 90%;
            height: 20px;
            border: solid 1px #000000;
        }

        .submit{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        input[type="submit"]{
            width: 200px;
            height: 40px;
        }
        input[type="submit"]:hover{
            scale: 1.1;
            transition: all .5s ease-in-out;
            color: #FFFFFF;
            background-color: #482e5f;
        }
    </style>
</head>
<body>
    <?php
session_start();

create_form();

function create_form()
{    
?>
<div class="formulario">

    <form action="ejercicio1_1.php" method="POST">
        
        <p>Nombre:</p>
        <input type="text" name="nombre">
        <p>Apellidos:</p>
        <input type="text" name="apellido">
        <p>Fondo:</p>
    <select name="fondo" id="">
        <option value=""></option>
        <option value="red">Rojo</option>
        <option value="yellow">Amarillo</option>
        <option value="green">Verde</option>
        <option value="black">Negro</option>
        <option value="blue">Azul</option>
    </select>
    <p>Color de la Letra:</p>
    <select name="colorLetra" id="">
        <option value=""></option>
        <option value="red">Rojo</option>
        <option value="yellow">Amarillo</option>
        <option value="green">Verde</option>
        <option value="black">Negro</option>
        <option value="blue">Azul</option>
    </select>
    <p>Tipografia:</p>
    <select name="tipografia" id="">
        <option value=""></option>
        <option value="Arial, Helvetica, sans-serif">Arial</option>
        <option value="Georgia, 'Times New Roman', Times, serif">Georgia</option>
        <option value="'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Lucida Sans</option>
        <option value="'Courier New', Courier, monospace">Courier New</option>
    </select>
    <p>Tamaño:</p>
    <select name="tamaño" id="">
        <option value=""></option>
        <option value="14px">14px</option>
        <option value="20px">20px</option>
        <option value="32px">32px</option>
        <option value="42px">42px</option>
    </select>
    <div class="submit">
        <input type="submit" name="Enviar">
    </div>
    
</form>
</div>

<?php
}
?>

</body>
</html>