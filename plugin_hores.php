<?php

/*
Plugin Name: Càlcul Hores
Description: Et mostra el número de hores destinades.
Version: 1.0
Author:Akash Chelani
*/




add_shortcode('plugin_hores','phores');

session_start();
function phores()
{
    ob_start();

    $connexio = mysqli_connect('localhost', 'akash', 'P@ssw0rd', 'tareas');



    echo "<form method='POST'>";
    echo "<p>   Començar:<button type='submit' name='inicio'>Iniciar</button></p>";
    echo "<p>   Parar:<button type='submit' name='fin'>Finalitzar</button></p>";
    echo "</form>";









    $now = time();


        if (isset( $_POST['inicio'])) {

            $_SESSION['timer'] = time();






        }


        if ( isset( $_POST['fin'] )) {
            $now=time();
            $temps = $now - $_SESSION['timer'];
            $hores=$temps/3600;

            echo "<p>Han passat $temps segons i $hores hores </p> <br>";




                $insert = "INSERT INTO calculhores(Segons,Hores)  VALUES($temps,$hores)  ";
                mysqli_query($connexio, $insert);


            $select="SELECT SUM(HORES) as total FROM calculhores";

            $resu = mysqli_query($connexio,$select);

            $rows = mysqli_fetch_array($resu, MYSQLI_ASSOC);
            do {
                $data[] = $rows;
            } while ($rows = mysqli_fetch_array($resu, MYSQLI_ASSOC));





            echo '<table border="3">';
            foreach ($data as $r) {
                echo 'Total temps destinat al projecte: <tr>';
                foreach ($r as $v) {
                    echo '<td>' . "$v hores" . '</td>';
                }
                echo '</tr>';

            }

            echo '</table>';





        }









    mysqli_close($connexio);

    return ob_get_clean();



}

phores();

?>