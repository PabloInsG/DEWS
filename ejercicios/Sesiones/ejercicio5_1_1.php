<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            width: 1600px;
            height: 780px;

        }

        form{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 800px;
            height: 700px;
        }

        input[type="button"]{
            width: 80px;
            height: 40px;
            margin-right: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <?php
                $contador = 1;

                function sumar(){
                    $contador++;
                }

                $palabras = ["truculento", "admirable", "narcisista", "óptimo", "mercadería",
                "atalaya", "ingrato", "exhumación", "inocuo", "plausible",
                "humanista", "candente", "universo", "tópico", "antiguo",
                "desidia", "amante", "extraño", "lúdico", "magnífico",
                "inóspito", "guerrero", "moldeable", "tirano", "candidato",
                "rápido", "bondad", "clásico", "galante", "hermandad", "siniestro",
                "cónico", "aburrido", "metalurgia", "sideral", "comando"];
        
                do{
                    print "Selecciona la " . $contador . " palabra";
                    foreach($palabras as $posicion=>$valor){
                        print "<input type='button' value='$valor' onClick='sumar()'>";
                    }
                } while($contador == 5);

        ?>
        </form>
    </div>
</body>
</html>