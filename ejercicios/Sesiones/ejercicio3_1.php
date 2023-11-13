<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usuario = "admin";
        $contrasinal = "123456";
        $_SESSION["nombre"] = $_POST['nombre'];
        $_SESSION["contrasena"] = $_POST['contrasena'];

        if($usuario == $_SESSION["nombre"] && $contrasinal == $_SESSION["contrasena"]){
            print "<h1>Entraste en la zona restringida</h1>";
        } else{
            print "<h1 style='color:red;'>Datos Incorrectos</h1>";
        }

    ?>
</body>
</html>