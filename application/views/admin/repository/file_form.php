<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/layout/head.php"); ?>

<body class="animsition">
	<div class="page-wrapper">
		<!-- MENU SIDEBAR-->
		<?php $this->load->view("admin/layout/sidebar.php"); ?>
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
											<li class="list-inline-item">Form</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END BREADCRUMB-->
			<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
			<?php endif; ?>
			<div class="card">
				<div class="card-header">
				<a href="<?php echo base_url('admin/repositori');?>">
					<button class="btn btn-icon"><i class="zmdi zmdi-chevron-left"></i></button></a>
					<strong>Tambah</strong> File
				</div>
				<div class="card-body card-block">
					<form action="<?php base_url('admin/file/add/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="number" class=" form-control-label">Nama File</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="nama_file" name="nama_file" placeholder="" class="form-control">
								<small class="form-text text-muted">Masukkan Nama File</small>
								<div class="invalid-feedback">
									<?php echo form_error('nama_file') ?>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="nama-input" class=" form-control-label">Keterangan</label>
							</div>
							<div class="col-12 col-md-9">
								<textarea type="text" id="keterangan" name="keterangan" placeholder="" class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>">
								</textarea>
								<small class="help-block form-text">Masukkan Keterangan</small>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="select" class=" form-control-label">File</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="file" name="file">
								<small class="help-block form-text">Masukkan File</small>
							</div>
						</div>
						
						
						<div class="card-footer">
							<button type="submit" class="btn btn-primary btn-sm">
								Submit
							</button>
							<button type="reset" class="btn btn-danger btn-sm">
								Reset
							</button>
						</div>
					</form>
				</div>
			</div>

		</div>

		<?php $this->load->view("admin/layout/js.php"); ?>

</body>

</html>
<!-- end document-->