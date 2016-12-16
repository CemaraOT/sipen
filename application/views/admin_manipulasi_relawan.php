			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<h3>Ubah Relawan</h3>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							<form method="post" action="<?php echo site_url(); ?>admin_manajemen/ubah_relawan/<?php echo $id_relawan; ?>" enctype="multipart/form-data">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<textarea class="form-control" name="alamat" rows="7"><?php echo $alamat; ?></textarea>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>" readonly />
								</div>
								<div class="form-group">
									<label>Nomor Telepon</label>
									<input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon" value="<?php echo $no_telp; ?>" />
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin">
										<option selected disabled>--Pilih Jenis Kelamin</option>
										<option <?php if($jenis_kelamin == '1') { echo 'selected'; }?> value="1">Laki-laki</option>
										<option <?php if($jenis_kelamin == '0') { echo 'selected'; }?> value="0">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="text" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo date('d-m-Y',strtotime($tgl_lahir)); ?>" />
								</div>
								<div class="form-group">
									<label>Kota</label>
									<input type="text" class="form-control" name="kota" placeholder="Kota" value="<?php echo $kota; ?>" />
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