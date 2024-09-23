<h3>Data Jadwal Siaran [<?php echo anchor('jadwal/jadwal_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
	<table class="table table-striped table-hover ">
		<thead>
			<tr>
				<th width="2%">#</th>
				<th width="5%">Hari</th>
				<th width="5%">Mulai</th>
				<th width="5%">Selesai</th>
				<th width="15%">Program</th>
				<th width="15%">Petugas 1</th>
				<th width="15%">Petugas 2</th>
				<th>Keterangan</th>
				<th width="8%"></th>
			</tr>
		</thead>
		<tbody>

			<?php
			$i=1;
			foreach($jadwal_list as $row):
				?>
				<tr>
					<td><?php echo $i++;?></td>
					<td><?php echo tampilHari($row['hari'])?></td>
					<td><?php echo tampilJam($row['mulai'])?></td>
					<td><?php echo tampilJam($row['selesai'])?></td>
					<td><?php echo $row['namaprogram']?></td>
					<td><?php echo $row['petugas1']?></td>
					<td><?php echo $row['petugas2']?></td>
					<td><?php echo $row['keterangan']?></td>
					<td align="center">
						<?php echo anchor('jadwal/jadwal_form_update/'.$row['idjadwal'], '<i class="mdi-action-description"></i>')?>
						<?php echo anchor('jadwal/jadwal_form_delete/'.$row['idjadwal'], '<i class="mdi-action-delete"></i>')?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>