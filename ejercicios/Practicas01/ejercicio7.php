<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        // Tamaño de la tabla
        $filas = 15;
        $columnas = 64;

        $matriz = array_fill(0, $filas, array_fill(0, $columnas, 0)); // Inicializar una matriz vacía

        $valor = 1;
        $direccion = 0; // 0: derecha, 1: abajo, 2: izquierda, 3: arriba
        $fila_inicio = 0;
        $fila_fin = $filas - 1;
        $columna_inicio = 0;
        $columna_fin = $columnas - 1;

        while ($valor <= ($filas * $columnas)) {
            switch ($direccion) {
                case 0: // Mover a la derecha
                    for ($i = $columna_inicio; $i <= $columna_fin; $i++) {
                        $matriz[$fila_inicio][$i] = $valor;
                        $valor++;
                    }
                    $fila_inicio++;
                    $direccion = 1;
                    break;
                case 1: // Mover hacia abajo
                    for ($i = $fila_inicio; $i <= $fila_fin; $i++) {
                        $matriz[$i][$columna_fin] = $valor;
                        $valor++;
                    }
                    $columna_fin--;
                    $direccion = 2;
                    break;
                case 2: // Mover a la izquierda
                    for ($i = $columna_fin; $i >= $columna_inicio; $i--) {
                        $matriz[$fila_fin][$i] = $valor;
                        $valor++;
                    }
                    $fila_fin--;
                    $direccion = 3;
                    break;
                case 3: // Mover hacia arriba
                    for ($i = $fila_fin; $i >= $fila_inicio; $i--) {
                        $matriz[$i][$columna_inicio] = $valor;
                        $valor++;
                    }
                    $columna_inicio++;
                    $direccion = 0;
                    break;
                    }
            }

        // Imprimir la tabla en formato HTML
        echo "<table border='1' style='border-collapse: collapse; border-color: white; width: 800px; text-align:center'>";
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                echo "<td>" . $matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        /*$numero = 1;
        $k = $numero + 50;
        do{
            for($i = 0; $i < 200; $i++){
                print "<tr>";
                for($j = 0; $j < 5; $j++){
                    print "<td>" . $numero++ . "</td>";
                }
                print "</tr>";
            }
        } while($numero < $k);
        */
        ?>
    </div>
</body>
</html>