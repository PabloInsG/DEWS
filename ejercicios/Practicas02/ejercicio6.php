<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .horizontal{
            display:flex;
            flex-direction: row;
            justify-content
        }
        input[type="radio"]{
            width: 10px;
            height: 10px;
        }
        .no-radius{
            border-radius: 0rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="ejercicio6_2.php" method="GET">
            <h1>ENCRIPTADO Y DESENCRIPTADO CÉSAR</h1>
            <div class="inputs">
                <p>Texto a encriptar o desencriptar</p>
                    <textarea name="texto" id="" cols="60" rows="10"></textarea>
                <p>Elija que desea</p>
                <div class="horizontal">
                    <input type="radio" name="Encriptar" id="">
                    <label for="Encriptar">Encriptar</label>
                    <input type="radio" name="Desencriptar" id="">
                    <label for="Desencriptar">Desencriptar</label>
                </div>
                <p>Escribe la clave (numero entre el 1 y el 100)</p>
                <input type="number" class="no-radius" placeholder="" required name="numero" min="1" max="100">
            </div>
            <div class="submit">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>