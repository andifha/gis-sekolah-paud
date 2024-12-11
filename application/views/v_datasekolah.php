<div class="col-sm-12">
	<?php
	if ($this->session->flashdata('pesan')) {
		echo '<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
	echo $this->session->flashdata('pesan');
	echo '</div>';
	}?>
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
				<th>Gambar</th>
				<?php if ($this->session->userdata('username')<>"") { ?>
				<th>Action</th>
				<?php }?>
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
				<td><img src="<?= base_url('gambar/'. $value->gambar)?>" width="150px"></td>
				<?php if ($this->session->userdata('username')<>"") { ?>
					<td>
						<a href="<?= base_url('sekolah/edit/'.$value->id_sekolah)?>" class="btn btn-sm btn-warning">Edit</a>
						<a href="<?= base_url('sekolah/hapus/'.$value->id_sekolah)?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah data ingin dihapus?')">Hapus</a>
					</td>
				<?php } ?>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>
