 <div class="col-md-6 offset-md-3">
 	<div class="card">
 		<div class="card-header bg-white py-2">
 			<div class="card-widgets">
 				
 				<!-- <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
 				<a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a> -->
 				<!-- <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
 				<!-- <a class="btn btn-md btn-success waves-effect waves-light float-right" ><i class="fas fa-plus"></i> Tambah Data</a> -->
 			</div>
 			<h5 class="card-title mb-0 text-dark">Form Tambah Pustaka</h5>
 		</div>
 		<div id="cardCollpase8" class="collapse show">
 			<div class="card-body">
 				
 				<form method="POST" action="<?=base_url('Pustaka/aksi_tambah')?>">
 					
 					<div class="row">

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Kode Pustaka</label>
 								<input type="text" name="KodePustaka" class="form-control" placeholder="Kode Pustaka" value="<?=$kode?>" readonly>
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Judul</label>
 								<input type="text" name="JudulPustaka" class="form-control" placeholder="JudulPustaka">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Pengarang</label>
 								<input type="text" name="Pengarang" class="form-control" placeholder="Pengarang">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Penerbit</label>
 								<input type="text" name="Penerbit" class="form-control" placeholder="Penerbit">
 							</div>
 						</div>

 						<div class="col-sm-12 ">
 							<div class="form-group">
 								<label>Tahun Terbit</label>
 								<input type="text" name="TahunTerbit" class="form-control" placeholder="Tahun Terbit">
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