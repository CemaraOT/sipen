		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p class="lead">Tips</p>
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
						<?php
							$this->m_tips->set_id_kategori($this->uri->segment(2));
							$query = $this->m_tips->tampil_tips_by_id_kategori();
							foreach($query->result() as $row){
						?>
						<div class="col-md-4">
							<div class="thumbnail">
								<h4 style="padding:5px 0px 0px 10px;">
									<a href="<?php echo site_url(); ?>tips/<?php echo $row->id_kategori; ?>/<?php echo $row->id_tips; ?>"><?php echo $row->judul; ?></a>
								</h4>
								<img width="100%"src="<?php echo base_url(); ?>assets/img/tips/<?php echo $row->gambar; ?>" alt="">		
								<hr style="margin-top:5px;"/>
								<div class="caption" style="overflow-y:scroll;">
									<p align="justify"><?php echo $row->deskripsi; ?></p>
								</div>
								<hr />
								<div class="ratings">
									<p class="pull-right"><i>Tanggal Posting : <span class="badge"><?php echo date('d-m-Y',strtotime($row->tgl_post)); ?></i></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<?php
							}
						?>
						<div class="clearfix"></div>
						<hr />
						<nav class="text-center" aria-label="Page navigation">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
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