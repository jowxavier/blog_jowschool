<?php

session_start();

$server = "localhost";
$user = "root";
$password = "";
$database = "blog";

global $pdo;

//verifica se a conexao estiver ok 

try{
    //conexao com orientação a objeto
    $pdo = new PDO("mysql:dbname=".$database."; host=".$server, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERRO: ".$e->getMessage();
    exit;
}




//executar a query
/*$sql = $pdo->query("SELECT * FROM usuarios");

$sql->execute();

//contar quantos registro tem
echo $sql->rowCount(); */


?>