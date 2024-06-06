<?php
    include("./auth/seguro.php");

    $conexao = new mysqli("127.0.0.1", "root", "", "loja");

    $nome = $_POST["nome"];

    $query = "INSERT INTO marcas (nome_marca)
            VALUES ('$nome')";

    $conexao->query($query);
    header("location: marca.php");
    

?>
