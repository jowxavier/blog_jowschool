<?php

class Conexao
{
    protected $servername = "mysql";
    protected $username = "root";
    protected $password = "xavier";
    protected $table = "blog";

    public function conectar()
    {
        // Cria a conexão
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->table);

        // Verifica se conexão tem erro
        if ($conn->connect_error) {
            return "Connection failed: {$conn->connect_error}";
        }

        return $conn;
    }
}
