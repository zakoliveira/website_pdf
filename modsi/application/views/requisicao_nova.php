<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<html>
<div class="wrapper">
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Requisições <small>Nova requisição</small>
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<h5><?php echo isset($badge) ? $badge : ""; ?></h5>
				
					<div class="box">
						<div class="form-group">
							<form method="post" action="<?php site_url("requisicao/nova")?>">
								<table class="table table-bordered table-hover ">
									<thead>
										<tr>
											<th>Grupo</th>
											<th>Nome</th>
											<th>Stock</th>
											<th>Unidades</th>
										</tr>
									</thead>
									<?php foreach ($entries as $k => $row) : ?>
								    <tbody>
										<tr>
											<td><?php echo $row['grupo']; ?></td>
											<td>
												<?php echo $row['nome']; ?>
											</td>
											<td>
												<?php echo $row['quantidade']; ?>
											</td>
											<td class="col-xs-2"><input type="number" min="1"
												max="<?php echo $row['quantidade']; ?>" class="form-control"
												name="<?php echo $row['nome']; ?>" placeholder="Quantidade" /></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<div class="box-footer">
									<button type="submit" name="requisitar" class="btn btn-default">Requisitar</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content-wrapper -->
	</div>
</div>
<?php require_once 'footer.php';?>


