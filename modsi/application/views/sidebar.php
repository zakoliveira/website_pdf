<?php 
$user_type = $this->session->userdata['admin']; 
if ($user_type == 1) {
	// Is admin
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li>
				<div class="user-panel">
					<div class="pull-left image">
						<img src="http://www.iconsfind.com/wp-content/uploads/2016/01/20160111_5693b29871dde.png" class="img-circle"
							alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?= $this->session->userdata('username') ?></p>
						<a><i class="fa fa-circle text-success"></i> Online</a>
					</div>
					<div class="pull-right">
					<br>
						<a href="<?= site_url('home_admin/logout') ?>"
						class="fa fa-lg fa-power-off " value="Logout"></a>
					</div>
				</div> <!-- /.user-panel --> 
			</li>
			<li class="header">Menu</li>
			<li><a href="<?php echo base_url().'index.php/home_admin'?>"><i class="fa fa-home"></i> <span>Página Principal</span></a></li>
			<li class="treeview"><a><i class="fa fa-users"
					aria-hidden="true"></i> <span>Utilizadores</span> <i
					class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url().'index.php/admin/novo'?>">Criar Utilizador</a></li>
					<li><a href="<?php echo base_url().'index.php/admin/listar'?>">Gerir Utilizadores</a></li>
				</ul></li>
			<li class="treeview"><a href=""><i class="fa fa-cog"
					aria-hidden="true"></i> <span>Componentes</span> <i
					class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url().'index.php/componentes/novo'?>">Novo Componente</a></li>
					<li><a href="<?php echo base_url().'index.php/componentes/gerir'?>">Gerir Componentes</a></li>
				</ul></li>
			<li class="treeview"><a href=""><i class="fa fa-object-ungroup"
					aria-hidden="true"></i> <span>Grupos de Componentes</span> <i
					class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url().'index.php/grupo_componentes/novo'?>">Novo Grupo</a></li>
					<li><a href="<?php echo base_url().'index.php/grupo_componentes/gerir'?>">Gerir Grupos</a></li>
				</ul></li>
			<li class="treeview"><a href=""><i class="fa fa-table"
					aria-hidden="true"></i> <span>Requisições</span> <i
					class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url().'index.php/requisicao/nova'?>">Nova Requisição</a></li>
					<li><a href="<?php echo base_url().'index.php/requisicao/gerir'?>">Gerir Requisições</a></li>
				</ul></li>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>
<?php }
else {
?>
<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li>
				<div class="user-panel">
					<div class="pull-left image">
						<img src="http://www.iconsfind.com/wp-content/uploads/2016/01/20160111_5693b29871dde.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?= $this->session->userdata('username') ?></p>
						<a><i class="fa fa-circle text-success"></i> Online</a>
					</div>
					<div class="pull-right">
						<br> <a href="<?= site_url('home_admin/logout') ?>"
							class="fa fa-lg fa-power-off" value="Logout"></a>
					</div>
				</div> <!-- /.user-panel -->
			</li>
			<li class="header">Menu</li>
			<li><a href="<?php echo base_url().'index.php/home_admin'?>"><i
					class="fa fa-home"></i> <span>Página Principal</span></a></li>

			<li><a href="<?php echo base_url().'index.php/requisicao/nova'?>"><i
					class="fa fa-table"></i> <span>Requisições</span></a></li>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>
<?php } ?>

