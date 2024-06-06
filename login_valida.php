<?php
    session_start();

    include("./database/conectar.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query = "
        SELECT * FROM login
        WHERE usuario_login = '$email'
        AND senha_login='$senha'
    ";

    $resultado = $conexao->query($query);
    if ($resultado->num_rows >0 ) {
        $_SESSION["online"] = $email;
        header("location: minhaPagina.php");
    }
    else {
        header("location: login.php");
    }

?>