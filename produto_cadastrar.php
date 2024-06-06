<?php
    include("./auth/seguro.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastrar Produto</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Cadastro de Produto</h1>
                            </div>

                        <form method="post" action="produto_salvar.php" class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text"  name="nome" class="form-control form-control-user" placeholder="Nome">
                            </div>
                                    
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="descricao" placeholder="Descricao">
                            </div>
                            </div>

                            <div class="form-group">
                                    <select name="categoria" class="form-control form-control-user">
                                        <option value="">Selecione uma Categoria</option>
                                        <?php
                                            $conexao = new mysqli('127.0.0.1', 'root', '', 'loja');
                                            if ($conexao->connect_error) {
                                                die("Conexão falhou: " . $conexao->connect_error);
                                            }
                                            $sql = "SELECT id_categoria, nome_categoria FROM categorias";
                                            $resultado = $conexao->query($sql);
                                            if ($resultado->num_rows > 0) {
                                                while($row = $resultado->fetch_assoc()) {
                                                    echo '<option value="' . $row["id_categoria"] . '">' . $row["nome_categoria"] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="">Nenhuma categoria encontrada</option>';
                                            }
                                            $conexao->close();
                                        ?>
                                    </select>
                                </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="estoque" placeholder="Estoque">
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="preco" placeholder="Preço">
                            </div>
                            </div>

                            <div class="form-group">
                            <select name="marca" class="form-control form-control-user">
                                        <option value="">Selecione uma Marca</option>
                                        <?php
                                            $conexao = new mysqli('127.0.0.1', 'root', '', 'loja');
                                            if ($conexao->connect_error) {
                                                die("Conexão falhou: " . $conexao->connect_error);
                                            }
                                            $sql = "SELECT id_marca, nome_marca FROM marcas";
                                            $resultado = $conexao->query($sql);
                                            if ($resultado->num_rows > 0) {
                                                while($row = $resultado->fetch_assoc()) {
                                                    echo '<option value="' . $row["id_marca"] . '">' . $row["nome_marca"] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="">Nenhuma marca encontrada</option>';
                                            }
                                            $conexao->close();
                                           ?>
                                    </select>
                                </div>

                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Cadastrar Produto"></a>
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