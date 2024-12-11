<div id="map" style="height: 500px;"></div>
<script>

	const map = L.map('map').setView([-4.345390881520513, 119.88598782011], 14);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);


	var icon_sekolah = L.icon({
		iconUrl: '<?= base_url('icon/sekolah.png')?>',
		iconSize: [35, 45]
	})
	
	<?php foreach ($sekolah as $key => $value) {?>
		L.marker([<?= $value->latitude?>, <?= $value->longitude?>],{icon:icon_sekolah}).addTo(map)
		.bindPopup("<b>Nama Sekolah : <?= $value->nama_sekolah?></b><br/>"+
		"npsn :<?= $value->npsn?> </br>"+
		"Alamat :<?= $value->alamat?> </br>"+
		"status :<?= $value->status?> </br>"+
		"jenjang :<?= $value->jenjang?> </br>");
	<?php }?>
	
	</script>
