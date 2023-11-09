<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="nombre" id="">
        <input type="text" name="correo" id="">
        <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar Mensaje">
    </form>
    <div class="mensajes">
        <h1>Mensajes dejados por el usuario</h1>
        <?php
            error_reporting(E_ALL ^ E_WARNING);

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $mensaje = $_POST['mensaje'];
    
            $archivo = fopen("mensajes.txt", "w+");
            $archivo2 = "mensajes.txt";
            //$fecha = date("D d Y H:i:s", fileatime($archivo));
            $fecha = date("F d Y H:i:s.", filemtime($archivo2));
            fwrite($archivo, "$nombre ($correo) Fecha: $fecha
            Mensaje: $mensaje");    
            
            if(filesize($archivo2) == 0){
                print "Todavia no se han agregado comentarios";
            } else{
                fscanf($archivo2, "%s\t%s\t%s\n");
            }
            
            print filesize($archivo2);
        ?>
    </div>
</body>
</html>