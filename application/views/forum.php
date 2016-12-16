		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p class="lead">Forum</p>
					<div class="list-group">
						<a href="#" class="list-group-item">Category 1</a>
						<a href="#" class="list-group-item">Category 2</a>
						<a href="#" class="list-group-item">Category 3</a>
					</div>
				</div>
				<div class="col-md-9" style="border-left:1px solid #f3f3f3;">
					<div class="row-fluid">
						<?php
							$this->m_kategori->set_id_kategori($this->uri->segment(2));
							$query = $this->m_kategori->tampil_kategori_by_id_kategori();
							if($query->num_rows()){
								$row = $query->row();
						?>
						<h3 class="page-header text-muted" style="margin-top:5px;"><?php echo ucfirst($row->nama_kategori); ?></h3>
						<?php
							}
						?>
					</div>
					<div class="row-fluid">
						<div class="table-responsive">
							<table class="table" id="table">
								<thead>
									<th>Judul</th>
									<th width="200px;">Tanggal Posting</th>
								</thead>
								<tbody>
									<?php
										$this->m_forum->set_id_kategori($this->uri->segment(2));
										$query = $this->m_forum->tampil_forum_by_id_kategori();
										foreach($query->result() as $row){
									?>
									<tr>
										<td><a href="<?php echo site_url(); ?>forum/<?php echo $row->id_kategori; ?>/<?php echo $row->id_forum; ?>"><?php echo $row->judul; ?></a></td>
										<td><i><div class="badge"><?php echo date('d-m-Y',strtotime($row->tgl_post)); ?></div></i></td>
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
		$('#table').DataTable();
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
		<?php if($this->session->flashdata('error')){ ?>
			alert('<?php echo $this->session->flashdata('error'); ?>');
		<?php } ?>
	});
</script>