<?php

class usuario{

    public function login ($nome, $email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE nome = :nome AND email = :email AND senha = :senha" ;
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome" , $nome);
        $sql->bindValue("email" , $email);
        $sql->bindValue("senha" , $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION ['idusuario'] = $dado['ID'];

            return true;
        }else{
            return false;
        }
    }
}







?>