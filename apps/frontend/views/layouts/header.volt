<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		    <title>ADCEO</title>
		    
			    {{ stylesheet_link("public/css/bootstrap.css") }}
			    {{ stylesheet_link("public/css/bootstrap-theme.css") }}
			    {{ stylesheet_link("public/css/custom.css") }}
			    {{ stylesheet_link("public/font-awesome/css/font-awesome.min.css") }}
			    
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
		          <a class="navbar-brand" href="{{url('index')}}">ADCEO</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="{{url('institucional/club')}}">Clube</a></li>
		                <li><a href="#">Missão</a></li>
		                <li><a href="#">Estatutos</a></li>
		                <li><a href="#">Orgãos sociais</a></li>
		                <li><a href="#">Contactos</a></li>
		                <li><a href="#">Horários</a></li>
		                <li><a href="#">Prémios e distinções</a></li>
		              </ul>
		            </li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="#">Calendário</a></li>
		                <li><a href="#">Jogos</a></li>
		              </ul>
		            </li>
		            <li><a href="#contact">Área de Sócio</a></li>
		            <li><a href="#contact">Notícias</a></li>
		            <li><a href="#contact">E-escola</a></li>
		            <li><a href="#contact">Loja</a></li>
		            <li><a href="#contact">Campo de férias</a></li>
		            <li><a href="#contact">Festas de aniversário</a></li>
		            <li><a href="#contact">Patrocinadores</a></li>
		          </ul>
		           <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								 <div class="row">
										<div class="col-md-12">
											Login via
											<div class="social-buttons">
												<a href="#" class="btn btn-fb btn-responsive"><i class="fa fa-facebook"></i> Facebook</a>
												<a href="#" class="btn btn-tw btn-responsive"><i class="fa fa-google-plus-square"></i> Google +</a>
											</div>
			                                ou
											 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
													<div class="form-group">
														 <label class="sr-only" for="exampleInputEmail2">Email</label>
														 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
													</div>
													<div class="form-group">
														 <label class="sr-only" for="exampleInputPassword2">Password</label>
														 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
			                                             <div class="help-block text-right"><a href="">Esqueceu a password ?</a></div>
													</div>
													<div class="form-group">
														 <button type="submit" class="btn btn-primary btn-block">Login</button>
													</div>
													<div class="checkbox">
														 <label>
														 <input type="checkbox"> Guardar login
														 </label>
													</div>
											 </form>
										</div>
										<div class="bottom text-center">
										 	<a href="#"><b>Registe-se</b></a>
										</div>
								 </div>
							</li>
						</ul>
			        </li>
			      </ul>
		        </div>
		      </div>
    		</nav>
    		
        {%if page =="Home"%}
	    	<div id="myCarousel" class="carousel slide maxheight"
				data-ride="carousel">
				Indicators
		
			<ol class="carousel-indicators marginbottom">
				<li data-target="#myCarousel" data-slide-to="0" class=""></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner maxheight">
				<div class="item">
					<img src="public/img/slider1.jpg" style="width: 100%"
						alt="First slide">
					<div class="container">
						<div class="carousel-caption topcaption">
							<h1>Slide 1</h1>
							<p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique
								pretium.</p>
							<p>
								<a class="btn btn-md btn-primary btn-responsive" href="#"
									role="button">Sign up today</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="public/img/slider2.jpg" style="width: 100%" data-src=""
						alt="Second    slide">
					<div class="container">
						<div class="carousel-caption topcaption">
							<h1>Slide 2</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
								vitae egestas purus.</p>
							<p>
								<a class="btn btn-md btn-primary btn-responsive" href="#"
									role="button">Learn more</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item active">
					<img src="public/img/slider2.jpg" style="width: 100%" data-src=""
						alt="Third slide">
					<div class="container">
						<div class="carousel-caption topcaption ">
							<h1>Slide 3</h1>
							<p>Donec sit amet mi imperdiet mauris viverra accumsan ut at
								libero.</p>
							<p>
								<a class="btn btn-md btn-primary btn-responsive" href="#"
									role="button">Browse gallery</a>
							</p>
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
	  {%endif%}
</header>