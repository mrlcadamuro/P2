<?php
    include("./auth/seguro.php");

    $id = @$_POST["id"];
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $salario = $_POST["salario"];
    $data = $_POST["data"];

    $con = new mysqli("127.0.0.1",
                    "root",
                    "",
                    "loja");

    $sql = "UPDATE funcionarios
               SET nome_funcionario='$nome',
                   cargo_funcionario='$cargo',
                   email_funcionario='$email',
                   telefone_funcionario='$telefone',
                   endereco_funcionario='$endereco',
                   salario_funcionario='$salario',
                   data_contratacao_funcionario='$data'

             WHERE id_funcionario = $id";

    $con->query($sql);
    header("location: minhaPagina.php");
?>  