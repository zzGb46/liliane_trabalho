<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Lliliane | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Liliane | Dashboard">
    <meta name="author" content="Miguel">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


    <link rel="stylesheet" href="http://localhost/liliane/public/vendors/dash/css/adminlte.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
 


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/liliane/public/vendors/dash/css/adminlte.css">
</head>

<body class="layout-fixed sidebar-expand-lg ">
    <div class="app-wrapper">

        <!-- Cabecalho  -->
        <nav class="app-header navbar navbar-expand">

            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block"> <a href="<?php BASE_URL; ?>" class="nav-link">Administrativo liliane</a> </li>
                </ul>

                <ul class="navbar-nav ms-auto">



                    <li class="nav-item">
                        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="<?php
                                        $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/liliane/public/uploads/" . $prof['foto_professor'];

                                        if ($prof['foto_professor'] != "") {
                                            if (file_exists($caminhoArquivo)) {
                                                echo ("http://localhost/liliane/public/uploads/" . htmlspecialchars($prof['foto_professor'], ENT_QUOTES, 'UTF-8'));
                                            } else {
                                                echo ("http://localhost/liliane/public/uploads/sem-foto-professor.png");
                                            }
                                        } else {
                                            echo ("http://localhost/liliane/public/uploads/sem-foto-professor.png");
                                        }
                                        ?>" class="user-image rounded-circle shadow" alt="<?php echo $prof['nome_professor']; ?>">
                            <span class="d-none d-md-inline"><?php echo $prof['nome_professor']; ?></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <li class="user-header "> <img src="<?php
                                                                                $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/liliane/public/uploads/" . $prof['foto_professor'];

                                                                                if ($prof['foto_professor'] != "") {
                                                                                    if (file_exists($caminhoArquivo)) {
                                                                                        echo ("http://localhost/liliane/public/uploads/" . htmlspecialchars($prof['foto_professor'], ENT_QUOTES, 'UTF-8'));
                                                                                    } else {
                                                                                        echo ("http://localhost/liliane/public/uploads/sem-foto-servico.png");
                                                                                    }
                                                                                } else {
                                                                                    echo ("http://localhost/liliane/public/uploads/sem-foto-servico.png");
                                                                                }
                                                                                ?>" class="user-image rounded-circle shadow" alt="<?php echo $prof['nome_professor']; ?>">
                                <p>
                                    <?php echo $prof['nome_professor'] . " - " . " Professor" ?>
                                    <small><?php echo $prof['cidade_professor'] . " - " . $prof['telefone_professor']; ?></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <a href="<?php BASE_URL; ?>" class="btn btn-default btn-flat" style="  background-color: #9A5C1F;color:white;" >Perfil</a>
                                <a href="http://localhost/liliane/public/auth/sair" class="btn btn-default btn-flat float-end" style="  background-color: #9A5C1F;color:white;">Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>

        <!-- MENU LATERAL -->
        <aside class="app-sidebar  shadow" >

            <div class="sidebar-brand">
                <a href="./index.html" class="brand-link">
                    <img src="http://localhost/liliane/public/assets/img/logp.white.png" alt="liliane Logo" class="brand-image opacity-75 logo-liliane">
                </a>
            </div>

            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                        <!-- Dashboard Principal -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-speedometer2"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Gestão de Serviços -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-gear"></i>
                                <p>
                                    Gestão de Serviços
                                    <i class="bi bi-chevron-down float-end"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bi bi-calendar-check nav-icon"></i>
                                        <p>Agendamento</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://localhost/liliane/public/dash/servico/listar" class="nav-link">
                                        <i class="bi bi-tools nav-icon"></i>
                                        <p>Serviços</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bi bi-star nav-icon"></i>
                                        <p>Especialidade</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Gestão de Clientes -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-people"></i>
                                <p>
                                    Gestão de Clientes
                                    <i class="bi bi-chevron-down float-end"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bi bi-person nav-icon"></i>
                                        <p>Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bi bi-car-front nav-icon"></i>
                                        <p>Veículos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Gestão de Recursos Humanos -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-briefcase"></i>
                                <p>
                                    Recursos Humanos
                                    <i class="bi bi-chevron-down float-end"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bi bi-person-badge nav-icon"></i>
                                        <p>profionários</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Gestão de Fornecedores -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-truck"></i>
                                <p>
                                    Fornecedores
                                    <i class="bi bi-chevron-down float-end"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bi bi-box-seam nav-icon"></i>
                                        <p>Fornecedores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bi bi-box-seam nav-icon"></i>
                                        <p>Peças</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Separador para o Site -->
                        <li class="nav-header">SITE</li>

                        <!-- Recursos do Site -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-chat-left-text"></i>
                                <p>Depoimentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-image"></i>
                                <p>Banners</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-envelope"></i>
                                <p>Contato</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-images"></i>
                                <p>Galeria</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-tags"></i>
                                <p>Marcas</p>
                            </a>
                        </li>

                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div>



        </aside>

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-primary">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>New Orders</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"></path>
                                </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i> </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-success">
                                <div class="inner">
                                    <h3>53<sup class="fs-5">%</sup></h3>
                                    <p>Bounce Rate</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                                </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i> </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-warning">
                                <div class="inner">
                                    <h3>44</h3>
                                    <p>User Registrations</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                                </svg> <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i> </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-danger">
                                <div class="inner">
                                    <h3>65</h3>
                                    <p>Unique Visitors</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                                </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i> </a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <!-- Conteúdo -->
                        <?php

                        if (isset($conteudo)) {
                            $this->carregarViews($conteudo, $dados);
                        } else {
                            echo ' <h2> Bem-vindo ao Dashboard! </h2>';
                        }


                        ?>
                    </div>

                </div>
            </div>

        </main>

        <!-- RODAPE -->
        <footer class="app-footer py-4" style="  background: #F3C105;">
            <div class="container">
                <div class="row">
                    <!-- Seção de Informações da Empresa -->
                    <div class="col-md-4">
                        <h5>Lashion gold</h5>
                        <p>Oferecemos serviços automotivos de excelência para garantir a segurança e satisfação do seu veículo.</p>
                    </div>

                    <!-- Seção de Links Úteis -->
                    <div class="col-md-4">
                        <h5>Menu</h5>
                        <ul class="list-unstyled">
                            <li><a href="/" class="text-black text-decoration-none">Início</a></li>
                            <li><a href="/servicos" class="text-black text-decoration-none">Serviços</a></li>
                            <li><a href="/sobre" class="text-black text-decoration-none">Sobre Nós</a></li>
                            <li><a href="/contato" class="text-black text-decoration-none">Contato</a></li>
                        </ul>
                    </div>

                    <!-- Seção de Contato -->
                    <div class="col-md-4">
                        <h5>Contato</h5>
                        <p><i class="fas fa-map-marker-alt"></i> Rua Exemplo, 123, Cidade, Estado</p>
                        <p><i class="fas fa-phone-alt"></i> (11) 1234-5678</p>
                        <p><i class="fas fa-envelope"></i> contato@lashiongold.com.br</p>
                    </div>
                </div>
                <hr class="bg-secondary">
                <div class="row">
                    <div class="col-md-6">
                        <strong>&copy; 2014-2024 Lashion Gold.</strong> Todos os direitos reservados.
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="social-icons">
                            <a href="https://facebook.com/kioficina" class="text-white me-2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://instagram.com/kioficina" class="text-white me-2" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com/company/kioficina" class="text-white" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script src="http://localhost/liliane/public/vendors/dash/js/adminlte.js"></script>










</body>


</html>