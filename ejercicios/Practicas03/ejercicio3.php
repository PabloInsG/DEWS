<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                background-color: grey;
                color: white;
            }
            .container{
                display:flex;
                flex-direction: row;
                justify-content: space-around;
            }

            .lista{
                display: flex;
                flex-direction: column;
                margin-bottom: 23px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <p>Nombre</p>
                <input type="text" name="nombre" id="">
                <p>Telefono</p>
                <input type="text" name="telefono" id="">
                <input type="submit" value="Aplicar cambios">
            </form>
            <div class="lista">
                <?php
                    error_reporting(E_ALL ^ E_WARNING);
                    $nombre = $_POST['nombre'];
                    $telefono = $_POST['telefono'];
                    $todoOk = false;
                    
                    function comprobarTelefono($tel){
                        if($tel = " "){
                            return false;
                        } else{
                            return true;
                        }
                    }
                    
                    function comprobarNombre($nom){
                        if($nom == " "){
                            return false;
                        } else{
                            return true;
                        }
                    }

                    if(comprobarTelefono($telefono) && comprobarNombre($nombre)){
                        $todoOk = true;
                        $lista = [$nombre => $telefono];
                        return $todoOk;
                    }
                    
                    if($todoOk){
                        print "<table border='1'>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                        <tr>";
                        foreach($lista as $n=>$t){
                            print "<tr><td>$n</td><td>$t</td></tr>";
                        }
                        print "</table>";
                    }
                    print $todoOk;
                    ?>
            </div>
        </div>
    </body>
</html>