<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #hidden-button{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Lembra esta lista de palabras</h1>
    <?php
        session_start();
        $palabras = ["truculento", "admirable", "narcisista", "óptimo", "mercadería",
        "atalaya", "ingrato", "exhumación", "inocuo", "plausible",
        "humanista", "candente", "universo", "tópico", "antiguo",
        "desidia", "amante", "extraño", "lúdico", "magnífico",
        "inóspito", "guerrero", "moldeable", "tirano", "candidato",
        "rápido", "bondad", "clásico", "galante", "hermandad", "siniestro",
        "cónico", "aburrido", "metalurgia", "sideral", "comando"];
        $i = 0;
        do{
            shuffle($palabras);
            foreach($palabras as $posicion=>$valor){
                if($i < 5){
                    $i++;
                    $_SESSION["palabra$i"] = $valor;
                    print $valor . "<br>";
                }   
            }
        } while($i < 5)
    ?>

<script>
    window.onload=function(){
        //salto automático a seguinte páxina
        //document.getElementById("hidden-button").click();
        setInterval(function(){location="ejercicio5_1.php"},3600);
    }
</script>
</body>
</html>