<div class="modal fade modal-flex" id="AddOrder" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title">Add Credit</h5>
			</div>
			<!-- end of modal-header -->
			<div class="modal-body">

			<form action="<?= base_url('Credit/addCredit') ?>" method="post">

				<div class="form-group col-1">
					<div class="md-input-wrapper">
						<select name="id_barang" id="id_barang" onchange="getNominal(this.value)">

							<?php foreach ($list_barang as $row1) : ?>
								<option value="<?= $row1['id_barang'] ?>"><?= $row1['nama_barang'] ?></option>
							<?php endforeach; ?>

						</select>

					</div>
				</div>

				<div class="form-group col-1">
					<div class="md-input-wrapper">
						<input type="text" onchange="jumlahkan()" name="jumlah_barang" id="jumlah_barang" class="form-control floating-label md-form-control md-static" placeholder="">
						<label id="labeljmlbarang">Jumlah Barang</label>
					</div>
				</div>

				<div class="form-group col-1">
					<div class="md-input-wrapper">
						<select name="id_nasabah" id="id_nasabah">

							<?php foreach ($list_nasabah as $row2) : ?>
								<option value="<?= $row2['id_nasabah'] ?>"><?= $row2['nama_nasabah'] ?></option>
							<?php endforeach; ?>

						</select>

					</div>
				</div>


				<div class="form-group col-1">
					<div class="md-input-wrapper">
						<input type="text" name="jumlah_credit" id="jumlah_credit" class="form-control floating-label md-form-control md-static" placeholder="">
						<label id="labeljumlah">Jumlah Credit</label>
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
								<h5 class="card-header-text">Data Credit</h5>
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
												<th>Tanggal Credit</th>
												<th>Nama Barang</th>
												<th>Nama Nasabah</th>
												<th>Jumlah Credit</th>
												<th>Action</th>

											</tr>
											</thead>
											<tbody>
											<?php $i =1; foreach ($list_credit as $row) :?>
											<tr>
												<td><?= $i++ ?></td>
												<td><?= $row['tanggal_credit'] ?></td>
												<td><?= $row['nama_barang'] ?></td>
												<td><?= $row['nama_nasabah'] ?></td>
												<td><?= $row['jumlah_credit'] ?></td>

												<td>


													<a href="<?= base_url('Credit/delete/'); echo $row['id_log_credit']; ?>" >
														<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".Hapus">
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


	var idC;

	function getNominal(id) {
		idC = id;
		 //alert(idC);
		$.ajax({
			url: "<?php echo base_url('Credit/getNominal'); ?>",
			type: "post",
			data: {id:id},
			cache: false,
			success: function (response) {
				// alert(response);
				if(response != ""){
					response = JSON.parse(response);
					document.getElementById("jumlah_credit").value = response[0]['harga_barang'];

					if(document.getElementById("id_barang").value == 1){
						document.getElementById("jumlah_credit").readOnly = false;
						document.getElementById("jumlah_barang").hidden = true;
						document.getElementById("labeljmlbarang").hidden = true;
						document.getElementById("labeljumlah").innerHTML = 'Nominal';
					}else{
						document.getElementById("jumlah_credit").readOnly = true;
						document.getElementById("jumlah_barang").hidden = false;
						document.getElementById("labeljmlbarang").hidden = false;
					}

				}else{
					alert("terjadi kesalahan");
				}
			}
		});
	}

	function jumlahkan() {

		document.getElementById("jumlah_credit").value = document.getElementById("jumlah_credit").value * document.getElementById("jumlah_barang").value;

	}
</script>
