<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<div class="wrapper">
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Utilizadores <small>Listar Utilizador</small>
			</h1>
			<h5><?php echo isset($badge) ? $badge : ''?></h5>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Utilizadores Registados</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<form role="form" action="<?php site_url('admin/listar') ?>"
								method="post">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Nome</th>
											<th>Apelido</th>
											<th>Username</th>
											<th>Tipo de Utilizador</th>
											<th>Ação</th>
										</tr>
									</thead>
							<?php foreach ($list as $k => $row) : ?>
	    					<tbody>
										<tr>
											<td>
											<?php echo $row['nome']; ?>
										</td>
										<td>
											<?php echo $row['apelido']; ?>
										</td>
										<td>
											<?php echo $row['username']; ?>
										</td>
										<td>
											<?php echo $row['admin']; ?>
										</td>
											<td>
												<button type="submit" value="<?php echo $row['username']; ?>" name="apagar" id="apagar"
													class="btn btn-xs btn-danger">Apagar</button>
											</td>
										</tr>
							<?php endforeach; ?>
							</tbody>
								</table>
							</form>
						</div>
						<div class="box-footer">
							<button type="button" class="btn btn-default" name="voltar"
								onclick="location.href='<?php echo base_url();?>index.php/home_admin'">Voltar</button>
						</div>
						<!-- /.box-body -->
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php require_once 'footer.php';?>
