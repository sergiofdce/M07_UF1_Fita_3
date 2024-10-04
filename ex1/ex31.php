<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.3 ex1</title>
</head>
<body>
    <p>PROCESSA CONTACTES</p>

    <?php
        // Obre el fitxer contactes31.txt i el llegeix
        $archivo = file(filename: 'contactes31.txt');

        // Mostra els contactes del fitxer en una taula.
        echo "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Telefono</th>
                </tr>";

        foreach ($archivo as $num_línea => $linea) {
            $palabras = explode(",", $linea);

            echo "<tr>";
            foreach ($palabras as $palabra) {
                echo "<td>" . $palabra . "</td>";
                
            }
            echo "</tr>";
        }
        echo "</table>";

        // Genera un fitxer contactes31b.txt on has de traspassar tots els contactes de contactes31.txt, 
        // però enlloc de separats per comes, separats pel símbol #

        // Crear fichero copia
        $stringDatos = file_get_contents('contactes31.txt');
        $stringModificado = str_replace(',','#', $stringDatos);
        // echo $stringModificado;

        // Crear y guardar fichero
        fopen("contactes31b.txt", 'w');
        file_put_contents("contactes31b.txt", $stringModificado);






    ?>

    
</body>
</html>