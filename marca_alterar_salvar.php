<?php
    include("./auth/seguro.php");

    $id = @$_POST["id"];
    $nome = $_POST["nome"];


    $con = new mysqli("127.0.0.1",
                    "root",
                    "",
                    "loja");

    $sql = "UPDATE marcas SET nome_marca='$nome'  WHERE id_marca = $id";

    $con->query($sql);  
    header("location: marca.php");
?>  