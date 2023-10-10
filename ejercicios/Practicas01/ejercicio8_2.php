<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form{
    width: 500px;
    height: 600px;
    background: #6f4695;
    color: #FFFFFF;
    font-family: Arial, Helvetica, sans-serif;
    border: solid 1px #000000;
    border-radius: 1rem;
    display: flex;
    flex-direction: column;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>MOSTRAR SUMA PARES</h1>
            <?php
                $numeroOk = false;
                if(isset($_GET["numero"])){
                    $numero = $_GET["numero"];
                    $suma = 0;
                    for($i = 0; $i < $numero; $i++){
                        if($i % 2 == 0){
                            $suma += $i;
                        }
                    }
                    print "<h1>La suma es " . $suma . "</h1>";
                }
            ?>
        </div>
    </div>
</body>
</html>