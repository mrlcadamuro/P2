<?php
    include("./auth/seguro.php");

    $id = @$_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];


    $con = new mysqli("127.0.0.1",
                    "root",
                    "",
                    "loja");

    $sql = "UPDATE fornecedores
               SET nome_fornecedor='$nome',
                   email_fornecedor='$email',
                   telefone_fornecedor='$telefone',
                   endereco_fornecedor='$endereco'
             WHERE id_fornecedor = $id";

    $con->query($sql);
    header("location: fornecedor.php");
?>  