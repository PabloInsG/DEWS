<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <div class="container">

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <h1>EQUIPO</h1>
            <div class="inputs">
                <p>Introduce el nombre del equipo que desea consultar:</p>
                <select name="equipo" id="">
                    
                        <?php
                            $equipos = array("Atletico de Madrid"=>79, "Barcelona"=>80, "Real Madrid"=>77, "Valencia"=>72, "Real Betis"=>53, "Sevilla FC"=>66, "Real Sociedad"=>57, "Celta de Vigo"=>16, "Osasuna"=>33, "Alaves"=>25, "Levante"=>42, "Elche"=>32, "Granada"=>54, "Getafe"=>18, "Huesca"=>22, "Valladolid"=>40, "Eibar"=>50, "Cadiz"=>70, "Villareal"=>15, "Athletic"=>22 );
                            ksort($equipos);
                            foreach($equipos as $i=>$v){
                                print "<option value=\"$i\">" . $i . "</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="submit">
                <input type="submit" value="Enviar">
            </div>
            <?php
                error_reporting(E_ALL ^ E_WARNING); 
                if($_SERVER['PHP_SELF'] = "POST"){
                    $equipo = $_POST["equipo"];
                }
                $equiposOrdenados = $equipos;
                rsort($equiposOrdenados, SORT_NUMERIC);
                foreach($equiposOrdenados as $clave=>$valor){
                    if($equipos[$equipo] == $valor){
                        $posicion = $clave + 1;
                    }
                }
                print "<br>El " . $equipo . " tiene " . $equipos[$equipo] . " puntos, acabo la liga en " . $posicion . " posicion en la clasificacion"; 
                ?>
        </form>
        <form action="ejercicio1.php" method="POST">
            <h1>Generar Clasificacion Aleatoria</h1>
            <div class="inputs">
                <p>Introduce el nombre del equipo que desea consultar:</p>
                <select name="equipoAleatorio" id="">
                        <?php
                            $equiposAleatorios = array("Atletico de Madrid"=>rand(0,90), "Barcelona"=>rand(0,90), "Real Madrid"=>rand(0,90), "Valencia"=>rand(0,90), "Real Betis"=>rand(0,90), "Sevilla FC"=>rand(0,90), "Real Sociedad"=>rand(0,90), "Celta de Vigo"=>rand(0,90), "Osasuna"=>rand(0,90), "Alaves"=>rand(0,90), "Levante"=>rand(0,90), "Elche"=>rand(0,90), "Granada"=>rand(0,90), "Getafe"=>rand(0,90), "Huesca"=>rand(0,90), "Valladolid"=>rand(0,90), "Eibar"=>rand(0,90), "Cadiz"=>rand(0,90), "Villareal"=>rand(0,90), "Athletic"=>rand(0,90) );
                            ksort($equiposAleatorios);
                            foreach($equiposAleatorios as $b=>$c){
                                print "<option value=\"$b\">" . $b . "</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="submit">
                <input type="submit" value="Generar">
            </div>
            <?php
                error_reporting(E_ALL ^ E_WARNING); 
                if($_SERVER['PHP_SELF'] = "POST"){
                    $equipoAleatorio = $_POST["equipoAleatorio"];
                }
                $equiposOrdenadosAleatorio = $equiposAleatorios;
                rsort($equiposOrdenadosAleatorio, SORT_NUMERIC);
                foreach($equiposOrdenadosAleatorio as $claveAleatorio=>$valorAleatorio){
                    if($equiposAleatorios[$equipoAleatorio] == $valorAleatorio){
                        $posicionAleatorio = $claveAleatorio + 1;
                    }
                }
                print "<br>El " . $equipoAleatorio . " tiene " . $equiposAleatorios[$equipoAleatorio] . " puntos, acabo la liga en " . $posicionAleatorio . " posicion en la clasificacion"; 
                ?>
        </form>
    </div>
</body>
</html>