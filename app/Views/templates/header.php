<!DOCTYPE html>

<html lang="pt-br" class="no-js">

<head>
    <!-- Basic need -->
    <title>Mega Filmes</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='/assets/fonts.googleapis.com/css470f.css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
    <!--preloading-->
    <!-- <div id="preloader">
        <img class="logo" src="/assets/images/logo1.png" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div> -->
    <!--end of preloading-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Barra de Navegação</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="/ListaFilmes/home"><img class="logo" src="/assets/images/logo1.png" alt="" width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" href="/ListaFilmes/home">
                                Inicio
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        <li class="btn signupLink">
                        <a onclick="mostrarForm()">Adicionar Filme</a>
                        <div id="formCadastro" hidden> 
                            <form method="POST" action="/ListaFilmes/CriarFilme">
                                <input type="text" id="Nome" name="Nome"> 
                                <input type="text" id="Ano" name="Ano"> 
                                <input type="text" id="Nota" name="Nota">
                                <input type="submit">
                            </form>
                        </div>

                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->
            <div class="top-search">
                <select>
                    <option value="united">TV show</option>
                    <option value="saab">Outros</option>
                </select>
                <input type="text" placeholder="Procure por um filme, Série ou Seriado !">
            </div>
        </div>
    </header>
    <!-- END | Header -->

    <script>
 
    function mostrarForm(){
        $("#formCadastro").slideToggle();
    }

    </script>