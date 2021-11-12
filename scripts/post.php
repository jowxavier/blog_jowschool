<?php
session_start();

// Incluindo Classe de conexão
include('../classes/Conexao.class.php');

// Incluindo Classe de Post
include('../classes/Post.class.php');

// Cria uma instância da Classe Post
$post = new Post();

// Verifica se existe sessão
if (empty($_SESSION['usuario'])) {
    header('Location: ../index.php');exit();
}

if ($_POST && empty($_POST['id'])) {
    // Recebe dados
    $data = $_POST;

    // Cria variáveis default
    $alert = 'danger';
    $strong = 'Erro';
    $message = 'Não foi possivel cadastrar o post.';

    // Acessa o método gravar de post
    // Verifica se cadastrou
    if ($post->gravar($data)) {
        $alert = 'success';
        $strong = 'Sucesso';
        $message = 'Post cadastrado.';
    }

    $_SESSION['alert'] = $alert;
    $_SESSION['strong'] = $strong;
    $_SESSION['message'] = $message;
} else if ($_POST['id']) {
    // Recebe dados
    $data = $_POST;

    // Cria variáveis default
    $alert = 'danger';
    $strong = 'Erro';
    $message = 'Não foi possivel alterar o post.';

    // Executando a query
    // Verifica se alterou
    if ($post->editar($data)) {
        $alert = 'success';
        $strong = 'Sucesso';
        $message = 'Post alterado.';
    }

    $_SESSION['alert'] = $alert;
    $_SESSION['strong'] = $strong;
    $_SESSION['message'] = $message;

} else {
    if ($_GET['edit']) {
        header("Location: ../editar_post.php?id={$_GET['edit']}");
    } else if ($_GET['remove']) {
        // Cria variáveis default
        $alert = 'danger';
        $strong = 'Erro';
        $message = 'Não foi possivel remover o post.';

        // Executando a query
        // Verifica se deletou
        if ($post->deletar($_GET['remove'])) {
            $alert = 'success';
            $strong = 'Sucesso';
            $message = 'Post removido.';
        }

        $_SESSION['alert'] = $alert;
        $_SESSION['strong'] = $strong;
        $_SESSION['message'] = $message;
    }
}

if (!$_GET['edit']) {
    header('Location: ../posts.php');
}