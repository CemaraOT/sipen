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
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
	</head>
	<style>
		.body-Login-back {
			background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo base_url(); ?>assets/img/background-login.jpg');
		}
	</style>
	<body class="body-Login-back">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center logo-margin ">
					<h2 style="font-family:Trebuchet MS; color:#f3f3f3;">Sistem Informasi Peduli Negeriku</h2>
                </div>
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default" style="opacity:0.8;">                  
						<div class="panel-heading">
							<h3 class="panel-title">Administrator Login</h3>
						</div>
						<div class="panel-body">
							<form method="post" action="<?php echo site_url();?>admin/masuk">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
									</div>
									<label>
										SIPEN &copy; 2016.
									</label>
									<div class="action">
										<input type="submit" style="width:100%;" class="btn btn-info" value="Login" />
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
		<?php if($this->session->flashdata('error')){ ?>
			alert('<?php echo $this->session->flashdata('error'); ?>');
		<?php } ?>
	});
</script>
