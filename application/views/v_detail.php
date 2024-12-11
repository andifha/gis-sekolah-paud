<div class="row">
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading"> Lokasi Paud</div>
				<div class="panel-body">
				<div id="map" style="height: 700px;"></div>
				</div>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="panel panel-primary">
				<div class="panel-heading"> Gambar Sekolah</div>
				<div class="panel-body">
					<img src="<?= base_url('gambar/'. $sekolah->gambar)?>" width="600px" height="300px">
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading"> Data Sekolah</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th width="200px">Nama Sekolah</th>
								<th width="50px">: </th>
								<td><?= $sekolah->nama_sekolah?></td>
							</tr>
							<tr>
								<th width="200px">NPSN</th>
								<th width="50px">: </th>
								<td><?= $sekolah->npsn?></td>
							</tr>
								<th width="200px">Alamat</th>
								<th width="50px">: </th>
								<td><?= $sekolah->alamat?></td>
							<tr>
								<th width="200px">Status</th>
								<th width="50px">: </th>
								<td><?= $sekolah->status?></td>
							</tr>
							<tr>
								<th width="200px">Latitude</th>
								<th width="50px">: </th>
								<td><?= $sekolah->latitude?></td> 
							</tr>
							<tr>
								<th width="200px">Longitude</th>
								<th width="50px">: </th>
								<td><?= $sekolah->longitude?></td>
							</tr>
							<tr>
								<th width="200px">Kepala Sekolah</th>
								<th width="50px">: </th>
								<td><?= $sekolah->kepala_sekolah?></td>
							</tr>
							<tr>
								<th width="200px">Jenjang</th>
								<th width="50px">: </th>
								<td><?= $sekolah->jenjang?></td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		</div>

	<script>
		const map = L.map('map').setView([<?= $sekolah->latitude?>, <?= $sekolah->longitude?>], 14);
	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	var icon_sekolah = L.icon({
		iconUrl: '<?= base_url('icon/sekolah.png')?>',
		iconSize: [38, 50]
	})

	L.marker([<?= $sekolah->latitude?>, <?= $sekolah->longitude?>],{icon:icon_sekolah}).addTo(map)
		.bindPopup("<b>Nama Sekolah : <?= $sekolah->nama_sekolah?></b><br/>"+
		"npsn :<?= $sekolah->npsn?> </br>"+
		"Alamat :<?= $sekolah->alamat?> </br>"+
		"status :<?= $sekolah->status?> </br>"+
		"jenjang :<?= $sekolah->jenjang?> </br>").openPopup();
	</script>


