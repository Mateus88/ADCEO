<!-- For support the charecters UTF8 -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.3.7
		</div>
		<strong>Copyright © 2014-2016 <a href="#">ADCEO</a>.</strong> Todos os direitos reservados.
  	</footer>
		<!-- jQuery 2.2.3 -->
		{{ javascript_include("backend/plugins/jQuery/jquery-2.2.3.min.js") }}
		<!-- Bootstrap 3.3.6 -->
		{{ javascript_include("backend/bootstrap/js/bootstrap.min.js") }}
		<!-- SlimScroll -->
		{{ javascript_include("backend/plugins/slimScroll/jquery.slimscroll.min.js") }}
		<!-- FastClick -->
		{{ javascript_include("backend/plugins/fastclick/fastclick.js") }}
		<!-- AdminLTE App -->
		{{ javascript_include("backend/dist/js/app.js") }}
		<!-- AdminLTE for demo purposes -->
		{{ javascript_include("backend/dist/js/demo.js") }}
		<!-- DataTables -->
		{{ javascript_include("backend/plugins/datatables/jquery.dataTables.min.js") }}
		{{ javascript_include("backend/plugins/datatables/dataTables.bootstrap.min.js") }}
		
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