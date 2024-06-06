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
    <title>Home</title>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
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

<img src="imagem/fundo.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>