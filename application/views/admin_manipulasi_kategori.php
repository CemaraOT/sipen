			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<?php if($this->uri->segment(2) == 'tambah'){ ?>
								<h3>Tambah Kategori</h3>
								<?php }elseif($this->uri->segment(2) == 'ubah'){?>
								<h3>Ubah Kategori</h3>
								<?php } ?>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							<?php if($this->uri->segment(2) == 'tambah'){ ?>
							<form method="post" action="<?php echo site_url(); ?>admin_kategori/tambah_kategori">
							<?php }elseif($this->uri->segment(2) == 'ubah'){?>
							<form method="post" action="<?php echo site_url(); ?>admin_kategori/ubah_kategori/<?php echo $id_kategori; ?>">
							<?php } ?>
								<div class="form-group">
									<label>Nama Kategori</label>
									<input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="<?php echo $nama_kategori; ?>">
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