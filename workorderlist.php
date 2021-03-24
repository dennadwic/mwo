<?php 
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include "include/header.php" ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Management Work Order</title>
  </head>
  <body>
    <?php include "include/wrapper.php" ?>
    <div class="content-wrapper">
      <div class="main-panel">
        <div class="content">
          <div class="page-inner">
            <div class="page-header">
              <div class="col-sm-6">
                <h4 class="page-title">Work Order List</h4>
              </div>
          
              <div class="col-sm-6">
                <ul class="breadcrumbs float-sm-right">
                  <li class="nav-home">
                    <a href="index.html">
                      <i class="flaticon-home"></i>
                    </a>
                  </li>
                  <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                  </li>
                  <li class="nav-item">
                    <a href="#">Work Order List</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<button class="btn btn-primary btn-round mr-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Row
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Masukkan</span> 
														<span class="fw-light">
															Data
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>
													<form>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>WO Request#</label>
																	<input id="addWOReq" type="text" class="form-control" placeholder="  1" disabled>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Status</label>
																	<input id="addStatus" type="text" class="form-control" placeholder="  Open" disabled>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Nama Requester</label>
																	<input id="addNama" type="text" class="form-control" placeholder="Masukkan Nama">
																</div>
															</div>
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Departemen</label>
                                  <select class="form-control" id="addDep">
                                    <option>--pilih--</option>
                                    <option>TIK</option>
                                    <option>HRD</option>
                                    <option>GEA</option>
                                    <option>LEGAL</option>
                                    <option>FET</option>
                                    <option>LOG</option>
                                    <option>PGH</option>
                                    <option>AAT</option>
                                    <option>KEU</option>
                                    <option>TAX</option>
                                  </select>
                                </div>
															</div>
                              <div class="col-md-6">
                              <div class="form-group form-group-default">
                                  <label>Kategori Masalah</label>
                                  <select class="form-control" id="addKatMas">
                                    <option>--pilih--</option>
                                    <option>Hardware</option>
                                    <option>Software</option>
                                    <option>Network</option>
                                    <option>Email</option>
                                  </select>
                                </div>
															</div>
                              <div class="col-md-6">
																<div class="form-group form-group-default">
                                  <div class="input-group">
                                      <label>Tanggal Permintaan:</label>
                                      <input type="text" class="datepicker" id="addTanggal">
                                    
                                  </div>
																</div>
                              </div>
                              <div class="col-md-12">
																<div class="form-group form-group-default">
																	<label>Keterangan Masalah</label>
																	<textarea class="form-control" id="addComment"></textarea>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>WO Request#</th>
													<th>Status</th>
													<th>Nama Requester</th>
                          <th>Departement</th>
                          <th>Kategori Masalah</th>
                          <th>Date Tanggal Permintaan</th>
                          <th>Keterangan Masalah</th>
                          <th>Tindakan Perbaikan</th>
                          <th>Personal TIK</th>
                          <th>Tanggal Penyelesaian</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Open</td>
													<td>Denna</td>
                          <td>TIK</td>
                          <td>Hardware</td>
                          <td>15/03/2021</td>
                          <td>Komputer tidak mau nyala</td>
                          <td>Komputer tidak mau nyala</td>
                          <td>Denna</td>
                          <td>15/03/2021</td>
                          <td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
											</tbody>
											<thead>
												<tr>
													<td>2</td>
													<td>Open</td>
													<td>Dwi</td>
                          <td>TIK</td>
                          <td>Hardware</td>
                          <td>15/03/2021</td>
                          <td>Komputer tidak bisa masuk windows</td>
                          <td>Komputer tidak bisa masuk windows</td>
                          <td>Denna</td>
                          <td>15/03/2021</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
                      </thead>
										</table>
									</div>
								</div>
							</div>
						</div>
          </div>
        </div>
      </div>
    </div>

    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 10,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addWOReq").val(),
					$("#addStatus").val(),
					$("#addNama").val(),
          $("#addDep").val(),
          $("#addKatMas").val(),
          $("#addTanggal").val(),
          $("#addComment").val(),
          $(" ").val(),
          $(" ").val(),
          $(" ").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
  <script type="text/javascript">
	  $('.datepicker').datepicker();
	</script>

  </body>
</html>