<?php
session_start();

// Verifica se existe sessão
if (empty($_SESSION['usuario'])) {
    header('Location: index.php');exit();
}

// Incluindo Classe de conexão
include('classes/Conexao.class.php');

// Incluindo Classe de Post
include('classes/Post.class.php');

// Cria uma instância da Classe Funcionário
$post = new Post();
// Acessa o método exibirPorId de funcionário
$data = $post->exibirPorId($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Posts <?php echo $data['titulo']; ?></title>
</head>
<body>
    <div class="container"><br><br>
        <form action="scripts/post.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" placeholder="Título"  class="form-control" value="<?php echo $data['titulo']; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" placeholder="Descrição"  class="form-control"><?php echo $data['descricao']; ?></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>