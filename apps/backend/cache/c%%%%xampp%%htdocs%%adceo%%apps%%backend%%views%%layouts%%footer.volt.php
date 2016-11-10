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
		
		<script type="text/javascript">
			//Flash messages
			$(".alert").slideUp(8000, function() {
			    $(this).remove();
			});
		</script>

    </body>
</html>