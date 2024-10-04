<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.3 ex3</title>
</head>
<body>

    <form method="POST" action="ex33pagina1.php">

        <!-- Mostrar contenido del fichero -->
        <?php

            if ( !empty(isset($_POST["comentari"])) ) {
                $texto = $_POST["comentari"];
                file_put_contents("ex33.txt", $texto . PHP_EOL, FILE_APPEND);
            }

            $archivo = file('ex33.txt');
            if ( !empty( $archivo ) ) {
                foreach ($archivo as $linea) {
                    echo "<br>" . $linea . "<hr>";
                }            
            } 
  

        ?>


        <br>

        <label for="comentari">Añadir texto: </label>
        <textarea name="comentari" id="comentari"></textarea>
        <input type="submit">

    </form>
    
</body>
</html>