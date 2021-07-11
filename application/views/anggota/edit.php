 <div class="col-md-6 offset-md-3">
 	<div class="card">
 		<div class="card-header bg-white py-2">
 			<div class="card-widgets">
 				
 				<!-- <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
 				<a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a> -->
 				<!-- <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
 				<!-- <a class="btn btn-md btn-success waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a> -->
 			</div>
 			<h5 class="card-title mb-0 text-dark">Form Edit Anggota</h5>
 		</div>
 		<div id="cardCollpase8" class="collapse show">
 			<div class="card-body">
 				
 				<form method="POST" action="<?=base_url('Anggota/aksi_edit/'.$row->NomorAnggota)?>">
 					
 					<div class="row">

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Nomor Anggota</label>
 								<input type="text" name="NomorAnggota" class="form-control" placeholder="Nomor Anggota" value="<?=$row->NomorAnggota?>" readonly>
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Nama</label>
 								<input type="text" name="NamaAnggota" class="form-control" placeholder="Nama" value="<?=$row->NamaAnggota?>">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Alamat</label>
 								<textarea name="Alamat" class="form-control" placeholder="Alamat"><?=$row->Alamat?></textarea>
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Tanggal Daftar</label>
 								<input type="date" name="TanggalDaftar" class="form-control" placeholder="Tanggal Daftar" value="<?=$row->TanggalDaftar?>">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Tanggal Kedaluarsa</label>
 								<input type="date" name="TanggalKedaluarsa" class="form-control" placeholder="Tanggal Kadaluarsa" value="<?=$row->TanggalKedaluarsa?>">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<button class="btn btn-md btn-primary float-right" name="simpan">Edit</button>
 							</div>
 						</div>

 					</div>

 				</form>

 			</div>
 		</div>
 	</div>
 </div>