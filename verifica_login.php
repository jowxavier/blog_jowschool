<?php

    if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

        require 'conexao.php' ;
        require 'UsuarioClass.php';

        $u = new usuario();

        $nome =  $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($u->login($nome, $email, $senha) == true);{
            if(isset($_SESSION['idusuario'])){
                header("Location: post.php");

            }else ("Location: index.php");
        }

    } else{
        header("Location: index.php");
    }

        

?>