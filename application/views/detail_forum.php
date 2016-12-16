		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p class="lead">Detail Forum</p>
					<div class="list-group">
						<a href="#" class="list-group-item">Category 1</a>
						<a href="#" class="list-group-item">Category 2</a>
						<a href="#" class="list-group-item">Category 3</a>
					</div>
				</div>
				<div class="col-md-9" style="border-left:1px solid #f3f3f3;">
					<div class="row-fluid">
						<?php
							$this->m_forum->set_id_forum($this->uri->segment(3));
							$query = $this->m_forum->tampil_forum_by_id_forum();
							if($query->num_rows()){
								$row = $query->row();
						?>
						<h3 class="page-header text-muted" style="margin-top:5px;"><?php echo ucfirst($row->judul); ?></h3>
						<div class="well">
							<p align="justify"><?php echo $row->deskripsi; ?></p>
						</div>
						<div class="ratings">
							<p class="pull-right"><i>Tanggal Posting : <?php echo $row->tgl_post;?></i></p>
						</div>
						<div class="clearfix"></div>
						<hr />		
						<?php
							}
						?>
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
									<?php
										if($row->id_member == $this->session->userdata('id_member')){
									?>
									<td style="text-align:right;">
										<a class="hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="hapus_<?php echo $row->id_forum_komentar; ?>" href="#">Hapus</a>
									</td>
									<?php
										}
									?>
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
					<div class="row-fluid">
						<form method="post" action="<?php echo site_url(); ?>admin_forum/tambah_forum_komentar">
							<div class="form-group">
								<label>Tambahkan Komentar</label>
								<textarea class="form-control" name="komentar" rows="5"></textarea>
							</div>
							<div class="modal-footer">
								<input type="hidden" name="id_kategori" value="<?php echo $this->uri->segment(2); ?>">
								<input type="hidden" name="id_forum" value="<?php echo $this->uri->segment(3); ?>">
								<input type="submit" class="btn btn-primary" value="Kirim">
							</div>
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
			window.location = '<?php echo site_url();?>admin_forum/hapus_forum_komentar_front/' + $('#id_forum_komentar').val();
		});
		
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
		<?php if($this->session->flashdata('error')){ ?>
			alert('<?php echo $this->session->flashdata('error'); ?>');
		<?php } ?>
	});
</script>