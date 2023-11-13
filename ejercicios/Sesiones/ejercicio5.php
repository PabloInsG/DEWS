<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lembra esta lista de palabras</h1>
    <?php
        $palabras = ["truculento", "admirable", "narcisista", "óptimo", "mercadería",
        "atalaya", "ingrato", "exhumación", "inocuo", "plausible",
        "humanista", "candente", "universo", "tópico", "antiguo",
        "desidia", "amante", "extraño", "lúdico", "magnífico",
        "inóspito", "guerrero", "moldeable", "tirano", "candidato",
        "rápido", "bondad", "clásico", "galante", "hermandad", "siniestro",
        "cónico", "aburrido", "metalurgia", "sideral", "comando"];

        $i = 0;
        do{
            $random = rand(0,35);
            foreach($palabras as $posicion=>$valor){
                if($random == $posicion){
                    $i++;
                    print $valor . "<br>";
                };
            }
        } while($i < 5)
    ?>

<script>
    window.onload=function(){
        //salto automático a seguinte páxina
        setInterval(function(){location="ejercicio5_1.php"},3600);
    }
</script>
</body>
</html>