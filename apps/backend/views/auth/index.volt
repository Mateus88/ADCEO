<!DOCTYPE html>
<html>
   <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>ADCEO - Login</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{ stylesheet_link("public/backend/bootstrap/css/bootstrap.min.css") }}
        <!-- font Awesome -->
        {{ stylesheet_link("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css") }}
        <!-- Ionicons -->
        {{ stylesheet_link("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css") }}
        <!-- Theme style -->
        {{ stylesheet_link("public/backend/dist/css/AdminLTE.css") }}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        {{ stylesheet_link("public/backend/dist/css/skins/_all-skins.min.css") }}
        
    </head>
<body class="hold-transition login-page">
 <?php $this->flash->output() ?>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>ADCEO</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Acesso ao backoffice</p>

   <form class="login-form" action="auth/start" method="POST">
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="#">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
{{ javascript_include("backend/plugins/jQuery/jquery-2.2.3.min.js") }}
<!-- Bootstrap 3.3.6 -->
{{ javascript_include("backend/bootstrap/js/bootstrap.min.js") }}
<!-- iCheck -->
{{ javascript_include("backend/plugins/iCheck/icheck.min.js") }}
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  
	//Flash messages
	$(".alert").slideUp(4000, function() {
	    $(this).remove();
	});
</script>
</body>
</html>