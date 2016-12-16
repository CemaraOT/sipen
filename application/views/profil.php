		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p class="lead">Profil</p>
					<div class="list-group">
						<?php
							$query = $this->m_kategori->tampil_kategori();
							foreach($query->result() as $row){
						?>
						<a href="#" class="list-group-item"><?php echo ucfirst($row->nama_kategori); ?></a>
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-md-9" style="border-left:1px solid #f3f3f3;">
					<div class="row-fluid">
						<form method="post" action="<?php echo site_url(); ?>profil/ubah_profil/<?php echo $this->session->userdata('id_member'); ?>" enctype="multipart/form-data">
							<?php
								$this->m_member->set_id_member($this->session->userdata('id_member'));
								$query = $this->m_member->tampil_member_by_id_member();
								if($query->num_rows()){
									$row = $query->row();
							?>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $row->nama; ?>" />
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<textarea class="form-control" name="alamat" rows="5"><?php echo $row->alamat; ?></textarea>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row->email; ?>" readonly />
							</div>
							<div class="form-group">
								<label>Nomor Telepon</label>
								<input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon" value="<?php echo $row->no_telp; ?>" />
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select class="form-control" name="jenis_kelamin">
									<option selected disabled>--Pilih Jenis Kelamin</option>
									<option <?php if($row->jenis_kelamin == '1') { echo 'selected'; }?> value="1">Laki-laki</option>
									<option <?php if($row->jenis_kelamin == '0') { echo 'selected'; }?> value="0">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo date('d-m-Y',strtotime($row->tgl_lahir)); ?>" />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $row->password; ?>"/>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
							<?php
								}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<hr/>
			<footer>
				<div class="row">
					<div class="col-lg-12">
						<p>Copyright &copy; Sistem Informasi Peduli Negeriku 2016.</p>
					</div>
				</div>
			</footer>
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