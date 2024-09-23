<h3>Data Topik [<?php echo anchor('topik/topik_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr >
	<th width="3%">#</th>
	<th width="10%">Tanggal</th>
	<th width="10%">Program</th>
	<th width="30%">Topik</th>
	<th width="20%">Narasumber</th>
	<th >Keterangan</th>
	<th width="5%">Oleh</th>
	<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($topik_list as $row):
	?>
<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo tampilTanggal($row['tanggal'])?></td>
		<td><?php echo $row['namaprogram']?></td>
		<td><?php echo $row['topik']?></td>
		<td><?php echo $row['narasumber']?></td>
		<td><?php echo $row['keterangan']?></td>
		<td><?php echo $row['updatedby']?></td>
		<td align="center">
		<?php
		$username = $this->session-> userdata('username');
		$role = $this->session-> userdata('role');
		if(($username==$row['insertedby']) || $role=="Admin"){
		?>
			<?php echo anchor('topik/topik_form_update/'.$row['idtopik'], '<i class="mdi-action-description"></i>')?>
			<?php echo anchor('topik/topik_form_delete/'.$row['idtopik'], '<i class="mdi-action-delete"></i>')?>
		<?php } ?>
		</td>

</tr>
<?php endforeach ?>
</tbody>
</table>
