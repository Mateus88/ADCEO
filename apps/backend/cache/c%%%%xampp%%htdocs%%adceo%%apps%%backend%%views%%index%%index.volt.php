<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>ADCEO - Backend</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Custom CSS -->
        <?= $this->tag->stylesheetLink('public/css/custom.css') ?>
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
         <!-- DataTables -->
         <?= $this->tag->stylesheetLink('public/backend/plugins/datatables/dataTables.bootstrap.css') ?>
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
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar" style="height: auto;">
			<ul class="sidebar-menu">
				<li class="header">FUNCIONALIDADES </li>
				<li class="treeview">
					<a href="#"> 
						<i class="fa fa-university"></i> 
						<span>Institucional</span> 
						<span class="pull-right-container"> 
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li>
							<a href="<?= $this->url->get('admin/institucional/club') ?>">
								<i class="fa fa-circle-o"></i>
									Clube
							</a>
						</li>
						<li>
							<a href="../../index.html">
								<i class="fa fa-circle-o"></i>
									Missão
							</a>
						</li>
						<li>
							<a href="../../index.html">
								<i class="fa fa-circle-o"></i>
									Estatutos
							</a>
						</li>
						<li>
							<a href="../../index.html">
								<i class="fa fa-circle-o"></i>
									Missão
							</a>
						</li>
						<li>
							<a href="../../index.html">
								<i class="fa fa-circle-o"></i>
									Orgão Sociais
							</a>
						</li>
						<li>
							<a href="../../index.html">
								<i class="fa fa-circle-o"></i>
									Contactos
							</a>
						</li>
						<li>
							<a href="../../index.html">
								<i class="fa fa-circle-o"></i>
									Horários
							</a>
						</li>
						<li>
							<a href="../../index.html">
								<i class="fa fa-circle-o"></i>
									Prémios e distinções
							</a>
						</li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#"> 
						<i class="fa fa fa-calendar-o"></i> 
						<span>Agenda</span> 
						<span class="pull-right-container"> 
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li>
							<a href="../../index.html">
								<i class="fa fa fa-calendar-o"></i>
									Calendário
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-futbol-o"></i> Jogos
								<span class="pull-right-container"> 
									<i class="fa fa-angle-left pull-right"></i>
								</span> 
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="#"><i class="fa fa-plus"></i> Novo jogo</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-list"></i> Listar jogos</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="../../documentation/index.html"> 
						<i class="fa fa-users"></i> 
						<span>Sócios</span>
					</a>
				</li>
				<li>
					<a href="../../documentation/index.html"> 
						<i class="fa fa-graduation-cap"></i> 
						<span>E-escola</span>
					</a>
				</li>
				<li>
					<a href="../../documentation/index.html"> 
						<i class="fa fa-book"></i> 
						<span>Loja</span>
					</a>
				</li>
				<li>
					<a href="../../documentation/index.html"> 
						<i class="fa fa-book"></i> 
						<span>Campos de férias</span>
					</a>
				</li>
				<li>
					<a href="../../documentation/index.html"> 
						<i class="fa fa-book"></i> 
						<span>Festas</span>
					</a>
				</li>
				<li>
					<a href="../../documentation/index.html"> 
						<i class="fa fa-book"></i> 
						<span>Pratocionadores</span>
					</a>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

<div class="content-wrapper" style="min-height: 1101px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Blank page <small>it all starts here</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">Blank page</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Title</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool"
						data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"
						data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			<div class="box-body">Start creating your amazing application!
			</div>
			<!-- /.box-body -->
			<div class="box-footer">Footer</div>
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->
	</section>
	<!-- /.content -->
</div>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.3.7
		</div>
		<strong>Copyright © 2014-2016 <a href="#">ADCEO</a>.</strong> Todos os direitos reservados.
  	</footer>
		<!-- jQuery 2.2.3 -->
		<?= $this->tag->javascriptInclude('backend/plugins/jQuery/jquery-2.2.3.min.js') ?>
		<!-- Bootstrap 3.3.6 -->
		<?= $this->tag->javascriptInclude('backend/bootstrap/js/bootstrap.min.js') ?>
		<!-- SlimScroll -->
		<?= $this->tag->javascriptInclude('backend/plugins/slimScroll/jquery.slimscroll.min.js') ?>
		<!-- FastClick -->
		<?= $this->tag->javascriptInclude('backend/plugins/fastclick/fastclick.js') ?>
		<!-- AdminLTE App -->
		<?= $this->tag->javascriptInclude('backend/dist/js/app.js') ?>
		<!-- AdminLTE for demo purposes -->
		<?= $this->tag->javascriptInclude('backend/dist/js/demo.js') ?>
		<!-- DataTables -->
		<?= $this->tag->javascriptInclude('backend/plugins/datatables/jquery.dataTables.min.js') ?>
		<?= $this->tag->javascriptInclude('backend/plugins/datatables/dataTables.bootstrap.min.js') ?>
		
		<script type="text/javascript">
			//Flash messages
			$(".alert").slideUp(8000, function() {
			    $(this).remove();
			});
		</script>
		
		<script>
		  $(function () {
		    $("#example1").DataTable();
		    $('#example2').DataTable({
		      "paging": true,
		      "lengthChange": false,
		      "searching": false,
		      "ordering": true,
		      "info": true,
		      "autoWidth": false
		    });
		  });
		</script>

    </body>
</html>