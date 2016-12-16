			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<h3>Forum Komentar</h3>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							<div class="table-responsive">
								<table class="table-condensed" border="0">
									<tbody>
										<?php
											$this->m_forum->set_id_forum($this->uri->segment(3));
											$query = $this->m_forum->tampil_forum_by_id_forum();
											if($query->num_rows()){
												$row = $query->row();
										?>
										<tr>
											<th style="width:100px;">Judul</th>
											<th style="width:10px;">:</th>
											<th style="text-align:left;"><?php echo $row->judul; ?></th>
										</tr>
										<tr>
											<th>Deskripsi</th>
											<th>:</th>
											<th><?php echo $row->deskripsi; ?></th>
										</tr>
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
							<hr />
							<table class="table-condensed" border="0" width="100%">
								<tbody>
									<?php
										$this->m_forum_komentar->set_id_forum($this->uri->segment(3));
										$query = $this->m_forum_komentar->tampil_forum_komentar_by_id_forum();
										foreach($query->result() as $row){
									?>
									<tr>
										<td style="text-align:left;"><i>Komentar dari : <?php echo $row->nama; ?></i></td>
										<td style="text-align:right;"><div class="badge"><?php echo date('d-m-Y',strtotime($row->tgl_komentar)); ?></div></td>
									</tr>
									<tr>
										<td style="text-align:left;"><?php echo $row->komentar; ?></td>
										<td style="text-align:right;">
											<a class="hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="hapus_<?php echo $row->id_forum_komentar; ?>" href="#">Hapus</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" ><hr/></td>
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
				<p>Apakah anda yakin ingin menghapus komentar ?</p>
				<input type="hidden" name="id_forum_komentar" id="id_forum_komentar">
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
            $('#id_forum_komentar').val(id);
        });
		
		$('#hapus').click(function() {
			window.location = '<?php echo site_url();?>admin_forum/hapus_forum_komentar/' + $('#id_forum_komentar').val();
		});
		
		$('#table').DataTable();
		
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
	});
</script>