			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<?php if($this->uri->segment(2) == 'tambah'){ ?>
								<h3>Tambah Tips</h3>
								<?php }elseif($this->uri->segment(2) == 'ubah'){?>
								<h3>Ubah Tips</h3>
								<?php } ?>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							<?php if($this->uri->segment(2) == 'tambah'){ ?>
							<form method="post" action="<?php echo site_url(); ?>admin_tips/tambah_tips" enctype="multipart/form-data">
							<?php }elseif($this->uri->segment(2) == 'ubah'){?>
							<form method="post" action="<?php echo site_url(); ?>admin_tips/ubah_tips/<?php echo $id_tips; ?>" enctype="multipart/form-data">
							<?php } ?>
								<div class="form-group">
									<label>Kategori</label>
									<select class="form-control" name="id_kategori" <?php if($this->uri->segment(2) == 'ubah'){ echo 'disabled'; } ?>>
										<option disabled selected >--Pilih Kategori--</option>
										<?php
											$query = $this->m_kategori->tampil_kategori();
											foreach($query->result() as $row){
										?>
										<option <?php if($id_kategori == $row->id_kategori){ echo 'selected'; } ?> value="<?php echo $row->id_kategori; ?>" ><?php echo $row->nama_kategori; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label>Judul</label>
									<input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $judul; ?>">
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea  class="form-control" name="deskripsi" rows="10" ><?php echo $deskripsi; ?></textarea>
								</div>
								<div class="form-group">
									<label>Sumber</label>
									<input type="text" class="form-control" name="sumber" placeholder="Sumber" value="<?php echo $sumber; ?>">
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<?php if($this->uri->segment(2) == 'tambah'){ ?>
									<img class="img-thumbnail center-block" width="200" height="200" src="<?php echo base_url(); ?>assets/img/tips/no-image.png"/>
									<?php }elseif($this->uri->segment(2) == 'ubah'){ ?>
									<?php if($gambar == ''){?>
									<img class="img-thumbnail center-block" width="200" height="200" src="<?php echo base_url(); ?>assets/img/tips/no-image.png"/>
									<?php }else{ ?>
									<img class="img-thumbnail center-block" width="200" height="200" src="<?php echo base_url(); ?>assets/img/tips/<?php echo $gambar; ?>"/>
									<?php } ?>
									<?php } ?>
									<div class="panel panel-default" style="padding:0% 2%; margin-top:2%; color:grey; font-size:9pt; font-weight:bold;">
										<text>* ukuran gambar harus 650 x 360 pixel.</text><br/>
										<text>* format .jpg atau .png</text>
									</div>
									<input type="file" name="gambar" class="form-control" />
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
	});
</script>