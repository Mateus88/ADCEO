<!DOCTYPE HTML>
	<html>
		<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
		          <a class="navbar-brand" href="#">ADCEO</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="#">Home</a></li>
		            <li><a href="#about">About</a></li>
		            <li><a href="#contact">Contact</a></li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="#">Action</a></li>
		                <li><a href="#">Another action</a></li>
		                <li><a href="#">Something else here</a></li>
		                <li role="separator" class="divider"></li>
		                <li class="dropdown-header">Nav header</li>
		                <li><a href="#">Separated link</a></li>
		                <li><a href="#">One more separated link</a></li>
		              </ul>
		            </li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
    		</nav>
    		<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
			  <!-- Indicators -->
			  
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="item"> <img src="http://lorempixel.com/1200/400/sports" style="width:100%" alt="First slide">
			      <div class="container">
			        <div class="carousel-caption">
			          <h1>Slide 1</h1>
			          <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
			          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			        </div>
			      </div>
			    </div>
			    <div class="item"> <img src="http://lorempixel.com/1200/400/people" style="width:100%" data-src="" alt="Second    slide">
			      <div class="container">
			        <div class="carousel-caption">
			          <h1>Slide 2</h1>
			          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus. </p>
			          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			        </div>
			      </div>
			    </div>
			    <div class="item active"> <img src="http://lorempixel.com/1200/400/abstract" style="width:100%" data-src="" alt="Third slide">
			      <div class="container">
			        <div class="carousel-caption">
			          <h1>Slide 3</h1>
			          <p>Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.</p>
			          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			        </div>
			      </div>
			    </div>
			  </div>
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
			  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 
			 </div>
		
		</header>