		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p class="lead">Detail Peta</p>
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
						<?php
							$this->m_peta->set_id_peta($this->uri->segment(3));
							$query = $this->m_peta->tampil_peta_by_id_peta();
							if($query->num_rows()){
								$row = $query->row();
						?>
						<h3 class="page-header text-muted" style="margin-top:5px;"><?php echo ucfirst($row->judul); ?></h3>
						<img class="img-thumbnail center-block" src="<?php echo base_url(); ?>assets/img/peta/<?php echo $row->gambar; ?>" alt="" width="400">
						<hr />
						<h4>
							<a href="<?php echo site_url(); ?>peta/<?php echo $row->id_kategori; ?>/<?php echo $row->id_peta; ?>"><?php echo $row->judul; ?></a>
						</h4>
						<hr />
						<p align="justify"><?php echo $row->deskripsi; ?></p>
						<hr />
						<div class="ratings">
							<p class="pull-right"><span class="badge">Sumber : <?php echo $row->sumber;?></span></p>
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