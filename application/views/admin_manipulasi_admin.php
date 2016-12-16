			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<?php if($this->uri->segment(3) == 'tambah'){ ?>
								<h3>Tambah Admin</h3>
								<?php }elseif($this->uri->segment(3) == 'ubah'){?>
								<h3>Ubah Admin</h3>
								<?php } ?>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							<?php if($this->uri->segment(3) == 'tambah'){ ?>
							<form method="post" action="<?php echo site_url(); ?>admin_manajemen/tambah_admin" enctype="multipart/form-data">
							<?php }elseif($this->uri->segment(3) == 'ubah'){?>
							<form method="post" action="<?php echo site_url(); ?>admin_manajemen/ubah_admin/<?php echo $username; ?>" enctype="multipart/form-data">
							<?php } ?>
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" <?php if($username != $this->session->userdata('username')) { echo 'readonly'; } ?> />
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" name="password" placeholder="Password" value="<?php echo $password; ?>" <?php if($username == $this->session->userdata('username') || $username == '') { echo 'type="text"'; }else{ echo 'type="password" readonly'; } ?>>
								</div>
								<div class="modal-footer">
									<input type="submit" class="btn btn-success" value="Simpan">
								</div>
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