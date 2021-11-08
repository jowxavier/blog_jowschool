<?php
session_start();
include_once("conexao.php");
    if(isset($_SESSION['msg'])) {
      echo $_SESSION ['msg'] ;
        unset($_SESSION['msg']);
    }

    $result_dados = "SELECT * FROM dados";
    $resultado_dados = mysqli_query($conn, $result_dados);
    while($row_dados = mysqli_fetch_assoc($resultado_dados)) {
      echo "post" . $row_dados ['post'] . "<hr>"; 
    }

