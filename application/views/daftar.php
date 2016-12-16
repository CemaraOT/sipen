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
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">                  
						<div class="panel-heading">
							<h3 class="panel-title text-center">Daftar Member</h3>
						</div>
						<div class="panel-body">
							<form method="post" action="<?php echo site_url();?>login/daftar_member">
								<fieldset>
									<div class="form-group">
										<label>Nama</label>
										<input type="text" class="form-control" name="nama" placeholder="Nama" />
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<textarea class="form-control" name="alamat" rows="7"></textarea>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" placeholder="Email" />
									</div>
									<div class="form-group">
										<label>Nomor Telepon</label>
										<input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon" />
									</div>
									<div class="form-group">
										<label>Jenis Kelamin</label>
										<select class="form-control" name="jenis_kelamin">
											<option selected disabled>--Pilih Jenis Kelamin--</option>
											<option value="1">Laki-laki</option>
											<option value="0">Perempuan</option>
										</select>
									</div>
									<div class="form-group">
										<label>Tanggal Lahir</label>
										<input type="text" class="form-control" name="tgl_lahir" placeholder="dd-mm-yyyy" />
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" placeholder="Password" />
									</div>
									<div class="modal-footer">
										<input type="submit" class="btn btn-primary" value="Simpan">
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
		<?php if($this->session->flashdata('error')){ ?>
			alert('<?php echo $this->session->flashdata('error'); ?>');
		<?php } ?>
	});
</script>
