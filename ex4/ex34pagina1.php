<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.3 ex4</title>
</head>
<body>

    <?php

        // Comprobar minimo 2 lineas
        $lineas = file("ex34.txt");
        $num_lineas = count($lineas);


        if ($num_lineas >= 2) {
            // Convertir fichero a string
            $ficheroString = file_get_contents("ex34.txt");
            $ficheroString = str_replace("##", "#", $ficheroString);
            $arrayFilas = explode("#", $ficheroString);
            array_splice($arrayFilas, 0, 1);
            // print_r($arrayFilas);

            for ($i = 0; $i < count($arrayFilas); $i++) {
                echo "<h1>" . $arrayFilas[$i] . "</h1>";
            }

        }

    ?>
    
</body>
</html>