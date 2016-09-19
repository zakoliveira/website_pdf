<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<html>
<div class="wrapper">
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Grupos de Componentes <small>Gerir grupos</small>
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<h5><?php echo isset($badge) ? $badge : ""; ?></h5>
					<div class="box box-primary">
						<form id="grupo_componentes" method="post" class="form-horizontal"
							action="<?php echo site_url('grupo_componentes/gerir') ?>"
							role="form">
							<div class="box-body">
								<table class="table table-bordered table-hover"
									style="width: 100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nome</th>
											<th>Ação</th>
										</tr>
									</thead>
									<?php foreach ($lista as $k => $tipo) : ?>
									<tbody>
										<tr>
											<td>
												<?php echo $tipo['id_componente_grupo']; ?>
											</td>
											<td><?php echo $tipo['nome']; ?></td>
											<td>
												<button type="submit" name="apagar"
													value="<?php echo $tipo['nome']?>"
													class="btn btn-xs btn-danger">Apagar</button>
											</td>
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

