<?php
    include("./auth/seguro.php");

    $conexao = new mysqli("127.0.0.1", "root", "", "loja");

    $nome = $_POST["nome"];  
    $descricao = $_POST["descricao"];   
    $preco = $_POST["preco"];   
    $estoque = $_POST["estoque"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];


    $query = "INSERT INTO produtos (nome_produto, descricao_produto, preco_produto, estoque_produto, id_categoria, id_marca)
            VALUES ('$nome', '$descricao', '$preco', '$estoque', '$categoria', '$marca')";

    $conexao->query($query);
    header("location: produto.php");
    

?>
