<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<html>
<div class="wrapper">
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Requisições <small>Componentes requisitados</small>
			</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<h5><?php echo isset($badge) ? $badge : ""; ?></h5>
				
					<div class="box box-primary">

						<form id="grupo_componentes" method="post" class="form-horizontal"
							action="<?php echo site_url('componentes/gerir') ?>" role="form">
							<div class="box-body">
								<table class="table table-bordered table-hover"
									style="width: 100%">
									<thead>
										<tr>
											<th>Nome</th>
											<th>Quantidade</th>
											<th>Username</th>
											<th>Data</th>
										</tr>
									</thead>
										<?php foreach ($lista as $k => $tipo) : ?>
										<tbody>
										<tr>
											<td>
												<?php echo $tipo->nome; ?>
											</td>
											<td><?php echo $tipo->qtd; ?></td>
											<td><?php echo $tipo->username; ?></td>
											<td><?php echo $tipo->data; ?></td>
										</tr>
									</tbody>
										<?php endforeach; ?>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
</div>
<?php require_once 'footer.php';?>

