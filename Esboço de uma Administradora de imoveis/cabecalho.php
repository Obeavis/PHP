<?php header("Content-type: text/html; charset=utf-8"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf=8">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script  type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/sweetalert2@7.0.7/dist/sweetalert2.all.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <title>ADM  PROPERTIES</title>
    <meta name="viewport" content="width=device-width, inital-scale=1">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
                <div class="container">
                    <a class="navbar-brand" href="index.php">Home</a>
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        &#9776;
                    </button>
                    <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                    Adicionar
                                </a>
                                <div class="dropdown-menu" aria-labelledby="Preview">
                                    <a class="dropdown-item" href="adiciona-administradora.php">Administradora</a>
                                    <a class="dropdown-item" href="adiciona-pessoa.php">Pessoa</a>
                                    <a class="dropdown-item" href="adiciona-condominio.php">Condiminio</a>
                                    <a class="dropdown-item" href="adiciona-lote.php">Lote</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="gerenciador.php" class="nav-link">Gerenciar</a></li>
                        </ul>
                        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                            <li class="nav-item order-2 order-md-1"><a href="gerenciador.php" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a>
                            </li>
                            <li class="dropdown order-1">
                                <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right mt-1">
                                    <li class="p-3">
                                        <form class="form" role="form">
                                            <div class="form-group">
                                                <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                            </div>
                                            <div class="form-group">
                                                <input id="passwordInput" placeholder="Senha" class="form-control form-control-sm" type="text" required="">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                            <div class="form-group text-xs-center">
                                                <small><a href="#">Esqueceu a Senha?</a></small>
                                            </div>
                                            <div class="form-group text-xs-center">
                                                <small><a href="#">Criar Usuário</a></small>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<div class="container principal">


<script type="text/javascript">
jQuery(function($){
    $("#telefone").mask("(999) 9999-9999");
    $("#cpf").mask("999.999.999-99");
    $("#nascimento").mask("99/99/9999");
    $("#cnpj").mask("99.999.999/9999-99");
});</script>