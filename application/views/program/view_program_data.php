<h3>Data Program [<?php echo anchor('program/program_form_insert/','<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr>
	<th width="5%">#</th>
	<th>Nama Program</th>
	<th width="10%">Status</th>
	<th width="15%">Waktu</th>
	<th width="5%">Oleh</th>
	<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;

	foreach($program_list as $row):
		$iconStatus="<i class='mdi-action-done'></i>";
	?>
<tr>
	<td><?php echo $i++?></td>
	<td><?php echo $row['namaprogram']?></td>
	<td>
		<?php
			if($row['statusprogram']==0) $iconStatus="<i class='mdi-content-clear'></i>"
		?>
		<?php echo $iconStatus ?>
	</td>
	<td><?php echo $row['updatedon']?></td>
	<td><?php echo $row['updatedby']?></td>
	<td align="center">
		<?php echo anchor('program/program_form_update/'.$row['idprogram'], '<i class="mdi-action-description"></i>')?>
		<?php echo anchor('program/program_form_delete/'.$row['idprogram'], '<i class="mdi-action-delete"></i>')?>
	</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>