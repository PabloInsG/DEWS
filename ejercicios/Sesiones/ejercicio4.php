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

        .submit{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items:center;
            margin-top: 20px;
        }

        input{
            margin-left:10px;
            width: 90%;
            height: 20px;
            border: solid 1px #000000;
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
        a{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        session_start();
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <label for="">Añadir tarea</label>
        <input type="text" name="tarea" id="">
        <div class="submit">
            <input type="submit" value="Enviar Tarea">
        </div>
    </form>
    <?php

        $_SESSION['tarea'] = $_POST['tarea'];
        print "<ol>";
        for($i = 0; $i < 10; $i++){
            print "<li>" . $_SESSION['tarea'] . " <a href=''>Borrar Tarea</a></li>";
        }
        print "</ol>";
        ?>
</body>
</html>