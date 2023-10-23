<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .tlf{
    width: 10%;
    height: 24px;
    border: solid 1px #000000;
    border-radius: 0rem 0rem 0rem 0rem;
}
    form{
        height: 640px;
    }
    </style>
</head>
<body>
<div class="container">
        <form action="ejercicio5_2.php" method="GET">
            <h1>FORMULARIO DNI</h1>
            <div class="inputs">
                <p>Nombre</p>
                <input type="text" placeholder="John" name="nombre">
                <p>Primer Apellido</p>
                <input type="text" placeholder="Doe" name="apellido1">
                <p>Segundo Apellido</p>
                <input type="text" placeholder="Doe" name="apellido2">
                <p>Nombre usuario</p>
                <input type="text" placeholder="Nombre Usuario" pattern="(?:[A-Za-z]{1}|[A-Z]{5, })" required name="nombreUsuario">
                <p>DNI o NIE</p>
                <input type="text" name="dni" pattern="(?:[0-9]{8}[A-Z]{1}|[A-Z]{1}[0-9]{7}[A-Z]{1})" required title="12345678X (DNI ejemplo) X1234567X(NIE ejemplo)" id="">
                <p>Telefono</p>
                <select name="" class="tlf" id="">
                    <option value=""></option>
                    <option value="esp">+34</option>    
                    <option value="arg">+54</option>    
                    <option value="fr">+33</option>    
                    <option value="pb">+31</option>    
                    <input type="text" name="telefono" pattern="(?:[0-9]{9}" required title="" id="">
                </select>
            </div>
            <div class="submit">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>