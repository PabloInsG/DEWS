<?php
    session_start();
?>
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
            align-items:center;
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
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <p>Palabra 1</p>
        <input type="text" name="palabra1">
        <p>Palabra 2</p>
        <input type="text" name="palabra2">
        <p>Palabra 3</p>
        <input type="text" name="palabra3">
        <p>Palabra 4</p>
        <input type="text" name="palabra4">
        <p>Palabra 5</p>
        <input type="text" name="palabra5">
        <div class="sumbit">
            <input type="submit" value="Comprobar">
        </div>
    </form>

    <?php
        error_reporting(E_ALL ^ E_WARNING);
        $palabra1us = $_POST['palabra1'];
        $palabra2us = $_POST['palabra2'];
        $palabra3us = $_POST['palabra3'];
        $palabra4us = $_POST['palabra4'];
        $palabra5us = $_POST['palabra5'];

        $aciertos = 0;
        /*
        print "Hola " . $_SESSION['palabra1'] . "<br>";
        print "Hola " . $_SESSION['palabra2'] . "<br>";
        print "Hola " . $_SESSION['palabra3'] . "<br>";
        print "Hola " . $_SESSION['palabra4'] . "<br>";
        print "Hola " . $_SESSION['palabra5'] . "<br>";
        */

        if(isset($palabra1us)){
            if($palabra1us == $_SESSION['palabra1']){
                $aciertos++;
                echo "Acertaste " . $_SESSION['palabra1'] . "<br>"; 
            } else{
                echo "Fallaste " . $_SESSION['palabra1'] . "<br>";
            }

            if($palabra2us == $_SESSION['palabra2']){
                $aciertos++;
                echo "Acertaste " . $_SESSION['palabra2'] . "<br>"; 
            } else{
                echo "Fallaste " . $_SESSION['palabra2'] . "<br>";
            }

            if($palabra3us == $_SESSION['palabra3']){
                $aciertos++;
                echo "Acertaste " . $_SESSION['palabra3'] . "<br>"; 
            } else{
                echo "Fallaste " . $_SESSION['palabra3'] . "<br>";
            }
            
            if($palabra4us == $_SESSION['palabra4']){
                $aciertos++;
                echo "Acertaste " . $_SESSION['palabra4'] . "<br>"; 
            } else{
                echo "Fallaste " . $_SESSION['palabra4'] . "<br>";
            }

            if($palabra5us == $_SESSION['palabra5']){
                $aciertos++;
                echo "Acertaste " . $_SESSION['palabra5'] . "<br>"; 
            } else{
                echo "Fallaste " . $_SESSION['palabra5'] . "<br>";
            }
            print "Cantidad de Aciertos: " . $aciertos;
        }
    ?>
</body>
</html>