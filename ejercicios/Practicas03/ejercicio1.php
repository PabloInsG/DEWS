<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial;
            background-color: rgb(125, 113, 212);
            color: #FFFFFF;
        }
        form{
            margin-bottom: 40px;
        }
        input{
            width: 120px;
            height: 20px;
            border: solid 1px #000000;
            border-radius: 0rem;
            background-color: #FFFFFF;
        }

        input[type="submit"]{
            margin-left: 10px;
            height: 25px;
        }

        input[type="submit"]:hover{
            scale: 1.1;
	        transition: all .5s ease-in-out;
        }

        .table{
            width: 90%;
            border-collapse: collapse;
            border-color: #000000;
            background-color: #FFFFFF;
            text-align: center;
            color: #000000;
        }
    </style>
</head>
<body>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <h1>Tabla de Multiplicar</h1>
            <label for="Numero">
                Numero
                <input type="number" name="numero" id="">
            </label>
            <input type="submit" value="Generar Tabla">
        </form>
        <?php
            error_reporting(E_ALL ^ E_WARNING); 
            if($_SERVER['PHP_SELF'] = "POST"){
                if(isset($_POST["numero"])){
                    $numero = $_POST["numero"];
                    print "<table border=\"1\" class=\"table\">
                    <tr>
                        <th>Número</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Resultado</th>
                    </tr>";
                        for($i = 1; $i <= 10; $i++){
                            print "<tr>
                            <td>" . $numero . "</td>
                            <td>x</td>
                            <td>$i</td>
                            <td>=</td>
                            <td>" . $i * $numero . "</td>";
                        }
                    
                    print "</table>";
                }   

            }
            



        ?>
    </div>

</body>
</html>