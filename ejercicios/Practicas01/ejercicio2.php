<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="ejercicio2_2.php" method="GET">
            <h1>FORMULARIO SALARIO</h1>
            <div class="inputs">
                <p>Nombre</p>
                <input type="text" placeholder="John" name="nombre">
                <p>Apellidos</p>
                <input type="text" placeholder="Doe Doe" name="apellidos">
                <p>Edad</p>
                <input type="number" placeholder="Edad" name="edad">
                <p>Salario</p>
                <input type="number" name="salario" id="">
            </div>
            <div class="submit">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>