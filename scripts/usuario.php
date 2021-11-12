<?php
session_start();

// Incluindo Classe de conexão
include('../classes/Conexao.class.php');

// Incluindo Classe de Usuario
include('../classes/Usuario.class.php');

// Cria uma instância da Classe Usuario
$usuario = new Usuario();

if(!empty($_POST['login'])) {

    // Enviar valores para propriedades da classe
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];

    // Acessar método da classe
    $resultado = $usuario->verificaLogin();

    // Não existe dados
    if (empty($resultado)) {
        header('Location: ../index.php');exit();
    }

    // Criia sessão do usuário
    $_SESSION['usuario'] = $resultado;

    header('Location: ../posts.php');exit();
}

if(!empty($_GET['logout'])) {
    unset($_SESSION['usuario']);
    header('Location: ../index.php');exit();
}

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
    if ($usuario->gravar($data)) {
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
    if ($usuario->editar($data)) {
        $alert = 'success';
        $strong = 'Sucesso';
        $message = 'Post alterado.';
    }

    $_SESSION['alert'] = $alert;
    $_SESSION['strong'] = $strong;
    $_SESSION['message'] = $message;

} else {
    if ($_GET['edit']) {
        header("Location: ../editar_usuario.php?id={$_GET['edit']}");
    } else if ($_GET['remove']) {
        // Cria variáveis default
        $alert = 'danger';
        $strong = 'Erro';
        $message = 'Não foi possivel remover o post.';

        // Executando a query
        // Verifica se deletou
        if ($usuario->deletar($_GET['remove'])) {
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
    header('Location: ../usuarios.php');
}