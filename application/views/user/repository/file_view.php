<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/layout/head.php"); ?>

<body class="animsition">
	<div class="page-wrapper">
		<!-- MENU SIDEBAR-->
		<?php $this->load->view("user/repository/sidebar.php"); ?>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container2">
			<!-- HEADER DESKTOP-->
			<?php $this->load->view("admin/layout/navbar.php"); ?>
			<!-- END HEADER DESKTOP-->

			<!-- BREADCRUMB-->
			<section class="au-breadcrumb m-t-75">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="au-breadcrumb-content">
									<div class="au-breadcrumb-left">
										<span class="au-breadcrumb-span">You are here:</span>
										<ul class="list-unstyled list-inline au-breadcrumb__list">
											<li class="list-inline-item active">
												<a href="<?php echo base_url();?>">Home</a>
											</li>
											<li class="list-inline-item seprate">
												<span>/</span>
											</li>
											<li class="list-inline-item">Dosen</li>
											<li class="list-inline-item seprate">
												<span>/</span>
											</li>
											<li class="list-inline-item">Repository</li>
											<li class="list-inline-item seprate">
												<span>/</span>
											</li>
											<li class="list-inline-item">File</li>
										</ul>
									</div>
									<div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END BREADCRUMB-->
			<div class="card">
				<div class="card-header">
					<a href="<?php echo base_url('user/repositori/view/'.$file->ID_BERKAS);?>">
						<button class="btn btn-icon"><i class="zmdi zmdi-chevron-left"></i></button></a>
					<strong>Data</strong> File
				</div>
				<div class="card-body card-block">
					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="number" class=" form-control-label">Nama File</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $file->NAMA_FILE?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="select" class=" form-control-label">Keterangan</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $file->KETERANGAN?>
							</div>
						</div>

						<div class="row form-group">
							<div class="col col-md-3">
								<a href="<?php echo base_url('user/file/download/'.$file->ID_UPLOAD)?>" class="btn btn-primary btn-sm">
									Download
								</a>
								<a onclick="deleteConfirm('<?php echo base_url('user/berkas/delfile/'.$file->ID_UPLOAD) ?>')" href="#!" class="btn btn-danger btn-sm">
									Hapus
								</a>
							</div>
							<!--
							<div class="col-12 col-md-9">
								<?php echo $berkas->DESKRIPSI?>
							</div> -->
						</div>

					</form>
				</div>
			</div>

			<!-- USER DATA-->

			<?php $this->load->view("admin/layout/footer.php"); ?>
			<!-- END PAGE CONTAINER-->
		</div>

	</div>

	<?php $this->load->view("admin/layout/modal.php"); ?>
	<?php $this->load->view("admin/layout/js.php"); ?>

</body>

</html>
<!-- end document-->
