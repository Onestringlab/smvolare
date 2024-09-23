<h3>Data Absen - <?php echo ambilTanggal()?> [<?php echo anchor('absen/absen_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>

<div class="well bs-component">
	<table class="table table-striped table-hover ">
		<thead>
			<tr>
				<th width="5%">#</th>
				<th width="13%">Nama</th>
				<th width="20%">Program</th>
				<th>Sebagai</th>
				<th width="5%">Mulai</th>
				<th width="5%">Selesai</th>
				<th width="5%">Siaran</th>
				<th>Keterangan</th>
				<th width="10%">IP Internet</th>
				<th width="8%"></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=1;
			foreach($absen_list as $row):
				?>
				<tr >
					<td><?php echo $i++;?></td>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['namaprogram']?></td>
					<td><?php echo $row['sebagai']?></td>
					<td><?php echo tampilJam($row['waktumulai'])?></td>
					<td><?php echo tampilJam($row['waktuselesai'])?></td>
					<td><?php echo $row['siaran']?></td>
					<td><?php echo $row['keterangan']?></td>
					<td><?php echo $row['ipaddress2']?></td>
					<td align="center">
						<?php
						$username = $this->session-> userdata('username');
						$role = $this->session-> userdata('role');
						if(($username==$row['username']) || $role=="Admin"){
							if($row['status']==0){
								echo anchor('absen/update_status_absen/'.$row['idabsen'], '<i class="mdi-maps-directions-walk"></i>');
							}
							?>
							<?php echo anchor('absen/absen_form_update/'.$row['idabsen'], '<i class="mdi-action-description"></i>')?>
							<?php echo anchor('absen/absen_form_delete/'.$row['idabsen'], '<i class="mdi-action-delete"></i>')?>
						<?php } ?>
					</td>
				</tr>

			<?php endforeach ?>
		</tbody>
	</table>
</div>