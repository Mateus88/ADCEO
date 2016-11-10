<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<?php if ($page == 'Home') { ?>
<!-- Begin section patterns -->
<section class="pattern">
	<div id="cwrap">
		 <div class="container">
		 	<div class="row centered">
			 	<h3>Patrocinadores</h3>
			 	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
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
		    console.log('statusChangeCallback');
		    console.log(response);
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
			    appId      : '327831930929515',
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
