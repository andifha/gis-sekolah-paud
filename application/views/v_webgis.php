<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading"> Pemetaaan Lokasi Paud</div>
				<div class="panel-body">
					<div id="map" style="height: 700px;"></div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
	navigator.geolocation.getCurrentPosition(function(location) {
		var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

		//map view
		console.log(location.coords.latitude, location.coords.longitude);
				const map = L.map('map').setView([-4.345390881520513, 119.88598782011], 14);
	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
	
	var icon_sekolah = L.icon({
		iconUrl: '<?= base_url('icon/sekolah.png')?>',
		iconSize: [38, 50]
	})
	
	<?php foreach ($sekolah as $key => $value) {?>
		L.marker([<?= $value->latitude?>, <?= $value->longitude?>],{icon:icon_sekolah}).addTo(map)
		.bindPopup("<img src='<?= base_url('gambar/'.$value->gambar)?>' width='100%'>"+
		"<b>Nama Sekolah : <?= $value->nama_sekolah?></b><br/>"+
		"npsn :<?= $value->npsn?> </br>"+
		"Alamat :<?= $value->alamat?> </br>"+
		"status :<?= $value->status?> </br>"+
		"jenjang :<?= $value->jenjang?> </br>"+
		"<a href ='<?= base_url('webgis/detail/' .$value->id_sekolah)?>' class='btn btn-sm btn-default'>Detail</a>"+
		"<a href='https://www.google.com/maps/dir/?api=1&origin=" +
				location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $value->latitude ?>,<?= $value->longitude ?>' class='btn btn-sm btn-default' target='_blank'>Rute</a>");
	<?php }?>
		});	
	</script>
</div>

