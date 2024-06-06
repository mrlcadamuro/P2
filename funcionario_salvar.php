<?php
    include("./auth/seguro.php");

    $conexao = new mysqli("127.0.0.1", "root", "", "loja");

    $nome = $_POST["nome"];
    $cargo =$_POST["cargo"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $salario = $_POST["salario"];
    $data = $_POST["data"];

    $query = "INSERT INTO funcionarios (nome_funcionario, cargo_funcionario, email_funcionario, telefone_funcionario, endereco_funcionario, salario_funcionario, data_contratacao_funcionario) 
            VALUES ('$nome', '$cargo', '$email', '$telefone', '$endereco', '$salario', '$data')";

    $conexao->query($query);
    header("location: funcionario.php");
    

?>
