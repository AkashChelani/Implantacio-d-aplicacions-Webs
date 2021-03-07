
<?php

/*
Plugin Name: Tasques
Description: Programa les teves tasques
Version: 1.0
Author:Akash Chelani
*/

#add_action('gensis_before_header','mi_correo');


add_shortcode('plugin_tasques','ptasques');


function ptasques()
{
    ob_start();

    $connexio = mysqli_connect('localhost', 'akash', 'P@ssw0rd', 'tareas');

    $select = "SELECT * FROM tareas";
    $result = mysqli_query($connexio, $select);
    $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
    do {
        $data[] = $rows;
    } while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC));


    echo '<table border="3">';
    foreach ($data as $r) {
        echo '<tr>';
        foreach ($r as $v) {
            echo '<td>' . $v . '</td>';
        }
        echo '</tr>';

    }

    echo '</table>';


    echo "<form method='POST'>";
    echo "<label for='Eliminar'>Que vols eliminar? </label><br>";
    echo "<input type= 'text' id = 'Eliminar' name='Eliminar'><br><br>";
    echo "<button type='submit'>Eliminar</button>";
    echo "</form>";


    $eliminar = $_POST['Eliminar'];

    if (isset($_POST['Eliminar'])) {

        foreach ($data as $tasca) {

            foreach ($tasca as $valors => $valor) {


                if ($valor == $eliminar) {

                    $delete = "DELETE FROM tareas WHERE Tasques = '$eliminar'";
                    $del = mysqli_query($connexio, $delete);

                    echo "S'ha eliminat'<br><br>";

                }
            }

        }


    }





    mysqli_close($connexio);

return ob_get_clean();
}

ptasques();
?>

