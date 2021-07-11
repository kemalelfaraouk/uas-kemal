 <div class="col-md-6 offset-md-3">
 	<div class="card">
 		<div class="card-header bg-white py-2">
 			<div class="card-widgets">
 				
 				<!-- <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
 				<a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a> -->
 				<!-- <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
 				<!-- <a class="btn btn-md btn-success waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a> -->
 			</div>
 			<h5 class="card-title mb-0 text-dark">Form Tambah Pustakawan</h5>
 		</div>
 		<div id="cardCollpase8" class="collapse show">
 			<div class="card-body">
 				
 				<form method="POST" action="<?=base_url('Pustakawan/aksi_tambah')?>">
 					
 					<div class="row">

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Kode</label>
 								<input type="text" name="KodePustakawan" class="form-control" placeholder="Kode Pustakawan" value="<?=$kode?>" readonly>
 							</div>
 						</div>
 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Nama</label>
 								<input type="text" name="NamaPustakawan" class="form-control" placeholder="Nama">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Nomor Telepon</label>
 								<input type="text" name="NomorTelepon" class="form-control" placeholder="Nomor Telepon">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Password</label>
 								<input type="password" name="Password" class="form-control" placeholder="Password">
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