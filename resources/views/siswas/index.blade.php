@extends('template.app')

@section('main2')	
                    <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header" style="background-color: #45aaf2; font-size: 30px;">
									<h4 class="card-title text-white fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 20px;">Riwayat Pembayaran (nama siswa)</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-hover" >
											<thead>
												<tr>
													<th>NIPD</th>
													<th>Tanggal Bayar</th>
													<th>Jumlah Bayar</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>NIPD</th>
													<th>Tanggal Bayar</th>
													<th>Jumlah Bayar</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>451324</td>
													<td>4/11/2021</td>
													<td>500000</td>
												</tr>
												<tr>
													<td>481544</td>
													<td>5/11/2021</td>
													<td>500000</td>
												</tr>
												<tr>
													<td>428546</td>
													<td>5/11/2021</td>
													<td>500000</td>
												</tr>
												<tr>
													<td>474563</td>
													<td>5/11/2021</td>
													<td>500000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
 


@endsection
