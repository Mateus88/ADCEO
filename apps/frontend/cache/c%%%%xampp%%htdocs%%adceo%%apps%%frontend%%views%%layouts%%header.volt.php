<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		    <title>ADCEO</title>
			   <?= $this->tag->stylesheetLink('public/css/bootstrap.css') ?>
			   <?= $this->tag->stylesheetLink('public/css/bootstrap-theme.css') ?>
			   <?= $this->tag->stylesheetLink('public/css/custom.css') ?>
			   <?= $this->tag->stylesheetLink('public/font-awesome/css/font-awesome.min.css') ?>
			   <?= $this->tag->stylesheetLink('public/css/timelify.css') ?>
			   <?= $this->tag->stylesheetLink('public/css/hover_pack.css') ?>
		</head>
	<body>
	<header>
			<nav class="navbar navbar-default navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="<?= $this->url->get('index') ?>">ADCEO</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="<?= $this->url->get('institucional/club') ?>">Clube</a></li>
		                <li><a href="#">Missão</a></li>
		                <li><a href="<?= $this->url->get('institucional/statutes') ?>">Estatutos</a></li>
		                <li><a href="<?= $this->url->get('institucional/socials') ?>">Orgãos sociais</a></li>
		                <li><a href="#">Contactos</a></li>
		                <li><a href="#">Horários</a></li>
		                <li><a href="#">Prémios e distinções</a></li>
		                <li><a href="#">Galerias de fotografias</a></li>
		              </ul>
		            </li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modalidades <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="#">Futebol</a></li>
		                <li><a href="#">Voleibol</a></li>
		                <li><a href="#">Calendário</a></li>
		                <li><a href="#">Jogos</a></li>
		              </ul>
		            </li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Área de Sócio <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="#">E-escola</a></li>
		                <li><a href="#">Campo de férias</a></li>
		                <li><a href="#">Festas de aniversário</a></li>
		              </ul>
		            </li>
		            <li><a href="#contact">Notícias</a></li>
		            <li><a href="#contact">Loja</a></li>
		            <li><a href="#contact">Apoios</a></li>
		          </ul>
		          <?php if (!empty($user)) { ?> 
		           <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $user->User ?> <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="<?= $this->url->get('institucional/club') ?>">Perfil</a></li>
		                <?php if ($user->Type == 3) { ?>
		                	<li><a href="#" onclick="fbLogoutUser()">Terminar sessão</a></li>
		                <?php } else { ?>
		                	 <li><a href="<?= $this->url->get('login/logout') ?>">Terminar sessão</a></li>
		               <?php } ?>
		              </ul>
		            </li>
			      </ul>
			      <!--Login without success -->
			      <?php } else { ?>
			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								 <div class="row">
										<div class="col-md-12">
											<p class="text-center">Login via</p>
											<div class="social-buttons text-center ">
											<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
											</div>
			                                <p class="text-center"> ou </p>
			                                <?= $this->tag->form(['login/start', 'method' => 'post', 'id' => 'login-nav', 'class' => 'form', 'accept-charset' => 'UTF-8', 'role' => 'form']) ?>
													<div class="form-group">
														 <label class="sr-only" for="exampleInputEmail2">Email</label>
														 <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
													</div>
													<div class="form-group">
														 <label class="sr-only" for="exampleInputPassword2">Password</label>
														 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
			                                             <div class="help-block text-right"><a href="">Esqueceu a password ?</a></div>
													</div>
													<div class="form-group">
														 <button type="submit" class="btn btn-primary btn-block">Login</button>
													</div>
													<div class="checkbox text-center">
														 <label>
														 <input type="checkbox"> Guardar login
														 </label>
													</div>
											 <?= $this->tag->endForm() ?>
										</div>
										<div class="bottom text-center">
										 	<a type="button" class="corpButton" data-toggle="modal" data-target="#loginModal"><b>Registe-se</b></a>
										</div>
								 </div>
							</li>
						</ul>
			        </li>
			      </ul>
			      <?php } ?>
		        </div>
		      </div>
    		</nav>
        <?php if ($page == 'Home') { ?>
	    	<div id="myCarousel" class="carousel slide maxheight"
				data-ride="carousel">
				Indicators
		
			<ol class="carousel-indicators marginbottom">
				<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner maxheight">
			 <?php $this->flash->output() ?>
				<div class="item active">
					<img src="public/img/ADCEO1.jpg" style="width: 100%"
						alt="First slide">
					<div class="container">
						<div class="carousel-caption topcaption">
							<h1>Iniciados</h1>
							<p class="slideInfo">Vamos ajudá-los a encontrar a vitória.</p>
							
						</div>
					</div>
				</div>
				<div class="item">
					<img src="public/img/ADCEO2.jpg" style="width: 100%" data-src=""
						alt="Second    slide">
					<div class="container">
						<div class="carousel-caption topcaption">
							<h1>Infantis</h1>
							<p class="slideInfo">Vem apoiar os nossos jovens</p>
<!-- 							<p> -->
<!-- 								<a class="btn btn-md btn-primary btn-responsive" href="#" -->
<!-- 									role="button">Learn more</a> -->
<!-- 							</p> -->
						</div>
					</div>
				</div>
				
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a> 
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	  <?php } ?>
</header>