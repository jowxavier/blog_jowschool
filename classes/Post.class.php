<?php

class Post extends Conexao
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->conectar();
    }

    public function listar()
    {
        // Query que seleciona a tabela
        $query = "SELECT * FROM posts LIMIT 10";

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function gravar(array $data)
    {
        $query = "
            INSERT INTO posts (id_usuario, descricao, titulo)
                VALUES ('".$_SESSION['usuario']['id']."', '".$data['descricao']."', '".$data['titulo']."')
        ";

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function exibirPorId($id = 0)
    {
        // Query que seleciona a tabela
        $query = "SELECT * FROM posts WHERE id = {$id}";

        // Retorna o resultado da query
        $result = $this->conn->query($query);

        // Retorna a linha executada
        return $result->fetch_assoc();
    }

    public function editar(array $data)
    {
        $query = "
            UPDATE posts
                SET descricao = '".$data['descricao']."', titulo = '".$data['titulo']."'
                    WHERE id = ".$data['id']
        ;

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function deletar($id = 0)
    {
        $query = "
            DELETE FROM posts
                WHERE id = ".$id
        ;

        // Retorna o resultado da query
        return $this->conn->query($query);
    }
}
