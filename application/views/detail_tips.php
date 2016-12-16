		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p class="lead">Detail Tips</p>
					<div class="list-group">
						<a href="#" class="list-group-item">Category 1</a>
						<a href="#" class="list-group-item">Category 2</a>
						<a href="#" class="list-group-item">Category 3</a>
					</div>
				</div>
				<div class="col-md-9" style="border-left:1px solid #f3f3f3;">
					<div class="row-fluid">
						<?php
							$this->m_tips->set_id_tips($this->uri->segment(3));
							$query = $this->m_tips->tampil_tips_by_id_tips();
							if($query->num_rows()){
								$row = $query->row();
						?>
						<h3 class="page-header text-muted" style="margin-top:5px;"><?php echo ucfirst($row->judul); ?></h3>
						<img class="img-thumbnail center-block" src="<?php echo base_url(); ?>assets/img/tips/<?php echo $row->gambar; ?>" alt="" width="400">
						<hr />
						<div class="caption">
							<h4>
								<a href="<?php echo site_url(); ?>tips/<?php echo $row->id_kategori; ?>/<?php echo $row->id_tips; ?>"><?php echo $row->judul; ?></a>
							</h4>
							<hr />
							<p align="justify"><?php echo $row->deskripsi; ?></p>
						</div>
						<hr />
						<div class="ratings">
							<p class="pull-right"><span class="badge">Sumber : <?php echo $row->sumber;?></span></p>
							<i>Tanggal Posting : <?php echo date('d-m-Y',strtotime($row->tgl_post)); ?></i>
						</div>
						<div class="clearfix"></div>
						<?php
							}
						?>
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