 <div class="col-lg-12">
 	<div class="card">
 		<div class="card-header bg-white py-2">
 			<a href="<?=base_url('Pustakawan/tambah')?>" class="btn btn-md btn-info text-white waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a>
 			<div class="card-widgets">
 				
 				<!-- <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
 				<a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a> -->
 				<!-- <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
 				<!-- <a class="btn btn-md btn-success waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a> -->
 			</div>
 			<h5 class="card-title mb-0 text-dark">Data Pustakawan</h5>
 		</div>
 		<div id="cardCollpase8" class="collapse show">
 			<div class="card-body">
 				
 				<div class="table-responsive">
 					<table class="table table-striped table-condensed dt-responsive nowrap w-100" id="mytable">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Kode</th>
 								<th>Nama</th>
 								<th>No.Telepon</th>
 								<th style="text-align: center;">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php
 							$no =1;
 							foreach ($pustakawan->result() as $row) { ?>
 								
 								<tr>
 									<td><?=$no++?></td>
 									<td><?=$row->KodePustakawan?></td>
 									<td><?=$row->NamaPustakawan?></td>
 									<td><?=$row->NomorTelepon?></td>
 									<td style="text-align: center;">
 										<a href="<?=base_url('Pustakawan/edit/'.$row->KodePustakawan)?>" class="btn btn-warning btn-md">Edit</a>
 										<a href="<?=base_url('Pustakawan/hapus/'.$row->KodePustakawan)?>" class="btn btn-danger btn-md" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
 									</td>
 								</tr>

 							<?php } ?>
 						</tbody>
 					</table>
 				</div>

 			</div>
 		</div>
 	</div>
 </div>