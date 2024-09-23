<h3>Data Adlibs [<?php echo anchor('adlibs/adlibs_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr >
		<th width="5%">#</th>
		<th width="10%">Tipe</th>
		<th width="25%">Judul</th>
		<th>Isi</th>
		<th width="5%">Status</th>
		<th width="15%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($adlibs_list as $row):
		$iconStatus="<i class='mdi-action-done'></i>";
	?>
<tr >
		<td><?php echo $i++;?></td>
		<td><?php echo $row['tipe']?></td>
		<td><?php echo $row['judul']?></td>
		<td><?php echo tampilPotong(nl2br($row['isiiklan']),160)?>...</td>
		<td>
			<?php
			if($row['status']==0) $iconStatus="<i class='mdi-content-clear'></i>";
			echo $iconStatus;
			?>
		</td>
<td align="center">
	<?php echo anchor('adlibs/adlibs_form_update/'.$row['idiklan'], '<i class="mdi-action-description"></i>')?>
	<?php echo anchor('adlibs/adlibs_form_delete/'.$row['idiklan'], '<i class="mdi-action-delete"></i>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>