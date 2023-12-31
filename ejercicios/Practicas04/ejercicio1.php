<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
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

        textarea{
            margin-left: 10px;
            width: 90%;
        }

        .submit{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 40px;
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <p>Nombre:</p>
        <input type="text" name="nombre" id="">
        <p>Correo:</p>
        <input type="text" name="correo" id="">
        <p>Mensaje:</p>
        <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        <div class="submit">
            <input type="submit" value="Enviar Mensaje">
        </div>
    </form>
    <div class="mensajes">
        <hr>
        <h1>Mensajes dejados por el usuario</h1>
        <?php
            error_reporting(E_ALL ^ E_WARNING);

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $mensaje = $_POST['mensaje'];

            $fp = fopen("mensajes.txt", "w+");
            //$archivo2 = "mensajes.txt";
            //$fecha = date("D d Y H:i:s", fileatime($archivo));
            $fecha = date("F d Y H:i:s.", filemtime($archivo2));
            if(!fopen($fp)){
                while (!feof($fp)){
                        fputs($fp, "$nombre ($correo) Fecha: $fecha
                        Mensaje: $mensaje");
                }
            }
        ?>
    </div>
</body>
</html>