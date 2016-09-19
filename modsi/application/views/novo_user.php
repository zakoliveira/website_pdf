<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<div class="wrapper">
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Utilizadores <small>Criar Utilizador</small>
			</h1>
		</section>
		<section class="content">
			<div class="row" >
				<div class="col-md-12" >
					<h5><?php echo isset($badge) ? $badge : ""; ?></h5>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Registar novo utilizador</h3>
						</div>
						<div class="box-body ">
							<form role="form" action="<?php site_url('admin/novo') ?>"
								method="post">
								<div class="form-group" >
									<label for="nome" class="col-sm-2 control-label">Nome</label>
									<div class="col-sm-10" style="margin-bottom: 20px;">
										<input type="text" class="form-control" name="nome"
											placeholder="Nome">
									</div>

									<label for="apelido" class="col-sm-2 control-label">Apelido</label>
									<div class="col-sm-10" style="margin-bottom: 20px;">
										<input type="text" class="form-control" name="apelido"
											placeholder="Apelido">
									</div>

									<label for="utilizador" class="col-sm-2 control-label">Utilizador</label>
									<div class="col-sm-10" style="margin-bottom: 20px;">
										<input type="text" class="form-control" name="utilizador"
											placeholder="Utilizador">
									</div>

									<label for="password" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10" style="margin-bottom: 20px;">
										<input type="password" class="form-control" name="password"
											placeholder="Password">
									</div>

									<label for="user_type" class="col-sm-2 control-label">Tipo de
										Utilizador</label>
									<div class="col-sm-5" style="margin-bottom: 20px;">
										<select class="form-control" name="user_type">
											<option value="0">Simples</option>
											<option value="1">Administrador</option>
										</select>
									</div>
								</div>
									<button type="submit" name="guardar" id="guardar"
										class="btn btn-default" > Guardar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
</div>

<?php require_once 'footer.php';?>

