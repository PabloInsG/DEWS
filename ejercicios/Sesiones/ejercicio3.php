<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 90%;
            height: 800px;
            background-color: #482e5f;
            color: #FFFFFF;
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            display: flex;
            background: #6f4695;
            border-radius: 0.5rem;
            flex-direction: column;
            width: 450px;
            height: 500px;
            margin-left: 10%;
        }
        .formulario{
            display: flex;
            width: 100%;
            height: 760px;
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
    <div class="formulario">

        <form action="ejercicio3_1.php" method="POST">
            <h1 style="text-align:center;">Formulario</h1>
            <p>Nombre de usuario</p>
            <input type="text" name="nombre" id="">
            <p>Contraseña</p>
            <input type="password" name="contrasena">
            <div class="submit">
            <input type="submit" value="Comprobar">
        </div>
    </form>
</div>
</body>
</html>