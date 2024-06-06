<?php
    include("./auth/seguro.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <title>Funcionários</title>
</head>
<body id="page-top">

    <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="minhaPagina.php">
            
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
            <div class="sidebar-brand-text mx-3">Trabalho Escobar</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="minhaPagina.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Pagina Inicial</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Tabelas
        </div>


        <li class="nav-item">
        <a class="nav-link collapsed" href="clientes.php" data-toggle="collapse">
            <i class="fas fa-fw fa-cog"></i>
            <span>Clientes</span>
        </a>     
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="funcionario.php" data-toggle="collapse">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Funcionários</span>
        </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="fornecedor.php" data-toggle="collapse">
                <i class="fas fa-fw fa-folder"></i>
                <span>Fornecedores</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="categoria.php" data-toggle="collapse">
                <i class="fas fa-fw fa-folder"></i>
                <span>Categorias</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="produto.php" data-toggle="collapse">
                <i class="fas fa-fw fa-folder"></i>
                <span>Produtos</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="marca.php" data-toggle="collapse">
                <i class="fas fa-fw fa-folder"></i>
                <span>Marcas</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            </div>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
</ul>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>

    <div id="content-wrapper" class="d-flex flex-column">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Central</h6>   
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            <a href="funcionario_cadastrar.php">
                                <input type="submit" value="Cadastrar Funcionário" class="btn btn-primary btn-user btn-block">
                            </a> 

                            <hr>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Cargo</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Endereco</th>
                                            <th>Salário</th>
                                            <th>Data da Contratação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php

        $conexao = new mysqli('127.0.0.1', 'root', '', 'loja');
        $sql = "SELECT * FROM funcionarios";
        $resultado = $conexao -> query($sql);
        while ($dados = $resultado -> fetch_assoc()) {
            echo 
            "<tr>
                <td>" .$dados["id_funcionario"]. "</td>
                <td>" .$dados['nome_funcionario']. "</td>
                <td>" .$dados['cargo_funcionario']. "</td>
                <td>" .$dados['email_funcionario']. "</td>
                <td>" .$dados['telefone_funcionario']. "</td>
                <td>" .$dados['endereco_funcionario']. "</td>
                <td>" .$dados['salario_funcionario']. "</td>
                <td>" .$dados['data_contratacao_funcionario']. "</td>
                <td><a href='funcionario_alterar.php?id=" . $dados["id_funcionario"] . "' style='text-decoration:none' class='btn btn-dark'>Editar</a></td>
                <td><a href='funcionario_remover.php?id=". $dados["id_funcionario"].  "' style='text-decoration:none' class='btn btn-danger'>Remover</a>
                </td>
            </tr>";
        }

?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</body>
</html>