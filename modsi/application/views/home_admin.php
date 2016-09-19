<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>
<html>
<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1></h1>
		</section>
		<!-- Main content -->
		<section class="content">
			<div>
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<h3 class="box-title"><?php echo isset($username) ? $username : "" ?>, bem-vindo à sua página principal!</h3>
						<h4><?php echo isset($estado) ? $estado : "" ;?></h4>
						
						<?php if (isset($requisicoes)) : ?>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Unidades</th>
									<th>Data de Requisição</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($requisicoes as $k => $r) :?>
								<tr>
									<td style="width: 100px"><?php echo $r->nome?></td>
									<td style="width: 50px"><?php echo $r->qtd?></td>
									<td style="width: 50px"><?php echo $r->data?></td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table>
						<?php endif;?>
						<br>
						<h4><?php echo isset($mensagem) ? $mensagem : "" ;?></h4>
						
						<h4><?php echo isset($sub_mensagem) ? $sub_mensagem : "" ;?></h4>
						
						<h4><?php echo isset($video) ? $video : "" ;?></h4>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
</div>
<?php require_once 'footer.php';?>
</body>
</html>
