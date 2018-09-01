<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
    Hcode Store by hcode.com.br
-->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Para quem quer ter uma alimentação saudável e rápida e solcução ideal são os nossos lanches e refeições.">
    <meta name="keywords" content="sabor, saúde, coxinha, sucos, lanche, saudável, sem óleo, sem fritura, recife, antigo">
    <meta name="author" content="David Ferreira f.david.cunha@gmail.com">

    <title>Sabor & Saúde - Comida saudável</title>
    <link rel="shortcut icon" href="/res/site/img/favico.ico">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Styles -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/res/site/css/bootstrap.min.css">
    <link rel="stylesheet" href="/res/site/css/cake-factory-bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/res/site/css/font-awesome.min.css">
    <link rel="stylesheet" href="/res/site/css/cake-factory-font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/res/site/css/owl.carousel.css">
    <link rel="stylesheet" href="/res/site/css/style.css">
    <link rel="stylesheet" href="/res/site/css/cake-factory-style.css">
    <link rel="stylesheet" href="/res/site/css/responsive.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" href="/res/site/css/settings.css">     
    <!-- FlexSlider Css -->
    <link rel="stylesheet" href="/res/site/css/flexslider.css" media="screen" />
    <!-- Portfolio CSS -->
    <link rel="stylesheet" href="/res/site/css/prettyPhoto.css">
    <!-- Custom Less -->
    <link rel="stylesheet" href="/res/site/css/less-style.css">   
    <!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Variável global utilizada no footer -->
    <script type="text/javascript">
        window.scripts = [];
    </script>

  </head>
  <body>
   
    <!-- Page Wrapper -->
    <div class="wrapper">
    
        <!-- End header area -->
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                            <ul>
                                
                                <li>
                                    <a href="/profile">
                                        <i class="fa fa-user"></i> Minha Conta
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i> Lista de Desejos
                                    </a>
                                </li>
                                
                                <?php if( checkLogin(false) ){ ?>
                                <li>
                                    <a href="/profile">
                                        <i class="fa fa-user"></i> <?php echo getUserName(); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="/logout">
                                        <i class="fa fa-close"></i> Sair
                                    </a>
                                </li>
                                <?php }else{ ?>
                                <li>
                                    <a href="/login">
                                        <i class="fa fa-lock"></i> Login
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="header-right">
                            
                            <ul class="list-unstyled list-inline">
                                
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">
                                        <span class="key">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                        <span class="value">Real - BR</span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Real - BR</a>
                                        </li>
                                        <!--<li><a href="#">USD</a></li>-->
                                    </ul>
                                </li>

                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">
                                        <span class="key">
                                            <i class="fa fa-language" aria-hidden="true"></i>
                                        </span>
                                        <span class="value">Português</span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Português</a></li>
                                        <!--<li><a href="#">Inglês</a></li>
                                        <li><a href="#">Espanhol</a></li>-->
                                    </ul>
                                    <li>
                                        <a href="/admin">
                                            <i class="fa fa-lock"></i> Admin
                                        </a>
                                    </li>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
        <!-- End header area -->
        
       
        <div class="mainmenu-area">
            <div class="container">
                
                <div class="row">
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 

                    <div class="col-md-8">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="#">Cardápio</a>
                                </li>
                                <li>
                                    <a href="#">Promoções</a>
                                </li>
                                <li>
                                    <a href="#">Sobre nós</a>
                                </li>
                            </ul>
                        </div>  
                    </div>

                    <div class="col-md-4">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="/cart">
                                        <i class="fa fa-shopping-cart"></i> 
                                        <span>Carrinho - </span>
                                        <span class="cart-amunt">R$ <?php echo getCartVlSubTotal(); ?></span> 
                                        <span class="product-count"><?php echo getCartNrQtd(); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div> <!-- End mainmenu area -->
