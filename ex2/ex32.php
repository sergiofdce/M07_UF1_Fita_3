<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.3 ex2</title>
</head>
<body>
    <p>INTRODUEIX DADES</p>
    
    <form method="POST" action="ex32.php">

        <label for="comentari">Comentari: </label>
        <textarea name="comentari" id="comentari"></textarea>

        <label for="separador">Separador: </label>
        <input type="text" name="separador" id="separador">

        <input type="submit">

    </form>


    <?php
        // Si se reciben datos
        if (!empty($_POST["comentari"]) && !empty($_POST["separador"])) {
                // echo"Se han escrito datos.";

                // Si el fichero comentaris.txt no existe, lo crea
                if ( !file_exists("comentaris.txt") ) {
                    fopen("comentaris.txt", 'w');
                }
                
                $stringDatos = $_POST["comentari"];
                $separador = $_POST["separador"];

                $stringModificado = str_replace(' ',$separador, $stringDatos);
                // echo $stringModificado;
                
                // PHP_EOL: inserta un salto de linea
                // FILE_APPEND: escribe al final del cursor
                file_put_contents("comentaris.txt", $stringModificado . PHP_EOL, FILE_APPEND);
            }
    ?>

</body>
</html>