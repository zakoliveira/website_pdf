<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<html>
<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Grupos de Componentes <small>Novo grupo</small>
			</h1>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
				<h5><?php echo isset($badge) ? $badge : ""; ?></h5>
					<div class="box box-primary">
						<style type="text/css">
						#grupo_componentes {
							margin-top: 15px;
						}
						</style>
						<form id="grupo_componentes" method="post" class="form-horizontal"
							action="<?php site_url('admin/novo') ?>">
							<div class="tab-content">
								<div class="form-group">
									<label class="col-xs-3 control-label">Designação</label>
									<div class="col-xs-5">
										<input type="text" class="form-control" name="nome_grupo"
											placeholder="Designação" />
									</div>
								</div>

								<div class="box-footer with-border">
									<div class="form-group" style="margin-top: 15px;">
										<div class="col-xs-5 col-xs-offset-3">
											<button type="button" class="btn btn-default" name="voltar"
												onclick="location.href='<?php echo base_url();?>index.php/home'">Voltar</button>
											<button type="submit" name="guardar" id="guardar"
												class="btn btn-default">Guardar</button>
										</div>
									</div>
								</div>
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

