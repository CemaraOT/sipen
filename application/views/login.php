<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Peduli Negeriku</title>
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/img/favicon.png"/>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/main-style.css" rel="stylesheet" />
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
	</head>
	<style>
		.body-Login-back {
			background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo base_url(); ?>assets/img/background.jpg');
		}
	</style>
	<body class="body-Login-back">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center logo-margin ">
					<h2 style="font-family:Trebuchet MS; color:#f3f3f3;">Peduli Negeriku</h2>
                </div>
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-primary">                  
						<div class="panel-heading">
							<h3 class="panel-title text-center">Member Login</h3>
						</div>
						<div class="panel-body">
							<form method="post" action="<?php echo site_url();?>login/masuk">
								<fieldset>
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" placeholder="Email" name="email" type="email" autofocus>
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
									</div>
									<text style="font-size:10pt;">
										Belum punya akun? Silahkan daftar <a href="<?php echo site_url(); ?>login/daftar">disini!</a>
									</text>
									<div class="modal-footer" style="padding-top:5%;">
										<input type="submit" class="btn btn-primary" value="Login" />
										<input type="button" class="btn btn-default" value="Kembali" onclick="window.location.href='<?php echo site_url(); ?>beranda'">
									</div> 
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<!-- /. JAVASCRIPT  --> 
<script type="text/javascript">
	$(document).ready(function () {
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
		<?php if($this->session->flashdata('error')){ ?>
			alert('<?php echo $this->session->flashdata('error'); ?>');
		<?php } ?>
	});
</script>
