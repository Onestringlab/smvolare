<h3>Data ROTW [<?php echo anchor('rotw/rotw_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<tr class="tableheader">
	<thead>
		<th width="5%">#</th>
		<th width="15%">Nama</th>
		<th width="15%">Judul Lagu</th>
		<th width="15%">Artis</th>
		<th>Alasan</th>
		<th width="15%">Waktu</th>
		<th width="10%"></th>
	</thead>
	<tbody>
</tr>
<?php
	$i=1;
	foreach($rotw_list as $row):
	?>
<tr>
	<td><?php echo $i++;?></td>
	<td><?php echo $row['nama']?></td>
	<td><?php echo $row['judullagu']?></td>
	<td><?php echo $row['artis']?></td>
	<td><?php echo $row['alasan']?></td>
	<td><?php echo $row['updatedon']?></td>
	<td align="center">
		<?php
		$username = $this->session-> userdata('username');
		$role = $this->session-> userdata('role');
		if(($username==$row['insertedby']) || $role=="Admin"){
		?>
			<?php echo anchor('rotw/rotw_form_update/'.$row['idrotw'], '<i class="mdi-action-description"></i>')?>
		<?php echo anchor('rotw/rotw_form_delete/'.$row['idrotw'], '<i class="mdi-action-delete"></i>')?>
		<?php } ?>

	</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>