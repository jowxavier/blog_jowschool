<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="css/bootstrap.min.css">

    <title>Cadastro Blog Jow</title>
  </head>

  <body>
        <div class="container">
        <div class="row">
        <div class="col">
              <h1>Blog - Cadastro</h1>
              <form action="script_cadastro.php" method="POST">
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control">
        </div> <br>     

        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="nome" class="form-control" id="exampleInputNome" aria-describedby="emailHelp">
        </div> <br>

        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                <input type="text" class="form-control">
        </div> <br>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descrição</label>
                <input type="text" class="form-control">
        </div> <br>      
    
        <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
        </div> <br>
  
    <button type="submit" class="btn btn-primary">Enviar</button>

         <tbody> <?php
                    // Incluindo ConexÃ£o
                    include('conexao.php');
                    // Query que seleciona a tabela
                    $query = "SELECT * FROM usuarios";
                    $result = $conn->query($query);
                    // Cria um array associativo, enquanto existir dados
                    while ($row = $result->fetch_assoc()) {
                ?>
         </tbody>

            </form>
              </form>
              </div>

          </div>

      </div>          
    </body>
 </html>