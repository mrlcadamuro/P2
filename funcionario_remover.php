<?php
    include("./auth/seguro.php");

    $id = @$_GET['id'];

    $con = new mysqli("127.0.0.1",
                    "root",
                    "",
                    "loja");

    $sql = "DELETE FROM funcionarios WHERE id_funcionario=$id";
    $rs = $con->query($sql);
    header("location: funcionario.php")

?>