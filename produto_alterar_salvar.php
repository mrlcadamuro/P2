<?php
    include("./auth/seguro.php");

    $conexao = new mysqli("127.0.0.1", "root", "", "loja");

    $id = @$_POST["id"];
    $nome = $_POST["nome"];  
    $descricao = $_POST["descricao"];   
    $preco = $_POST["preco"];   
    $estoque = $_POST["estoque"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];

    $query = "UPDATE produtos SET nome_produto='$nome',
                            descricao_produto='$descricao',
                            preco_produto='$preco',
                            estoque_produto='$estoque',
                            id_categoria='$categoria',
                            id_marca='$marca'

                            WHERE id_produto = $id";

    $conexao->query($query);
    header("location: produto.php");
    

?>
