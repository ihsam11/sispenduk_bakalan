<h2 class="mb-3">Data Jenis KK </h2>
<div class="card mb-3">
	<div class="card-body">	
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="jenis_kk" class="">Jenis Perubahan</label>
					<div class="custom-control custom-radio">
					  <input type="radio" id="kk_baru" name="jenis_kk" class="custom-control-input" value="A">
					  <label class="custom-control-label" for="kk_baru">BARU</label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" id="kk_perubahan" name="jenis_kk" class="custom-control-input" value="B">
					  <label class="custom-control-label" for="kk_perubahan">PERUBAHAN</label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" id="kk_pisah" name="jenis_kk" class="custom-control-input" value="C">
					  <label class="custom-control-label" for="kk_pisah">PISAH ANGGOTA KELUARGA</label>
					</div>
				</div>							
			</div>								
			<div class="col">
				<div class="form-group">
					<label for="nama_provinsi">Nama Provinsi</label>
					<input type="text" class="form-control" name="nama_provinsi" value="JAWA TIMUR" disabled>
				</div>
				<div class="form-group">
					<label for="nama_kota">Nama Kabupaten/Kota</label>
					<input type="text" class="form-control" name="nama_kota" value="MALANG" disabled>
				</div>
				<div class="form-group">
					<label for="nama_kecamatan">Nama Kecamatan</label>
					<input type="text" class="form-control" name="nama_kecamatan" value="BULULAWANG" disabled>
				</div>
				<div class="form-group">
					<label for="nama_kelurahan">Nama Kelurahan</label>
					<input type="text" class="form-control" name="nama_kelurahan" value="BAKALAN" disabled>
				</div>	
			</div>						
		</div>
	</div>
</div>
<button type="button" class="btn btn-dark next">
	Selanjutnya
	<span class="fas fa-arrow-right"></span>
</button>