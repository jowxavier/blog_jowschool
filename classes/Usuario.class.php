<?php

class Usuario extends Conexao
{
    private $conn;
    public $email;
    public $senha;

    public function __construct()
    {
        $this->conn = $this->conectar();
    }

    public function verificaLogin()
    {
        // Query que seleciona a tabela
        $query = "SELECT * FROM usuarios WHERE email = '{$this->email}' AND senha = '{$this->senha}' ";

        // Retorna o resultado da query
        $result = $this->conn->query($query);

        // Retorna a linha executada
        return $result->fetch_assoc();
    }

    public function listar()
    {
        // Query que seleciona a tabela
        $query = "SELECT * FROM usuarios LIMIT 10";

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function gravar(array $data)
    {
        $query = "
            INSERT INTO usuarios (nome, email, senha)
                VALUES ('".$data['nome']."', '".$data['email']."', '".$data['senha']."')
        ";

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function exibirPorId($id = 0)
    {
        // Query que seleciona a tabela
        $query = "SELECT * FROM usuarios WHERE id = {$id}";

        // Retorna o resultado da query
        $result = $this->conn->query($query);

        // Retorna a linha executada
        return $result->fetch_assoc();
    }

    public function editar(array $data)
    {
        $query = "
            UPDATE usuarios
                SET nome = '".$data['nome']."', email = '".$data['email']."'
                    WHERE id = ".$data['id']
        ;

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function deletar($id = 0)
    {
        $query = "
            DELETE FROM usuarios
                WHERE id = ".$id
        ;

        // Retorna o resultado da query
        return $this->conn->query($query);
    }
}
