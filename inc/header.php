<?php
session_start();
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>CGLTelecom</title>
    <link href="<?php echo BASEURL ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASEURL ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo BASEURL ?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/icones/eye-solid.svg" /> <!-- Ícone a ser apresentado na aba do site -->
</head>

<body style="background-color: white;">

    <div class="cabecalho">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-1 border-bottom">
            <a href="<?php echo BASEURL ?>index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4"><img src="<?php echo BASEURL ?>img/logo.png" alt="" height="50px"></span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="<?php echo BASEURL ?>clientes/frm_cadastro.php" class="nav-link text-dark hover-overlay">Cadastro</a></li>
                <?php
                if (isset($_SESSION['usuarioNome'])) {
                ?>
                    <li class="nav-item"><a href="<?php echo BASEURL ?>sair.php" class="btn btn-outline-danger" aria-current="page">Sair</a></li>
                <?php
                } else {
                ?>

                    <li class="nav-item"><a href="<?php echo BASEURL ?>login.php" class="btn btn-outline-danger" aria-current="page">Login</a></li>

                <?php
                }
                ?>


            </ul>
        </header>
    </div>

    <!-- Área de navegação -->
    <ul class="topnav">
        <li><a href="<?php echo BASEURL ?>index.php">Home</a></li>
        <li><a href="#">Produtos e Serviços</a></li>
        <li><a href="#">Suporte Técnico</a></li>
        <?php
        if (isset($_SESSION['usuarioNome'])) {
        ?>
            <li><a href="<?php echo BASEURL ?>clientes/selecao.php">Seleção</a></li>
        <?php
        }
        ?>

        <li><a href="<?php echo BASEURL ?>inc/sobre.php">Sobre</a></li>
    </ul>