			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<h3>Kategori Bencana</h3>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								<a href="<?php echo site_url(); ?>admin_kategori/tambah"><i class="fa fa-plus"></i> Tambah</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							<div class="table-responsive">
								<table class="table table-bordered table-condensed display" id="table">
									<thead>
										<tr>
											<th>ID Kategori Bencana</th>
											<th>Nama Kategori</th>
											<th>Modifikasi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Banjir</td>
											<td>
												<div class="text-center">
													<button type="button" class="btn btn-info btn-rounded" style="width:40px; height:40px;"
														onclick="window.location.href='<?php echo site_url(); ?>admin_kategori/ubah/'">
														<i class="fa fa-edit" style="font-size:12pt;"></i>
													</button>
													<button type="button" class="btn btn-danger btn-rounded hapus" style="width:40px; height:40px;"
														title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="hapus_">
														<i class="fa fa-trash" style="font-size:12pt;"></i>
													</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<!--  KONFIRMASI  -->
<div class="modal fade" id="modal_konfirmasi">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">
					&times;
				</button>
				<h4 class="modal-title">Konfirmasi</h4>
			</div>
			<div class="modal-body">
				<p>Apakah anda yakin ingin menghapus kategori ?</p>
				<input type="hidden" name="id_kategori" id="id_kategori">
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" id="hapus"> Ya</button>
				<button class="btn btn-default" data-dismiss="modal"> Tidak</button>
			</div>
		</div>
	</div>
</div>
<!--  END KONFIRMASI  -->

<!-- /. JAVASCRIPT  --> 
<script type="text/javascript">
	$(document).ready(function () {
		
		$('.hapus').click(function() {
            var id=this.id.substr(6);
            $('#id_kategori').val(id);
        });
		
		$('#hapus').click(function() {
			window.location = '<?php echo site_url();?>admin_kategori/hapus/' + $('#id_kategori').val();
		});
		
		$('#table').DataTable();
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
	});
</script>