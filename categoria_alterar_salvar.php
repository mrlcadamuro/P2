<?php
    $id = @$_POST["id"];
    $nome = $_POST["nome"];


    $con = new mysqli("127.0.0.1",
                    "root",
                    "",
                    "loja");

    $sql = "UPDATE categorias SET nome_categoria='$nome'  WHERE id_categoria = $id";

    $con->query($sql);  
    header("location: categoria.php");
?>  