<h2 class="mb-3">Data Kepala Keluarga</h2>
<div class="card mb-3">
	<div class="card-body">
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="nama_kepala">Nama Kepala Keluarga</label>
					<input type="text" class="form-control" name="nama_kepala" required>
				</div>	
				<div class="form-group">
					<label for="telp_kepala">Telepon</label>
					<input type="text" class="form-control" name="telp_kepala" maxlength="13" required="">
				</div>			
				<div class="form-group">
					<label for="jumlah_art">Jumlah Anggota Keluarga <strong>(termasuk kepala keluarga)</strong></label>
					<input type="number" class="form-control" name="jumlah_art" min="1" value="0" required="">
				</div>			
			</div>
			<div class="col">
				<div class="form-group">
					<label for="alamat_kepala">Alamat</label>
					<select class="form-control" name="alamat_kepala" id="alamat_kepala">
						<option value="">PILIH SATUAN WILAYAH</option>
						<?php foreach($satuan_wilayah as $row): ?>
							<option value="<?= $row->id ?>"><?= $row->nama_wilayah ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="rt_kepala">RT</label>
					<select class="form-control" name="rt_kepala" id="rt_kepala">
						<option value="">--</option>
					</select>
				</div>
				<div class="form-group">
					<label for="rw_kepala">RW</label>
					<select class="form-control" name="rw_kepala" id="rw_kepala">
						<option value="">--</option>
					</select>
				</div>
				<div class="form-group">
					<label for="kodepos_kepala">Kode Pos</label>
					<input type="text" class="form-control" name="kodepos_kepala" value="65171" disabled>
				</div>	
			</div>
		</div>
	</div>
</div>
<button type="button" class="btn btn-dark previous">
	<span class="fas fa-arrow-left"></span> 
	Sebelumnya
</button>
<button type="button" class="btn btn-dark next">
	Selanjutnya 
	<span class="fas fa-arrow-right"></span>
</button>

<script>				

	//tampilkan list rt rw setiap dusun
	jQuery('[name=alamat_kepala]').on('change', function() {
		var alamat = $(this).val();
		$.ajax ({
			url: "<?= site_url('list_kk/get_dusun') ?>",
			method: "POST",
			data: { "id": alamat }
		})
		.done( function(response) {
			$('[name=rt_kepala]').html('');
			$('[name=rw_kepala]').html('');		
			var obj = JSON.parse(response);		
			$.each(obj, function(index, value) {
				$.each(value, function(i, no_rukun) {
					if (no_rukun.rt) {							
						$('[name=rt_kepala]').append('<option value="'+no_rukun.rt+'">'+no_rukun.rt+'</option>');
					}
					else {
						$('[name=rw_kepala]').append('<option value="'+no_rukun.rw+'">'+no_rukun.rw+'</option>');
					}						
				});
			});
		});
	});		

	jQuery('[name=jumlah_art]').on('keyup', function() {
		let count = $(this).val();
		$('#list_art>tbody').html('');
		$('.modal_list').html('');

		$.ajax({
			url: "<?= site_url('list_kk/detail_modal') ?>",
			data: { "count": count },
			method: "POST"
		})
		.done(function (modal) {
			$('.modal_list').append(modal);
		})
		
		for (index = 0; index < count; index++) {
			var detail_btn = '<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_'+index+'" data-list="'+index+'">Detail</button>';				
			$('#list_art>tbody').append('<tr>'+ '<td>' + index + '</td>' + '<td>' + 'EDIT MELALUI OPSI DETAIL' + '</td>' + '<td>' + detail_btn + '</td>');
		}
	})		  		

</script>