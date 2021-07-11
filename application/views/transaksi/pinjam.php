 <div class="col-md-6 offset-md-3">
 	<div class="card">
 		<div class="card-header bg-white py-2">
 			<div class="card-widgets">
 				
 				<!-- <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
 				<a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a> -->
 				<!-- <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
 				<!-- <a class="btn btn-md btn-success waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a> -->
 			</div>
 			<h5 class="card-title mb-0 text-dark">Form Transaksi Pinjam</h5>
 		</div>
 		<div id="cardCollpase8" class="collapse show">
 			<div class="card-body">
 				
 				<form method="POST" action="<?=base_url('Transaksi/aksi_pinjam')?>">
 					
 					<div class="row">

 						<!-- <div class="col-sm-12 ">
 							<div class="form-group">
 								<label>ID Transaksi</label>
 								<input type="text" name="IdTransaksi" class="form-control" placeholder="ID Transaksi" value="<?=$kode?>" readonly>
 							</div>
 						</div> -->

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Nomor Anggota</label>
 								<select name="NomorAnggota" class="form-control" required>
 									<?php
 									$query = $this->db->get('anggota');
 									foreach ($query->result() as $row) {
 										echo '<option value="'.$row->NomorAnggota.'">'.$row->NomorAnggota.' - '.$row->NamaAnggota.'</option>';
 									}
 									?>
 								</select>
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Pustaka</label>
 								<select name="KodePustaka" class="form-control" required>
 									<?php
 									$query = $this->db->get('pustaka');
 									foreach ($query->result() as $row) {
 										echo '<option value="'.$row->KodePustaka.'">'.$row->KodePustaka.' - '.$row->JudulPustaka.'</option>';
 									}
 									?>
 								</select>
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Tanggal Pinjam</label>
 								<input type="date" name="TanggalPinjam" class="form-control" required value="<?=date('Y-m-d')?>">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<button class="btn btn-md btn-primary float-right" name="simpan">Simpan</button>
 							</div>
 						</div>

 						

 					</div>

 				</form>

 			</div>
 		</div>
 	</div>
 </div>