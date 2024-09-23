<h3>Chart Radio Volare [<?php echo anchor('chart/chart_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>

<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr>
		<th>#</th>
		<th>Chart</th>
		<th>Program</th>
		<th>Tanggal</th>
		<th>Foto</th>
		<th>Waktu</th>
		<th>Oleh</th>
		<th></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($chart_list as $row):
	?>
<tr>
		<td><?=$i++; ?></td>
		<td><?=$row['chart']?></td>
		<td><?=$row['program']?></td>
		<td><?=$row['tanggal']?></td>
		<td><img src="<?=$row['foto']?>" width="200"></td>
		<td><?=$row['updatedtime']?></td>
		<td><?=$row['updatedby']?></td>
<td align="center">
	<?php echo anchor('chart/chart_form_update/'.$row['idchart'], '<i class="mdi-action-description"></i>')?>
	<?php echo anchor('chart/chart_form_delete/'.$row['idchart'], '<i class="mdi-action-delete"></i>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>