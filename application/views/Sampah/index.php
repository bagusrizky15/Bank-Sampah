<div class="modal fade modal-flex" id="AddOrder" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title">Add Nasabah</h5>
			</div>
			<!-- end of modal-header -->
			<div class="modal-body">

			<form action="<?= base_url('Sampah/addSampah') ?>" method="post">

				<div class="form-group col-1">
					<div class="md-input-wrapper">
						<input type="text" name="nama_Sampah" class="form-control floating-label md-form-control md-static" placeholder="">
						<label>Nama Sampah</label>
					</div>
				</div>

				<div class="form-group col-1">
					<div class="md-input-wrapper">
						<input type="text" name="harga_Sampah" class="form-control floating-label md-form-control md-static" placeholder="">
						<label>Harga Sampah</label>
					</div>
				</div>

				<button type="submit" value="submit" class="btn btn-flat flat-default txt-muted waves-effect">
						Add
					</button>

				</form>
			</div>
			<!-- end of modal-body -->


		</div>
		<!-- end of modal-content -->
	</div>
	<!-- end of modal-dialog -->
</div>

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
								<h5 class="card-header-text">Data Sampah</h5>
								<button data-toggle="modal" data-target="#AddOrder" style="margin-left: 10px" type="button" class="btn btn-primary btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont-home ">
									<i class="icofont icofont-plus "></i>
								</button>
							</div>
							<div class="card-block">
								<div class="row">
									<div class="col-sm-12 table-responsive">
										<table id="table_data" class="table table-striped table-bordered data">

											<thead>
											<tr>

												<th>#</th>
												<th>Nama Sampah</th>
												<th>Harga</th>
												<th>Action</th>

											</tr>
											</thead>
											<tbody>
											<?php $i =1; foreach ($list_Sampah as $row) :?>
											<tr>
												<td><?= $i++ ?></td>
												<td><?= $row['nama_sampah'] ?></td>
												<td><?= $row['harga_sampah'] ?></td>

												<td>


													<a href="<?= base_url('Sampah/detail/'); echo $row['id_sampah']; ?>">
														<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".Edit Order">
														<i class="icofont icofont-pen-alt-2"></i>
														</button>
													</a>

													<a href="<?= base_url('Sampah/delete/'); echo $row['id_sampah']; ?>" >
														<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".Hapus Order">
														<i class="icofont icofont-trash"></i>
														</button>
													</a>

												</td>

											</tr>
											<?php endforeach; ?>
											</tbody>
										</table>



									</div>
								</div>
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

<script>
	$(document).ready( function () {
		$('#table_data').DataTable();
	} );
</script>
