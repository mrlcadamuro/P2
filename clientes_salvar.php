<?php
    include("./auth/seguro.php");

    $conexao = new mysqli("127.0.0.1", "root", "", "loja");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $query = "INSERT INTO clientes (nome_cliente, email_cliente, telefone_cliente, endereco_cliente) 
            VALUES ('$nome', '$email', '$telefone', '$endereco')";

    $conexao->query($query);
    header("location: clientes.php");

?>
