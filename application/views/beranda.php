		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p class="lead">Beranda</p>
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
				<div class="col-md-9">
					<div class="row carousel-holder">
						<div class="col-md-12">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img class="slide-image" src="<?php echo base_url(); ?>assets/img/banner/1.jpg" alt="">
									</div>
									<div class="item">
										<img class="slide-image" src="<?php echo base_url(); ?>assets/img/banner/2.jpg" alt="">
									</div>
									<div class="item">
										<img class="slide-image" src="<?php echo base_url(); ?>assets/img/banner/3.jpg" alt="">
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>
						</div>
					</div>
					<h3 class="page-header">Berita Terbaru</h3>
					<div class="row">
						<?php
							$query = $this->m_berita->tampil_berita_desc_limit_3();
							foreach($query->result() as $row){
						?>
						<div class="col-md-4">
							<div class="thumbnail">
								<h4 style="padding:5px 0px 0px 10px; min-height:80px;">
									<a href="<?php echo site_url(); ?>berita/<?php echo $row->id_kategori; ?>/<?php echo $row->id_berita; ?>"><?php echo $row->judul; ?></a>
								</h4>
								<img width="100%"src="<?php echo base_url(); ?>assets/img/berita/<?php echo $row->gambar; ?>" alt="">		
								<hr style="margin-top:5px;"/>
								<div class="caption" style="overflow-y:scroll;">
									<p align="justify"><?php echo $row->deskripsi; ?></p>
								</div>
								<hr />
								<div class="ratings">
									<p class="pull-right" style="font-size:10pt;"><i><?php echo date('d-m-Y',strtotime($row->tgl_post)); ?></i></p>
									<p style="font-size:10pt;"><b><?php echo $row->nama_kategori; ?></b></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
					<h3 class="page-header">Tips Terbaru</h3>
					<div class="row">
						<?php
							$query = $this->m_tips->tampil_tips_desc_limit_3();
							foreach($query->result() as $row){
						?>
						<div class="col-md-4">
							<div class="thumbnail">
								<h4 style="padding:5px 0px 0px 10px; min-height:80px;">
									<a href="<?php echo site_url(); ?>tips/<?php echo $row->id_kategori; ?>/<?php echo $row->id_tips; ?>"><?php echo $row->judul; ?></a>
								</h4>
								<img width="100%"src="<?php echo base_url(); ?>assets/img/tips/<?php echo $row->gambar; ?>" alt="">		
								<hr style="margin-top:5px;"/>
								<div class="caption" style="overflow-y:scroll;">
									<p align="justify"><?php echo $row->deskripsi; ?></p>
								</div>
								<hr />
								<div class="ratings">
									<p class="pull-right" style="font-size:10pt;"><i>Sumber : <?php echo $row->sumber; ?></i></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
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