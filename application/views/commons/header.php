<html>
	
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-theme.min.css">
		<!-- Custom Styles -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
		<!-- Jquery -->
		<script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
		<!-- Underscore -->
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		<!-- Underscore -->
		<script src="<?=base_url()?>assets/js/underscore.js"></script>
	</head>
	<body>
		<div class="topbar-image">
			<div class="topbar col-md-offset-2 col-md-8">
				<h1 class="title-header">ARGENTINA EN OBRAS</h1>
				<h3 class="subtitle-header">Todas las obras públicas naciones, provinciales y municipales.<h3>
			</div>
		</div>
		<nav class="navbar navbar-default bar-border-radius">
			<div class="container-fluid col-md-8 col-md-offset-2">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?=base_url()?>obras/home">Argentina en obras</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url()?>user/update_form">Mis Datos</a></li>
								<?php if (isset($this->session->all_userdata()['data']->h_id)) { ?>
									<li><a href="<?=base_url()?>obras/create_form">Cargar Obra</a></li>
									<li><a href="<?=base_url()?>obras/mylist">Mis Obras</a></li>
								<?php } ?>
								<li role="separator" class="divider"></li>
								<li><a href="<?=base_url()?>user/logout">Salir</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="col-md-offset-2 col-md-8 page-body">
			<div class="content">