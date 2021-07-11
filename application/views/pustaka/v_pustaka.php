 <div class="col-lg-12">
 	<div class="card">
 		<div class="card-header bg-white py-2">
 			<a href="<?=base_url('Pustaka/tambah')?>" class="btn btn-md btn-info text-white waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a>
 			<div class="card-widgets">
 				
 				<!-- <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
 				<a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a> -->
 				<!-- <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
 				<!-- <a class="btn btn-md btn-success waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a> -->
 			</div>
 			<h5 class="card-title mb-0 text-dark">Data Pustaka</h5>
 		</div>
 		<div id="cardCollpase8" class="collapse show">
 			<div class="card-body">
 				
 				<div class="table-responsive">
 					<table class="table table-striped table-condensed dt-responsive nowrap w-100" id="mytable">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Kode Pustaka</th>
 								<th>Judul</th>
 								<th>Pengarang</th>
 								<th>Penerbit</th>
 								<th>Tahun Terbit</th>
 								<th style="text-align: center;">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php
 							$no =1;
 							foreach ($pustaka->result() as $row) { ?>
 								
 								<tr>
 									<td><?=$no++?></td>
 									<td><?=$row->KodePustaka?></td>
 									<td><?=$row->JudulPustaka?></td>
 									<td><?=$row->Pengarang?></td>
 									<td><?=$row->Penerbit?></td>
 									<td><?=$row->TahunTerbit?></td>
 									<td style="text-align: center;">
 										<a href="<?=base_url('Pustaka/edit/'.$row->KodePustaka)?>" class="btn btn-warning btn-md">Edit</a>
 										<a href="<?=base_url('Pustaka/hapus/'.$row->KodePustaka)?>" class="btn btn-danger btn-md" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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