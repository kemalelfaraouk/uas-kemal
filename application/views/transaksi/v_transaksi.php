 <div class="col-lg-12">
 	<div class="card">
 		<div class="card-header bg-white py-2">
 			<a href="<?=base_url('Transaksi/pinjam')?>" class="btn btn-md btn-info text-white waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Pinjam</a>
 			<div class="card-widgets">
 				
 				<!-- <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
 				<a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a> -->
 				<!-- <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
 				<!-- <a class="btn btn-md btn-success waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a> -->
 			</div>
 			<h5 class="card-title mb-0 text-dark">Data Transaksi</h5>
 		</div>
 		<div id="cardCollpase8" class="collapse show">
 			<div class="card-body">
 				
 				<div class="table-responsive">
 					<table class="table table-striped table-condensed dt-responsive nowrap w-100" id="mytable">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>ID Transaksi</th>
 								<th>Anggota</th>
 								<th>Pustaka</th>
 								<th>Pustakawan</th>
 								<th>Tanggal Pinjam</th>
 								<th>Tanggal Kembali</th>
 								<th style="text-align: center;">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php
 							$no =1;
 							foreach ($transaksi->result() as $row) { ?>
 								
 								<tr>
 									<td><?=$no++?></td>
 									<td><?=$row->IdTransaksi?></td>
 									<td>No.Anggota : <?=$row->NomorAnggota?><br>
 										Nama : <?=$row->NamaAnggota?>
 										
 									</td>
 									<td>Kode Pustaka : <?=$row->KodePustaka?><br>
 										Judul : <?=$row->JudulPustaka?>
 									</td>
 									<td>Kode Pustakawan : <?=$row->KodePustakawanPinjam?><br>
 										Nama : <?=$row->NamaPustakawan?></td>
 									<td><?=$row->TanggalPinjam?></td>
 									<td><?=$row->TanggalKembali?></td>
 									<td>
 										<?php
 										if ($row->TanggalKembali == '') {
 											echo "<a class='btn btn-danger btn-md' href='".base_url('Transaksi/kembalikan/'.$row->IdTransaksi)."'>Pengembalian</a>";
 										}else{
 											echo "<button class='btn btn-success btn-md' disabled>Selesai</button>";
 										}
 										?>
 									</td>
 									<!-- <td style="text-align: center;">
 										<a href="<?=base_url('Anggota/edit/'.$row->NomorAnggota)?>" class="btn btn-warning btn-md">Edit</a>
 										<a href="<?=base_url('Anggota/hapus/'.$row->NomorAnggota)?>" class="btn btn-danger btn-md" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
 									</td> -->
 								</tr>

 							<?php } ?>
 						</tbody>
 					</table>
 				</div>

 			</div>
 		</div>
 	</div>
 </div>