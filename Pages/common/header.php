<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clean URLs Demo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- LOAD BOOTSTRAP STYLESHEET IF YOU'RE USING IT -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- LOAD YOUR CUSTOM STYLESHEET(S) HERE -->
		<!-- $serverPath is set in index.php as $_SERVER["HTTP_HOST"] -->
    <link rel="stylesheet" href="<?php $serverPath?>/css/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target="#mainNav">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase align-self-center" href="/">Clean URLs Demo</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
          	</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pt-1">
                    <li class="nav-item">
                        <a class="nav-link d-inline-block text-uppercase" href="page1">Page 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-inline-block text-uppercase" href="page2">Page 2</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>