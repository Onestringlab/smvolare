<h3>Data Pemenang Kuis [<?php echo anchor('pemenang/pemenang_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr>
		<th width="5%">#</th>
		<th width="10%">Tanggal</th>
		<th width="20%">Program</th>
		<th width="20%">Pemenang</th>
		<th width="20%">Sponsor</th>
		<th>Keterangan</th>
		<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($pemenang_list as $row):
		$rowclass="row1";
		if($i%2==1){
			$rowclass="row2";
		}
	?>
<tr class="<?php echo $rowclass?>">
		<td><?php echo $i++;?></td>
		<td><?php echo $row['tanggal']?></td>
		<td><?php echo $row['namaprogram']?></td>
		<td><?php echo nl2br($row['pemenang'])?></td>
		<td><?php echo $row['sponsor']?></td>
		<td><?php echo $row['keterangan']?></td>
<td align="center">
	<?php echo anchor('pemenang/pemenang_form_update/'.$row['idpemenang'], '<i class="mdi-action-description"></i>')?>
	<?php echo anchor('pemenang/pemenang_form_delete/'.$row['idpemenang'], '<i class="mdi-action-delete"></i>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>