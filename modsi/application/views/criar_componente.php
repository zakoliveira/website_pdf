<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<html>
<div class="wrapper">
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Componentes <small>Novo componente</small>
			</h1>
		</section>

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
							action="<?php echo site_url('componentes/novo') ?>" role="form">
							<div class="form-group">
								<label class="col-xs-3 control-label">Nome</label>
								<div class="col-xs-4">
									<input type="text" class="form-control" name="nome"
										placeholder="Nome" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Quantidade</label>
								<div class="col-xs-2">
									<input type="number" min="1" class="form-control"
										name="quantidade" placeholder="Quantidade" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Grupo de Componente</label>
								<div class="col-xs-2">
									<select class="form-control" name="grupo_componente">
													<?php foreach ($lista_grupos as $id => $tipo) :?>
													<option value="<?php echo $tipo['id_componente_grupo'] ?>"><?php echo $tipo['nome'] ?></option>
													<?php endforeach;?>
												</select>
								</div>
							</div>
							<div class="box-footer with-border">
								<div class="form-group" style="margin-top: 15px;">
									<div class="col-xs-5 col-xs-offset-3">
										<button type="button" class="btn btn-default" name="voltar"
											onclick="location.href='<?php echo base_url();?>index.php/home'">Voltar</button>
										<button type="submit" name="componentes" value="guardar"
											class="btn btn-default">Guardar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>
<!-- /.content -->
<?php require_once 'footer.php';?>

