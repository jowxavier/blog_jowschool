<?php
    $servername = "mysql";
    $username = "root";
    $password = " " ;

    $conn = new mysqli($servername, $username, $password, 'cadastro_blog');

    if (mysqli_connect_error ($servername, $username, $password)) {
        echo "conectado";
    } else
        echo "erro"
    
?>