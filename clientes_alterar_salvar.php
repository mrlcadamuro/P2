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

    $sql = "UPDATE clientes
               SET nome_cliente='$nome',
                   email_cliente='$email',
                   telefone_cliente='$telefone',
                   endereco_cliente='$endereco'
             WHERE id_cliente = $id";

    $con->query($sql);
    header("location: clientes.php");
?>  