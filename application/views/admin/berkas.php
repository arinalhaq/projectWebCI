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
										</ul>
									</div>
									<button class="au-btn au-btn-icon au-btn--green">
										<i class="zmdi zmdi-plus"></i>add item</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END BREADCRUMB-->
			<!-- USER DATA-->
			<div class="user-data m-b-40">
				<h3 class="title-3 m-b-30">
					<i class="zmdi zmdi-account"></i>tabel berkas</h3>
				<div class="table-responsive table--no-card m-b-30">
					<table class="table table-borderless table-striped table-earning" id="datatable">
						<thead>
							<tr>
								<th>ID Berkas</th>
								<!--<th>ID Jenis Berkas</th>-->
								<th>Judul Berkas</th>
								<!--<th>Deskripsi</th>-->
								<th>ID Kategori</th>
								<th>ID Dosen</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
                        <?php foreach($berkas as $row) : ?>
							<tr>
								<td><?php echo $row->ID_BERKAS?></td>
								<!--<td><?php //echo $row->ID_JENIS_BERKAS?></td>-->
								<td><?php echo $row->JUDUL_BERKAS?></td>
								<!--<td><?php //echo $row->DESKRIPSI?></td>-->
								<td><?php echo $row->ID_KATEGORI?></td>
								<td><?php echo $row->ID_DOSEN?></td>
								<td>
									<button type="submit" name="ubah" class="btn btn-warning btn-sm">
				                        <i class="fa fa-dot-circle-o"></i> Ubah
				                    </button>
				                    <button type="submit" name="hapus" class="btn btn-danger btn-sm">
				                        <i class="fa fa-ban"></i> Hapus
				                    </button>
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