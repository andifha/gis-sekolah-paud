<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading"> List Sekolah</div>
				<div class="panel-body">
					<table class="table table-responsive table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Sekolah</th>
								<th>NPSN</th>
								<th>Alamat</th>
								<th>Kepala Sekolah</th>
								<th>Status</th>
								<th>Jenjang</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($sekolah as $key => $value) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->nama_sekolah?></td>
									<td><?= $value->npsn?></td>
									<td><?= $value->alamat?></td>
									<td><?= $value->kepala_sekolah?></td>
									<td><?= $value->status?></td>
									<td><?= $value->jenjang?></td>
									<td><a href="<?=  base_url('webgis/detail/'.$value->id_sekolah)?>" class="btn btn-sm btn-success">Detail</a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
