
<div class="panel panel-primary">
	<div class="panel-heading"> Data Chart</div>
		<div class="panel-body">
			<div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
		<th>idchart</th>
		<th>chart</th>
		<th>program</th>
		<th>tanggal</th>
		<th>foto</th>
		<th>tw1</th>
		<th>song1</th>
		<th>artis1</th>
		<th>tw2</th>
		<th>song2</th>
		<th>artis2</th>
		<th>tw3</th>
		<th>song3</th>
		<th>artis3</th>
		<th>tw4</th>
		<th>song4</th>
		<th>artis4</th>
		<th>tw5</th>
		<th>song5</th>
		<th>artis5</th>
		<th>tw6</th>
		<th>song6</th>
		<th>artis6</th>
		<th>tw7</th>
		<th>song7</th>
		<th>artis7</th>
		<th>tw8</th>
		<th>song8</th>
		<th>artis8</th>
		<th>tw9</th>
		<th>song9</th>
		<th>artis9</th>
		<th>tw10</th>
		<th>song10</th>
		<th>artis10</th>
		<th>updatedtime</th>
		<th>updatedby</th>
		<th><?php echo anchor('chart/chart_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($chart_list as $row): 
	?>
<tr>
		<td><?=$row['idchart']?></td>
		<td><?=$row['chart']?></td>
		<td><?=$row['program']?></td>
		<td><?=$row['tanggal']?></td>
		<td><?=$row['foto']?></td>
		<td><?=$row['tw1']?></td>
		<td><?=$row['song1']?></td>
		<td><?=$row['artis1']?></td>
		<td><?=$row['tw2']?></td>
		<td><?=$row['song2']?></td>
		<td><?=$row['artis2']?></td>
		<td><?=$row['tw3']?></td>
		<td><?=$row['song3']?></td>
		<td><?=$row['artis3']?></td>
		<td><?=$row['tw4']?></td>
		<td><?=$row['song4']?></td>
		<td><?=$row['artis4']?></td>
		<td><?=$row['tw5']?></td>
		<td><?=$row['song5']?></td>
		<td><?=$row['artis5']?></td>
		<td><?=$row['tw6']?></td>
		<td><?=$row['song6']?></td>
		<td><?=$row['artis6']?></td>
		<td><?=$row['tw7']?></td>
		<td><?=$row['song7']?></td>
		<td><?=$row['artis7']?></td>
		<td><?=$row['tw8']?></td>
		<td><?=$row['song8']?></td>
		<td><?=$row['artis8']?></td>
		<td><?=$row['tw9']?></td>
		<td><?=$row['song9']?></td>
		<td><?=$row['artis9']?></td>
		<td><?=$row['tw10']?></td>
		<td><?=$row['song10']?></td>
		<td><?=$row['artis10']?></td>
		<td><?=$row['updatedtime']?></td>
		<td><?=$row['updatedby']?></td>
<td align="center">
	<?php echo anchor('chart/chart_form_update/'.$row['idchart'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
	<?php echo anchor('chart/chart_form_delete/'.$row['idchart'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
		</div>
	</div>
</div>

