<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hola, esta es la tabla de números que pediste</h1>
    
    <?php

        $minimo = $_POST['minimo'];
        $maximo = $_POST['maximo'];

        echo "<table>";
        echo "<tr>";
        for($i = $minimo; $i <= $maximo; $i++) {
            echo "<th>".$i."</th>";
        }
        echo "</tr>";
        for($x = 0; $x <= 10; $x++) {
            echo "<tr>";
            for ($y = $minimo; $y <= $maximo; $y++) {
                echo "<td>",($x*$y),"</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        
    
    ?>
    
    <a href="index.php">Volver a la página de inicio</a>

</body>
</html>