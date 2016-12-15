<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Backend SIPEN</title>
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/img/favicon.png"/>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/main-style.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/morris-0.4.3.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" />
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/pace.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/siminta.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/raphael-2.1.0.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/morris.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" style="padding-top:0;" href="index.html">
					   <h2 style="font-family:Trebuchet MS; color:#f3f3f3;">SIPEN - Backend</h2>
					</a>
				</div>
				<ul class="nav navbar-top-links navbar-right pull-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-user fa-2x"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#" data-toggle="modal" data-target="#modal_profil"><i class="fa fa-user fa-fw"></i>Profil</a>
							</li>
							<li class="divider"></li>
							<li><a href="<?php echo site_url(); ?>admin/keluar"><i class="fa fa-sign-out fa-fw"></i>Keluar</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			
			<nav class="navbar-default navbar-static-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<div class="user-section text-center" style="margin-top:0;">
								<div class="user-info">
									<h3>Selamat Datang !</h3>
									<div style="color:#f3f3f3;"><?php echo $this->session->userdata('username'); ?></div>
								</div>
							</div>
						</li>
						<li class="<?php if($this->uri->segment(1) == 'admin_beranda') { echo 'selected'; } ?>">
							<a href="<?php echo site_url(); ?>admin_beranda"><i class="fa fa-home fa-fw"></i> Beranda</a>
						</li>
						<li class="<?php if($this->uri->segment(1) == 'admin_kategori') { echo 'selected'; } ?>">
							<a href="<?php echo site_url(); ?>admin_kategori"><i class="fa fa-list fa-fw"></i> Kategori Bencana</a>
						</li>
						<li class="<?php if($this->uri->segment(1) == 'admin_berita') { echo 'selected'; } ?>">
							<a href="<?php echo site_url(); ?>admin_berita"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
						</li>
						<li class="<?php if($this->uri->segment(1) == 'admin_tips') { echo 'selected'; } ?>">
							<a href="<?php echo site_url(); ?>admin_tips"><i class="fa fa-info fa-fw"></i> Tips</a>
						</li>
						<li class="<?php if($this->uri->segment(1) == 'admin_peta') { echo 'selected'; } ?>">
							<a href="<?php echo site_url(); ?>admin_peta"><i class="fa fa-map fa-fw"></i> Peta</a>
						</li>
						<li class="<?php if($this->uri->segment(1) == 'admin_forum') { echo 'selected'; } ?>">
							<a href="<?php echo site_url(); ?>admin_forum"><i class="fa fa-users fa-fw"></i> Forum</a>
						</li>
						<li class="<?php if($this->uri->segment(1) == 'admin_manajemen') { echo 'active'; } ?>">
							<a href="#"><i class="fa fa-user fa-fw"></i> Manajemen User<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li class="<?php if($this->uri->segment(2) == 'admin') { echo 'selected'; } ?>">
									<a href="<?php echo site_url(); ?>admin_manajemen/admin"> Admin</a>
								</li>
								<li class="<?php if($this->uri->segment(2) == 'member') { echo 'selected'; } ?>">
									<a href="<?php echo site_url(); ?>admin_manajemen/member"> Member</a>
								</li>
								<li class="<?php if($this->uri->segment(2) == 'relawan') { echo 'selected'; } ?>">
									<a href="<?php echo site_url(); ?>admin_manajemen/relawan"> Relawan</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			
			<div class="modal fade" id="modal_profil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form method="POST" id="form_ubah" enctype="multipart/form-data">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Profil Admin</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" name="username" value="<?php echo $this->session->userdata('username'); ?>" placeholder="Username" type="text" readonly />
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" name="password" value="<?php echo $this->session->userdata('password'); ?>" placeholder="Password" type="text" readonly />
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal"> Tutup</button>
							</div>
						</form>
					</div>
					<div class="clear"></div>
				</div>
			</div>