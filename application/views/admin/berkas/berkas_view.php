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
											<li class="list-inline-item">Berkas</li>
											<li class="list-inline-item seprate">
												<span>/</span>
											</li>
											<li class="list-inline-item">view</li>
										</ul>
									</div>
									<div>
										<button type="submit" class="btn btn-primary btn-sm">
											Submit
										</button>
										<button type="reset" class="btn btn-danger btn-sm">
											Reset
										</button>
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
					<a href="<?php echo base_url('admin/berkas');?>">
						<button class="btn btn-icon"><i class="zmdi zmdi-chevron-left"></i></button></a>
					<strong>Data</strong> Berkas
				</div>
				<div class="card-body card-block">
					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="number" class=" form-control-label">Judul Berkas</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $berkas->JUDUL_BERKAS?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="select" class=" form-control-label">Dosen</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $this->dosen_model->getById($berkas->ID_DOSEN)->NAMA_DOSEN?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="select" class=" form-control-label">Kategori</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $this->kategori_model->getById($berkas->ID_KATEGORI)->NAMA_KATEGORI?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="select" class=" form-control-label">Jenis Berkas</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $this->jenis_berkas_model->getById($berkas->ID_JENIS_BERKAS)->NAMA_JENIS_BERKAS?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="tempat-input" class=" form-control-label">Deskripsi</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $berkas->DESKRIPSI?>
							</div>
						</div>
					</form>
				</div>
			</div>

		<!-- USER DATA-->
		<div class="user-data m-b-40">
				<h3 class="title-3 m-b-30">
					<i class="zmdi zmdi-account"></i>tabel dosen</h3>
				<div class="table-responsive table--no-card m-b-30">
					<table class="table table-borderless table-striped table-earning" id="datatable">
						<thead>
							<tr>
								<th>NIK</th>
								<th>Nama Dosen</th>
								<th>Program Studi</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($dosen as $row) : ?>
							<tr>
								<td>
									<?php echo $row->NIK?>
								</td>
								
								<td><a href="<?php echo base_url('dosen/view/').$row->ID_DOSEN?>" color="black">
									<?php echo $row->NAMA_DOSEN?></a>
								</td>
								<td>
									<?php echo $this->prodi_model->getById($row->ID_PRODI)->NAMA_PRODI?>
								</td>
								<td>
									<a href="<?php echo base_url('dosen/edit/'.$row->ID_DOSEN)?>">
										<button type="submit" name="ubah" class="btn btn-warning btn-sm">
											Ubah
										</button></a>
									<a onclick="deleteConfirm('<?php echo site_url('dosen/del/'.$row->ID_DOSEN) ?>')" href="#!"
									class="btn btn-danger btn-sm">
											Hapus
									</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<?php $this->load->view("admin/layout/footer.php"); ?>
				<!-- END PAGE CONTAINER-->
			</div>

		</div>

		<?php $this->load->view("admin/layout/js.php"); ?>

</body>

</html>
<!-- end document-->
