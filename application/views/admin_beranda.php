			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="row-fluid" style="padding-top:20px;">
							<div class="pull-left">
								<h3>Beranda</h3>
							</div>
							<div class="pull-right" style="padding-top:20px;">
								
							</div>
							<div class="clearfix"></div>
						</div>
						<hr style="padding:1%; margin:0;"/>
						<div class="row-fluid">
							
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