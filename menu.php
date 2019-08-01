<?php// header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="imagem/favicon.ico">       
    <title>Lab. Solos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script defer src="js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-success">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a class="navbar-brand" href="#">Laboratório de Solos</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <img class="fas fa-user"  width="20" height="20"> &nbsp;<span class="d-none d-sm-inline"><?=$_SESSION['nome']?> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="sair.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </div>
                </li>
            </ul>                
        </div>
    </nav>
    <div class="row container-fluid mr-auto">
        <div>

            <div class="d-flex">
                <nav class="sidebar">
                    <ul class="list-unstyled">
                        <li><a href="geramostras.php"><i class="fas fa-tachometer-alt"></i> Administrativo</a></li>
                            <li>
                            <a href="#submenu6" data-toggle="collapse">
                                <i class="fas fa-user"></i> Amostras </a>
                                <ul class="list-unstyled collapse" id="submenu6" >
                                     <li><a href="form_amostras.php"><i class="fas fa-plus-square"></i> Inserir Nova</a></li>
                                    <li><a href="geramostras.php"><i class="fas fa-flask"></i> Listar Amostras</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#submenu1" data-toggle="collapse">
                                    <i class="fas fa-id-badge"></i> Funcionários </a>
                                    <ul id="submenu1" class="list-unstyled collapse">
                                         <li><a href="form_funcionarios.php"><i class="fas fa-user-plus"></i> Inserir Novo</a></li>
                                        <li><a href="gerfuncionarios.php"><i class="fas fa-users"></i> Listar Funcionários</a></li>
                                       
                                    </ul>
                                </li>



                                <li>
                                    <a href="#submenu2" data-toggle="collapse">
                                        <i class="fas fa-user"></i> Clientes </a>
                                        <ul id="submenu2" class="list-unstyled collapse">
                                             <li><a href="form_cliente.php"><i class="fas fa-user-plus"></i> Inserir Novo</a></li>
                                            <li><a href="gerclientes.php"><i class="fas fa-users"></i> Listar Clientes</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#submenu3" data-toggle="collapse">
                                            <i class="fas fa-map-marker-alt"></i> Endereços </a>
                                            <ul id="submenu3" class="list-unstyled collapse">
                                                 <li><a href="form_endereco.php"><i class="fas fa-plus-square"></i> Inserir Novo</a></li>
                                                <li><a href="gerendereco.php"><i class="fas fa-map-marker-alt"></i> Listar Endereços</a></li>
                                               
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#submenu4" data-toggle="collapse">
                                                <i class="fas fa-address-card"></i> Tipos de Funcionários </a>
                                                <ul id="submenu4" class="list-unstyled collapse">
                                                     <li><a href="form_categorias.php"><i class="fas fa-plus-square"></i> Inserir Nova</a></li>
                                                    <li><a href="gercategorias.php"><i class="fas fa-address-card"></i> Listar Categorias</a></li>
                                                   
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#submenu5" data-toggle="collapse">
                                                    <i class="fab fa-searchengin"></i> Tipos de Análises </a>
                                                    <ul id="submenu5" class="list-unstyled collapse">
                                                        <li><a href="form_tipo_analise.php"><i class="fas fa-plus-square"></i> Inserir Nova</a></li>
                                                        <li><a href="gertipoanalise.php"><i class="fab fa-searchengin"></i> Tipos de Análises</a></li>
                                                        
                                                    </ul>
                                                </li>



                                                <li>
                                                    <a href="#submenu7" data-toggle="collapse">
                                                        <i class="far fa-check-circle"></i> Resultados das Análises </a>
                                                        <ul id="submenu7" class="list-unstyled collapse">
                                                           
                                                            <li><a href="form_resultado.php"><i class="fas fa-plus-square"></i> Inserir Novo</a></li>
                                                             <li><a href="gerresultados.php"><i class="far fa-check-circle"></i> Listar Resultados</a></li>
                                                        </ul>
                                                    </li>

                                                    <li>
                                                        <a href="#submenu8" data-toggle="collapse">
                                                            <i class="fas fa-hourglass-half"></i> Situação da Análise </a>
                                                            <ul id="submenu8" class="list-unstyled collapse">
                                                                <li><a href="form_situacao.php"><i class="fas fa-plus-square"></i> Inserir Nova</a></li>
                                                                <li><a href="gersituacao.php"><i class="fas fa-hourglass-half"></i> Listar Situação</a></li>
                                                                
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </nav>
                                            </div>
                                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                                            <script src="js/dashboard.js"></script>
                                        </div>
                                        <div class="content px-2">
