<?php
    include("./auth/seguro.php");

    $id = @$_GET['id'];

    $con = new mysqli("127.0.0.1",
                    "root",
                    "",
                    "loja");

    $sql = "DELETE FROM produtos WHERE id_produto=$id";
    $rs = $con->query($sql);
    header("location: produto.php")

?>