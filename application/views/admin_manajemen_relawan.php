			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<h3>Manajemen Relawan</h3>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							<div class="table-responsive">
								<table class="table table-bordered table-condensed display" id="table">
									<thead>
										<tr>
											<th>ID Relawan</th>
											<th>Nama</th>
											<th>Nomor Telepon</th>
											<th>Modifikasi</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$query = $this->m_relawan->tampil_relawan();
											foreach($query->result() as $row){
										?>
										<tr>
											<td><?php echo $row->id_relawan; ?></td>
											<td><?php echo $row->nama; ?></td>
											<td><?php echo $row->no_telp; ?></td>
											<td>
												<div class="text-center">
													<button type="button" class="btn btn-info btn-rounded" style="width:40px; height:40px;"
														onclick="window.location.href='<?php echo site_url(); ?>admin_manajemen/relawan/ubah/<?php echo $row->id_relawan; ?>'">
														<i class="fa fa-edit" style="font-size:12pt;"></i>
													</button>
													<button type="button" class="btn btn-danger btn-rounded hapus" style="width:40px; height:40px;"
														title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="hapus_<?php echo $row->id_relawan; ?>">
														<i class="fa fa-trash" style="font-size:12pt;"></i>
													</button>
												</div>
											</td>
										</tr>
										<?php
											}
										?>
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
				<p>Apakah anda yakin ingin menghapus relawan ?</p>
				<input type="hidden" name="id_relawan" id="id_relawan">
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
            $('#id_relawan').val(id);
        });
		
		$('#hapus').click(function() {
			window.location = '<?php echo site_url();?>admin_manajemen/hapus_relawan/' + $('#id_relawan').val();
		});
		
		$('#table').DataTable();
		
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
	});
</script>