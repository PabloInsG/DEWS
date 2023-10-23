<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container{
            display:flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php
            $nombre = $_GET['nombre'];
            $apellido1 = $_GET['apellido1'];
            $apellido2 = $_GET['apellido2'];
            $nombreUsuario = $_GET['nombreUsuario'];
            $dni = $_GET['dni'];
            
            $regex = "/^[A-Za-záéíóúüÁÉÍÓÚÜñÑ\-]/";
            $nombreComprobar = "/[a-z]{1,}/";
            $dniComprobar = "/[0-9]{8}[A-Z]{1}/";
            $nieComprobar = "/[A-Z]{1}[0-9]{7}[A-Z]{1}/";
            
            if(preg_match($nombreComprobar,$nombre) && preg_match($nombreComprobar,$apellido1) && preg_match($nombreComprobar,$apellido2)){
                if(preg_match($dniComprobar,$dni) || preg_match($nieComprobar,$dni)){
                    $arrayDNI = [
                        "T"=>0, 
                        "R"=>1, 
                        "W"=>2,
                        "A"=>3, 
                        "G"=>4, 
                        "M"=>5,
                        "Y"=>6,
                        "F"=>7,
                        "P"=>8,
                        "D"=>9,
                        "X"=>10,
                        "B"=>11,
                        "N"=>12,
                        "J"=>13,
                        "Z"=>14,
                        "S"=>15,
                        "Q"=>16,
                        "V"=>17,
                        "H"=>18,
                        "L"=>19,
                        "C"=>20,
                        "K"=>21,
                        "E"=>22,
                    ];
                    $nieRegex = "/[X-Z]/";
                    $dniRegex = "/[0-9]/";
                    $arrayXYZ = ["X"=>0, "Y"=>1, "Z"=>2];
                    if(preg_match($nieRegex,$dni[0])){
                        $nieLetra = substr($dni, 8, 9);
                        foreach($arrayXYZ as $letraNIE=>$numero){
                            if($dni[0] == $letraNIE){
                                $dni[0] = $numero;
                                $nieSubstring = substr($dni, 0, 8);
                                $moduloNIE = (int)$nieSubstring % 23;
                                foreach($arrayDNI as $i=>$v){
                                    if($moduloNIE == $v){
                                        if($nieLetra == $i){
                                            echo "NIE Valido<br>";
                                        }else{
                                            echo "NIE no Valido<br>";
                                            echo "<a href=\"ejercicio5.php\" style=\"color: white\">Volver al formulario</a>";
                                        }
                                    }
                                }
                            }
                        }
                    }elseif(preg_match($dniRegex,$dni[0])){
                        $dniSubstring = substr($dni, 0, 8);
                        $moduloDNI = (int)$dniSubstring % 23;
                        $dniLetra = substr($dni, 8, 9);
                        
                        foreach($arrayDNI as $i=>$v){
                            if($moduloDNI == $v){
                                if($dniLetra  == $i){
                                    echo "DNI Valido<br>";
                                    echo "<a href=\"ejercicio5.php\" style=\"color: white\">Volver al formulario</a>";
                                } else{
                                    echo "DNI no valido<br>";
                                    echo "<a href=\"ejercicio5.php\" style=\"color: white\">Volver al formulario</a>";
                                }
                            }
                        } 
                    }
                }
            } else{
                echo "Error en los campos nombre, primer apellido o segundo apellido<br>";
                echo "<a href=\"ejercicio5.php\" style=\"color: white\">Volver al formulario</a>";
            }

        

        ?>
    </div>
</body>
</html>