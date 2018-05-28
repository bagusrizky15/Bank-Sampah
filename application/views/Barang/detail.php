

<!-- Container-fluid starts -->
<div class="container-fluid">
	<!-- Main content starts -->
	<div class="tab-list">
		<!-- Row Starts -->
		<div class="row">
			<div class="col-lg-12 p-0">
				<div class="main-header">

				</div>
			</div>
		</div>
		<!-- Row end -->
		<!-- Row start -->

		<!-- Row end -->
		<!-- Row start -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Row start -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-header-text">Edit Nasabah</h5>

							</div>
							<div class="card-block">
								<div class="row">

									<form method="post" action="<?= base_url('Barang/update')?>">
									<?php foreach ($data_barang as $row): ?>



									<div class="col-sm-6">
										<div class="md-input-wrapper">
											<input value="<?= $row['nama_barang'] ?>" type="text" name="nama_barang" class="md-form-control md-static" />
											<label>Nama Nasabah</label>
										</div>
									</div>
								</div>


								<div class="md-input-wrapper">
									<input type="text" value="<?= $row['harga_barang'] ?>" name="harga_barang" class="md-form-control md-static" />
									<label>Alamat</label>
								</div>


								<input hidden value="<?= $row['id_barang'] ?>" type="text" name="id_barang"/>
								<?php endforeach; ?>
								<button type="submit " value="submit" class="btn btn-flat flat-success txt-muted waves-effect">
									Edit
								</button>
								</form>

							</div>
						</div>
					</div>
				</div>
				<!-- Row end -->

			</div>
		</div>
		<!-- Row start -->

		<!-- loader ends -->
	</div>
	<!-- Row end -->

</div>
<!-- Container-fluid ends -->


