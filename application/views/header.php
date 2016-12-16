<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/img/favicon.png"/>
		<title>Peduli Negeriku</title>
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/shop-homepage.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" />
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>beranda">PeduliNegeriku.com</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="<?php echo site_url(); ?>beranda">Beranda</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Berita <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
									$query = $this->m_berita->tampil_berita_group_by_id_kategori();
									foreach($query->result() as $row){
								?>
								<li>
									<a href="<?php echo site_url(); ?>berita/<?php echo $row->id_kategori; ?>"><?php echo ucfirst($row->nama_kategori); ?></a>
								</li>
								<?php
									}
								?>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tips <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
									$query = $this->m_tips->tampil_tips_group_by_id_kategori();
									foreach($query->result() as $row){
								?>
								<li>
									<a href="<?php echo site_url(); ?>tips/<?php echo $row->id_kategori; ?>"><?php echo ucfirst($row->nama_kategori); ?></a>
								</li>
								<?php
									}
								?>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peta <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
									$query = $this->m_peta->tampil_peta_group_by_id_kategori();
									foreach($query->result() as $row){
								?>
								<li>
									<a href="<?php echo site_url(); ?>peta/<?php echo $row->id_kategori; ?>"><?php echo ucfirst($row->nama_kategori); ?></a>
								</li>
								<?php
									}
								?>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forum <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
									$query = $this->m_forum->tampil_forum_group_by_id_kategori();
									foreach($query->result() as $row){
								?>
								<li>
									<a href="<?php echo site_url(); ?>forum/<?php echo $row->id_kategori; ?>"><?php echo ucfirst($row->nama_kategori); ?></a>
								</li>
								<?php
									}
								?>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo site_url(); ?>relawan">Daftar Relawan</a>
						</li>
						<?php
							if(($this->session->userdata('id_member')) == ''){
						?>
						<li>
							<a href="<?php echo site_url(); ?>login">Login</a>
						</li>
						<?php
							}else{
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hai, <?php echo $this->session->userdata('nama'); ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo site_url(); ?>profil"> Profil</a>
								</li>
								<li>
									<a href="<?php echo site_url(); ?>login/keluar"> Keluar</a>
								</li>
							</ul>
						</li>
						<?php
							}
						?>
					</ul>
				</div>
			</div>
		</nav>