<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "usuarios";

        $conn = mysqli_connect($servername, $username, $password, $database);

            if (!$conn) {
                die("Falha na conexao: " . mysqli_connect_error());
            }
                //echo "Conectado com sucesso!";

                //mysqli_close($conn);
        /*if ($conn = mysqli_connect ($servername, $username, $password, $bd) ) {
            echo "Conectado com sucesso !!";
           } else 
           echo "Erro!"; */

                function mensagem ($texto, $tipo) {
               echo "<div class='alert alert-$tipo' role='alert'>
               $texto
             </div>";
           }


?>