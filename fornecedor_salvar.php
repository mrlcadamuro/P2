<?php
    include("./auth/seguro.php");

    $conexao = new mysqli("127.0.0.1", "root", "", "loja");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $query = "INSERT INTO fornecedores (nome_fornecedor, email_fornecedor, telefone_fornecedor, endereco_fornecedor) 
            VALUES ('$nome', '$email', '$telefone', '$endereco')";

    $conexao->query($query);
    header("location: fornecedor.php");

?>
