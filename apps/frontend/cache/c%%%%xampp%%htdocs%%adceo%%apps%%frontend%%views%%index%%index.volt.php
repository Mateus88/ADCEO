<!-- For support the charecters UTF8 -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<!-- Begin Header -->
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
<!-- End Header -->
<div class="container marginContainer ">

	<!--  BEGIN section news -->
	<section>
		<div
			class="heading-block text-center margin-bottom-40 margin-top-50 animate fadeInUp"
			data-wow-delay="0.2s"
			style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
			<h3>Notícias</h3>
		</div>
		<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO1.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais </p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">ADCEO Vs Sporting</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 18 de Novembro
					</p>
					</hr-d>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO2.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais </p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">ADCEO Vs Benfica</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 18 de Dezembro
					</p>
					</hr-d>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO3.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais</p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">ADCEO Vs Visitante</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 18 de Dezembro
					</p>
					</hr-d>
				</div>
		</div>
		<div class="row marginNews">
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO4.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais </p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">ADCEO Vs Visitante</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 19 de Novembro
					</p>
					</hr-d>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO5.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais </p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">Tires vs ADCEO</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 19 de Novembro
					</p>
					</hr-d>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO6.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais</p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">ADCEO Vs Visitante</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 19 de Novembro
					</p>
					</hr-d>
				</div>
		</div>
<!-- 		<div class="row"> -->
<!-- 			<div id="posts"> -->
<!-- 				<div class="post"> -->
<!-- 					<img src="public/img/ADCEO4.jpg" /> -->
<!-- 					<div class="post-content"> -->
<!-- 						<h2>Resumo do jogo</h2> -->
<!-- 						<p>ADCEO vs Visitante </p><br> -->
<!-- 						<p>DOM 10h30 20/11/16 </p> -->
<!-- 						<a href="#">View more</a> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="post"> -->
<!-- 					<img src="public/img/ADCEO5.jpg" /> -->
<!-- 					<div class="post-content"> -->
<!-- 						<h2>Jogo</h2> -->
<!-- 						<p>ADCEO vs SLB </p><br> -->
<!-- 						<p>DOM 10h30 20/11/16 </p> -->
<!-- 						<a href="#">View more</a> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="post"> -->
<!-- 					<img src="public/img/ADCEO6.jpg" /> -->
<!-- 					<div class="post-content"> -->
<!-- 						<h2>Jogo</h2> -->
<!-- 						<p>ADCEO vs Visitante </p><br> -->
<!-- 						<p>DOM 10h30 20/11/16 </p> -->
<!-- 						<a href="#">View more</a> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-md-12"> -->
<!-- 				<div class="text-center"> -->
<!-- 					<a href="#" class="btn btn-info " >Ver mais</a> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
	</section>
	<!--  END section news -->
	<div
		class="heading-block text-center margin-bottom-40 margin-top-50 animate fadeInUp"
		data-wow-delay="0.2s"
		style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
		<h3>Próximas atividades</h3>
	</div>

	<!--  BEGIN section agenda -->
	<section >
		<div class="row ">
			<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO1.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais </p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">ADCEO Vs Sporting</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 26 de Novembro
					</p>
					</hr-d>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO2.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais </p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">Ceia de Natal</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 23 de Dezembro
					</p>
					</hr-d>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 desc">
					<a class="b-link-fade b-animate-go" href="#"><img class="imageNews"
						src="public/img/ADCEO3.jpg" alt="">
						<div class="b-wrapper">
							<h4 class="b-from-left b-animate b-delay03"
								style="margin-top: -26px;">Post 1</h4>
							<p class="b-from-right b-animate b-delay03">Ver mais</p>
						</div>
						<div class="b-top-line"></div></a>
					<a class="title" href="#">The Sky Is The Limit</a>
					<p class="leadNews">Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>
					<hr-d>
					<p class="time">
						<i class="fa fa-calendar"></i> 28 de Dezembro
					</p>
					</hr-d>
				</div>
		</div>
	</section>
	<!--  END section agenda -->
	
</div>
<!-- Begin Footer -->
<!-- For support the charecters UTF8 -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<?php if ($page == 'Home') { ?>
<!-- Begin section patterns -->
<section class="pattern">
	<div id="cwrap">
		 <div class="container">
		 	<div class="row centered">
			 	<h3>Patrocinadores</h3>
			 	<p class="lead">Os nossos apoios , que nos permitem um crescimento sustentável</p>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="public/img/pattern1.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="public/img/pattern1.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="public/img/pattern1.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="public/img/pattern1.png" class="img-responsive">
			 	</div>
		 	</div><!-- --/row ---->
		 </div><!-- --/container ---->
	 </div>
</section>
<?php } ?>
<!-- End section patterns -->
<footer>
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Sobre nós</h4>
		 			<div class="hline-w"></div>
		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Redes sociais</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="#"><i class="fa fa-facebook"></i></a>
		 				<a href="#"><i class="fa fa-google-plus-square"></i></a>
		 				<a href="#"><i class="fa fa-twitter"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Morada</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				Some Ave, 987,<br>
		 				23890, New York,<br>
		 				United States.<br>
		 			</p>
		 		</div>
		 		<div class="col-md-12 centered paddingtop " >
		 			<p>© 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.</p>
		 		</div>
		 	
		 	</div><!-- --/row ---->
	 	</div><!-- --/container ---->
</footer>
<!-- modal register -->
<div class="modal fade" id="loginModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registo do utilizador</h4>
      </div>
      <div class="modal-body">
        <?= $this->tag->form(['method' => 'post', 'login/register', 'id' => 'disablefbForm', 'class' => 'horizontal-form']) ?>       
						<div class="form-body">
							<div class="form-group">
								<label class="control-label">Username</label> 
								<input name="username" type="text" class="form-control" 
								required style="background: #fff; border-color: #fff; color: #1c1c1c;" />
							</div>
							<div class="form-group">
								<label class="control-label">Email</label> 
								<input	name="email" type="text" class="form-control"
								required style="background: #fff; border-color: #fff; color: #1c1c1c;" />
							</div>
							<div class="form-group">
								<label class="control-label">Password</label> 
								<input name="password" type="password" class="form-control" 
								required style="background: #fff; border-color: #fff; color: #1c1c1c;" />
							</div>
							<div class="form-group">
								<label class="control-label">Repetir password</label> 
								<input name="repeat_password" type="password" class="form-control"
								required style="background: #fff; border-color: #fff; color: #1c1c1c;" />
							</div>
							<div class="margin-top-10">
								<input type="submit" class="btn" name="register" value="Registar" style="background-color: #384452;color:#ffffff;" />
								<button type="reset" class="btn default">Cancelar</button>
							</div>
							<input type="hidden" name="<?php echo $this->security->getTokenKey() ?>"
        					value="<?php echo $this->security->getToken() ?>"/>
						</div>	
		<?= $this->tag->endForm() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>

<?= $this->tag->javascriptInclude('js/jquery.js') ?>
<?= $this->tag->javascriptInclude('js/bootstrap.js') ?>
<?= $this->tag->javascriptInclude('js/custom.js') ?>
<?= $this->tag->javascriptInclude('js/filterable.js') ?>
<?= $this->tag->javascriptInclude('js/filterable.pack.js') ?>
<?= $this->tag->javascriptInclude('js/jquery.timelify.js') ?>
<script>
    //Flash messages
	$(".alert").slideUp(8000, function() {
	    $(this).remove();
	});
	
	
	//Timeline plugin
	$('.timeline').timelify();
	
	$('.timeline').timelify({

		  // animation types
		  animLeft: "bounceInLeft",
		  animRight: "bounceInRight",
		  animCenter: "bounceInUp",

		  // animation speed
		  animSpeed: 300,

		  // trigger position in pixels
		  offset: 150
		  
		});
	
		 //Facebook login
				  
		// This is called with the results from from FB.getLoginStatus().
		  function statusChangeCallback(response) {
		    // The response object is returned with a status field that lets the
		    // app know the current login status of the person.
		    // Full docs on the response object can be found in the documentation
		    // for FB.getLoginStatus().
		    if (response.status === 'connected') {
		      // Logged into your app and Facebook.
		      testAPI();
		    } else if (response.status === 'not_authorized') {
		      // The person is logged into Facebook, but not your app.
		     console.log('Please log into this app.');
		    } else {
		      // The person is not logged into Facebook, so we're not sure if
		      // they are logged into this app or not.
		      console.log('Please log into Facebook.');
		    }
		  }
		
		  // This function is called when someone finishes with the Login
		  // Button.  See the onlogin handler attached to it in the sample
		  // code below.
		  function checkLoginState() {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }
		
		  window.fbAsyncInit = function() {
			  FB.init({
			   // appId      : '327831930929515', // local App ID
			    appId	   : '716470275174309', // Qual App ID
			    xfbml      : true,
			    version    : 'v2.3',
			    status     : true,
			    cookie     : true
			  });
			  
			  // Now that we've initialized the JavaScript SDK, we call 
			  // FB.getLoginStatus().  This function gets the state of the
			  // person visiting this page and can return one of three states to
			  // the callback you provide.  They can be:
			  //
			  // 1. Logged into your app ('connected')
			  // 2. Logged into Facebook, but not your app ('not_authorized')
			  // 3. Not logged into Facebook and can't tell if they are logged into
			  //    your app or not.
			  //
			  // These three cases are handled in the callback function.
			
			  FB.getLoginStatus(function(response) {
			    statusChangeCallback(response);
			  });
		
		  };
		
		  // Load the SDK asynchronously
		  (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/pt_PT/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));
		
		  // Here we run a very simple test of the Graph API after login is
		  // successful.  See statusChangeCallback() for when this call is made.
		  function testAPI() {
		    FB.api('/me',{"fields":"id,name,email,first_name,last_name"}, function(response) {
		    	
	                 var name = response.name;
	                 var email = response.email;
	                 var id= response.id;

		    	jQuery.ajax({
						type: 'POST',
					    url: "<?= $this->url->get('login/faceLogin') ?>",
					    data: {name:name,email:email,id:id},
					    success: function(result) {
// 					    	window.location="<?= $this->url->get('login/logout') ?>";
					    }
					});
		    });
		  }
		  
		  function fbLogoutUser() {
			    FB.getLoginStatus(function(response) {
			        if (response && response.status === 'connected') {
			            FB.logout(function(response) {
			            	jQuery.ajax({
								type: 'POST',
							    url: "<?= $this->url->get('login/logout') ?>",
							    success: function(result) {
	 					    		window.location.href = "<?= $this->url->get('login/logout') ?>";
							    }
							});
			            });
			        }
			    });
			}

</script>

<!-- End Footer -->