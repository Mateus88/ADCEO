{%include "layouts/header.volt" %}
{%include "layouts/sidebar.volt" %}
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<div class="content-wrapper" style="min-height: 1101px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Club Page <small>it all starts here</small>
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
				<h3 class="box-title">Edição de dados</h3>
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
			<div class="box-body">
				<div class="btn-group btnmargins">
					<button type="button" class="btn btn-block btn-info">Nova</button>
				</div>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Título</th>
							<th>Descrição</th>
							<th>Data</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>Presto</td>
							<td>Opera 7.0</td>
							<td>Win 95+ / OSX.1+</td>
							<td>
								<a class="marginIcon" href="{{ url('admin/institucional/club/edit/'~var) }}"><i class="fa fa-edit font-red-thunderbird" title="Editar"></i></a>
								<a class="marginIcon" href="#"><i class="fa fa-times font-red-thunderbird" title="Eliminar"></i></a>
							</td>
						</tr>
						<tr>
							<td>Presto</td>
							<td>Opera 7.5</td>
							<td>Win 95+ / OSX.2+</td>
							<td>
								<a class="marginIcon" href="{{ url('admin/institucional/club/edit/'~var) }}"><i class="fa fa-edit font-red-thunderbird" title="Editar"></i></a>
								<a class="marginIcon" href="#"><i class="fa fa-times font-red-thunderbird" title="Eliminar"></i></a>
							</td>
						</tr>
						<tr>
							<td>Presto</td>
							<td>Opera 8.0</td>
							<td>Win 95+ / OSX.2+</td>
							<td>
								<a class="marginIcon" href="{{ url('admin/institucional/club/edit/'~var) }}"><i class="fa fa-edit font-red-thunderbird" title="Editar"></i></a>
								<a class="marginIcon" href="#"><i class="fa fa-times font-red-thunderbird" title="Eliminar"></i></a>
							</td>
						</tr>
						<tr>
							<td>Presto</td>
							<td>Opera 8.5</td>
							<td>Win 95+ / OSX.2+</td>
							<td>
								<a class="marginIcon" href="{{ url('admin/institucional/club/edit/'~var) }}"><i class="fa fa-edit font-red-thunderbird" title="Editar"></i></a>
								<a class="marginIcon" href="#"><i class="fa fa-times font-red-thunderbird" title="Eliminar"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</section>
	<!-- /.content -->
</div>
{%include "layouts/footer.volt" %}