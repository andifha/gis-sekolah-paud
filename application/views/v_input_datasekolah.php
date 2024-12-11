<div class="col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Lokasi Sekolah
		</div>
		<div class="panel-body">
			
		<div id="map" style="height: 400px;"></div>


		</div>
	</div>
</div>



<div class="col-md-5">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Input Data
		</div>
		<div class="panel-body">
			<?php 
			if(isset($error_upload)){
				echo ('<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$error_upload.'</div>');
			}
			echo validation_errors('<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>','</div>');
			
			if ($this->session->flashdata('pesan')) {
				echo '<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
			echo $this->session->flashdata('pesan');
			echo '</div>';
			}

			echo form_open_multipart('sekolah/input'); 
			?>
		<div class="form-group">
			<label>Nama Sekolah</label>
			<input name="nama_sekolah" placeholder="Nama Sekolah" value="<?= set_value('nama_sekolah')?>" class="form-control" />
		</div>

		<div class="form-group">
			<label>NPSN</label>
			<input name="npsn" placeholder="NPSN" value="<?= set_value('npsn')?>" class="form-control" />
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input name="alamat" placeholder="Alamat" value="<?= set_value('alamat')?>" class="form-control" />
		</div>

		<div class="form-group">
			<label>Kepala Sekolah</label>
			<input name="kepala_sekolah" placeholder="Kepala Sekolah" value="<?= set_value('kepala_sekolah')?>" class="form-control" />
		</div>

		<div class="form-group">
			<label>Status Sekolah</label>
			<select name="status" class="form-control">
				<option value="">--Pilih Status Sekolah--</option>
				<option value="Negeri">Negeri</option>
				<option value="Swasta">Swasta</option>
			</select>
		</div>

		<div class="form-group">
			<label>Jenjang Sekoalh</label>
			<select name="jenjang" class="form-control">
				<option value="">--Pilih Jenjang Sekolah--</option>
				<option value="KB">KB</option>
				<option value="TK">TK</option>
				<option value="RA">RA</option>
				<option value="TPA">TPA</option>
				<option value="SPS">SPS</option>
			</select>
		</div>

		<div class="form-group">
			<label>Latitude</label>
			<input name="latitude" placeholder="Latitude" value="<?= set_value('latitude')?>" class="form-control" require />
		</div>

		<div class="form-group">
			<label>Longitude</label>
			<input name="longitude" placeholder="Longitude" value="<?= set_value('longitude')?>" class="form-control" require />
		</div>

		<div class="form-group">
			<label>Gambar</label>
			<input type="file" name="gambar" class="form-control" required>
		</div>

		<div class="form-group">
			<label></label>
			<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
			<button type="reset" class="btn btn-sm btn-success">Reset</button>
		</div>
		
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[-4.345390881520513, 119.88598782011];	
}

var map = L.map('map').setView([-4.345390881520513, 119.88598782011], 14);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
}).addTo(map);

map.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
	draggable:'true'
});

$("#Latitude, #Longitude").change(function(){
	var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
	marker.setLatLng(position, {
	draggable : 'true'
	}).bindPopup(position).update();
	mymap.panTo(position);
});
map.addLayer(marker);
const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
</script>
