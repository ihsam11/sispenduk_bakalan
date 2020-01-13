<?php for ($index = 0; $index < $count; $index++): ?>
<div class="modal fade" id="modal_<?= $index ?>">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Detail Anggota Keluarga</h2>
				<button type="close" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="no_ktp">No. KTP/ NOPEN</label>
							<input type="text" class="form-control" name="no_ktp_<?= $index ?>" required maxlength="16">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="nama_anggota">Nama Lengkap</label>
							<input type="text" class="form-control" name="nama_anggota_<?= $index ?>" required oninput="changeName(this.value)">
						</div>
					</div>
				</div>			
				<div class="row">
					<div class="col">						
						<div class="form-group">
							<label>Jenis Kelamin</label>		
							<div class="custom-control custom-radio">
							  <input type="radio" id="laki-laki" name="jenis_kelamin_<?= $index ?>" class="custom-control-input" value="B">
							  <label class="custom-control-label" for="laki-laki">LAKI-LAKI</label>
							</div>					
							<div class="custom-control custom-radio">
							  <input type="radio" id="perempuan" name="jenis_kelamin_<?= $index ?>" class="custom-control-input" value="B">
							  <label class="custom-control-label" for="laki-laki">PEREMPUAN</label>
							</div>					
						</div>												
					</div>
					<div class="col">
						<div class="form-group">
							<label for="alamat_anggota">Alamat Sebelumnya</label>
							<textarea name="alamat_anggota_<?= $index ?>" id="alamat_anggota" rows="3" class="form-control"></textarea>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="tempat_lahir">Tempat, Tanggal Lahir</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control" name="tanggal_lahir_<?= $index ?>" required>
								</div>
								<div class="col">
									<input type="date" class="form-control" name="tempat_lahir_<?= $index ?>" required>
								</div>
							</div>
						</div>						
					</div>
					<div class="col">
						<div class="form-group">
							<label for="no_akta">No. Akta Kelahiran/ Surat Kelahiran <strong>(isi jika ada)</strong></label>
							<input type="text" class="form-control" name="no_akta_<?= $index ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="golongan_darah">Golongan Darah</label>
							<select name="golongan_darah_<?= $index ?>" class="form-control">
								<option value="">PILIH GOLONGAN DARAH</option>
								<?php foreach ($golongan_darah as $row) :?>
									<option value="<?= $row->id ?>"><?= $row->name ?></option>
								<?php endforeach?>
							</select>
						</div>							
					</div>
					<div class="col">
						<div class="form-group">
							<label for="agama">Agama/ Kepercayaan</label>
							<select name="agama_<?= $index ?>" class="form-control">
								<option value="">PILIH KEPERCAYAAN</option>
								<?php foreach ($agama as $row) :?>
									<option value="<?= $row->id ?>"><?= $row->name ?></option>
								<?php endforeach?>
							</select>
						</div>						
					</div>
				</div>				
				<div class="card card-body">
					<div class="form-group">
						<label for="status_nikah">Status Perkawinan</label>
						<select name="status_nikah_<?= $index ?>" class="form-control" required="">
							<option value="">PILIH STATUS NIKAH</option>
							<?php foreach ($status_nikah as $row) :?>
								<option value="<?= $row->id ?>"><?= $row->name ?></option>
							<?php endforeach?>
						</select>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="no_nikah">No. Akta Perkawinan/ Buku Nikah <strong>(isi jika ada)</strong></label>
								<input type="text" class="form-control" name="no_nikah_<?= $index ?>">
							</div>						
						</div>
						<div class="col">
							<div class="form-group">
								<label for="tgl_nikah">Tanggal Pernikahan</label>
								<input type="date" class="form-control" name="tgl_nikah_<?= $index ?>">
							</div>						
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="no_cerai">No. Akta Cerai/ Surat Cerai <strong>(isi jika ada)</strong></label>
								<input type="text" class="form-control" name="no_cerai_<?= $index ?>">
							</div>						
						</div>
						<div class="col">
							<div class="form-group">
								<label for="tgl_cerai">Tanggal Perceraian</label>
								<input type="date" class="form-control" name="tgl_cerai_<?= $index ?>">
							</div>						
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="hubungan_keluarga">Status Hubungan Keluarga</label>
							<select name="hubungan_keluarga_<?= $index ?>" class="form-control" required="">
								<option value="">PILIH STATUS HUBUNGAN</option>
								<?php foreach ($hubungan_keluarga as $row) :?>
									<option value="<?= $row->id ?>"><?= $row->name ?></option>
								<?php endforeach?>
							</select>
						</div>						
					</div>
					<div class="col">
						<div class="form-group">
							<label for="jenis_cacat">Jenis Cacat Fisik/Mental <strong>(isi jika ada)</strong></label>
							<select name="jenis_cacat_<?= $index ?>" class="form-control" required="">
								<option value="">PILIH JENIS CACAT</option>
								<?php foreach ($jenis_cacat as $row) :?>
									<option value="<?= $row->id ?>"><?= $row->name ?></option>
								<?php endforeach?>
							</select>					
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="pendidikan">Pendidikan Terakhir</label>
							<select name="pendidikan_<?= $index ?>" class="form-control" required="">
								<option value="">PILIH JENJANG PENDIDIKAN</option>
								<?php foreach ($pendidikan as $row) :?>
									<option value="<?= $row->id ?>"><?= $row->name ?></option>
								<?php endforeach?>
							</select>					
						</div>	
					</div>
					<div class="col">
						<div class="form-group">
							<label for="pekerjaan">Pekerjaan</label>
							<select name="pekerjaan_<?= $index ?>" class="form-control" required="">
								<option value="">PILIH PEKERJAAN</option>
								<?php foreach ($pekerjaan as $row) :?>
									<option value="<?= $row->id ?>"><?= $row->name ?></option>
								<?php endforeach?>
							</select>					
						</div>		
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="nik_ibu">NIK Ibu</label>
							<input type="text" class="form-control" name="nik_ibu_<?= $index ?>" required>
						</div>						
					</div>
					<div class="col">
						<div class="form-group">
							<label for="nama_ibu">Nama Lengkap Ibu</label>
							<input type="text" class="form-control" name="nama_ibu_<?= $index ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="nik_ayah">NIK Ayah</label>
							<input type="text" class="form-control" name="nik_ayah_<?= $index ?>" required>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="nama_ayah">Nama Lengkap Ayah</label>
							<input type="text" class="form-control" name="nama_ayah_<?= $index ?>" required>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-dismiss="modal">Simpan</button>
			</div>				
		</div>			
	</div>
</div>
<?php endfor ?>

<script>
	function changeName() {
		var active = document.activeElement;
		var attr = active.getAttribute('name');		
		var index = attr.substr(-1, 2);
		var value = attr.value;
		
	}
</script>