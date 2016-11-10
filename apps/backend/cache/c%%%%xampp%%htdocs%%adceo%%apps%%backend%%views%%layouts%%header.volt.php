<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>ADCEO - Backend</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <?= $this->tag->stylesheetLink('public/backend/bootstrap/css/bootstrap.min.css') ?>
        <!-- font Awesome -->
        <?= $this->tag->stylesheetLink('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') ?>
        <!-- Ionicons -->
        <?= $this->tag->stylesheetLink('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') ?>
        <!-- Theme style -->
        <?= $this->tag->stylesheetLink('public/backend/dist/css/AdminLTE.css') ?>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <?= $this->tag->stylesheetLink('public/backend/dist/css/skins/_all-skins.min.css') ?>
        
    </head>
    <body class="sidebar-mini skin-red">
	<!-- header logo: style can be found in header.less -->
	<header class="main-header">
		<!-- Logo -->
		<a href="<?= $this->url->get('admin') ?>" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>ADCEO</b></span> <!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>ADCEO</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
				role="button"> <span class="sr-only">Toggle navigation</span> <span
				class="icon-bar"></span> <span class="icon-bar"></span> <span
				class="icon-bar"></span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
							<img src="<?= $this->url->get('backend/dist/img/avatar3.png') ?>" class="user-image"
							alt="User Image"> 
							<span class="hidden-xs">Alexander Pierce</span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?= $this->url->get('backend/dist/img/avatar3.png') ?>" class="img-circle" alt="User Image">
								<p>Alexander Pierce - Administrador</p>
							</li>
							<!-- Menu Body -->
							<!-- Menu Footer-->
							<li class="user-body">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Perfil</a>
								</div>
								<div class="pull-right">
									<a href="<?= $this->url->get('admin/logout') ?>" class="btn btn-default btn-flat">Logout</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>