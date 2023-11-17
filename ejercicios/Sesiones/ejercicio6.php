<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ejercicio6.js"></script>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color:#000000;
        }
        header{
            display: flex;
            width: 100%;
            color: #ffffff;
            justify-content: center;
            background-color: #000000;
            height: 180px;
        }

        #id{
            width: 100%;
            height: 70px;
            display: flex;
            flex-direction: row;
        }

        .container{
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .filas{
            width:100%;
            display:flex;
            flex-direction: row;
        }

        button{
            width:320px;
            height:162px;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <header id="header">
        <h1>Colores seleccionados</h1>
        <div id="colores"></div>
    </header>
    <div class="container">

        <?php
        for($i = 0; $i < 4; $i++){
            print "<div class='filas'>";
            for($j = 0; $j < 6; $j++){
                $r = rand(0,255);
                $g = rand(0,255);
                $b = rand(0,255);
                print "<button id='button' style='background-color: rgb($r, $g, $b)' value='rgb($r, $g, $b)' onclick='doSomething(this.id, this.value)'></button>"; 
            }
            print "</div>";
        }
        ?>
    </div>
</body>
</html>