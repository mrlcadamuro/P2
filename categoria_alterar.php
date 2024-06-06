<?php

    include("./auth/seguro.php");

    $id = @$_GET['id'];

    $con = new mysqli("127.0.0.1",
                    "root",
                    "",
                    "loja");

    $sql = "SELECT * FROM categorias WHERE id_categoria=$id";
    $rs = $con->query($sql);

    $dados = $rs->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Editar Categoria</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Editar Categoria</h1>
                            </div>

                        <form action="categoria_alterar_salvar.php" method="post" class="user">
                        <input type="hidden" name="id" value="<?php echo $dados["id_categoria"];?>">

                        <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nome" placeholder="Nome" value="<?php echo $dados["nome_categoria"]; ?>">
                                </div>
                        </div>

                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Alterar Categoria"></a>
                            
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>