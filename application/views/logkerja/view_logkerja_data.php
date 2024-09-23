<h3>Data Log Kerja [<?php echo anchor('logkerja/logkerja_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<?php echo form_open('logkerja')?>
<div class="form-group">
  <label for="status" class="col-md-1 control-label">Oleh</label>
  <div class="col-md-2">
  	   <select id="username" class="form-control" name="username">
    	<?php foreach($penyiar_list as $row):?>
		    <option value="<?php echo $row['username']?>"
		    	<?php if($row['username']==$username) echo "selected"?>>
			  <?php echo $row['name']?>
		    <?php  endforeach ?>
	  </select>
  </div>
  <label for="status" class="col-md-1 control-label">Tanggal</label>
  <div class="col-md-3">
    <input class="form-control" id="tanggal1" name="tanggal1" type="date" value="<?php echo $tanggal1 ?>">
  </div>
  <div class="col-md-3">
    <input class="form-control" id="tanggal2" name="tanggal2" type="date" value="<?php echo $tanggal2 ?>"   >
  </div>
   <div class="col-md-2">
	<button class="btn btn-lg btn-primary" type="submit">Cari</button>
  </div>

</div>
</form>


<table class="table table-striped table-hover ">
<thead>
<tr >
	<th width="5%">#</th>
	<th width="10%">Tanggal</th>
	<th>Kerja</th>
	<th width="30%">Keterangan</th>
	<th width="10%">Oleh</th>
	<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($logkerja_list as $row):
		$rowclass="row1";
		if($i%2==1){
			$rowclass="row2";
		}
	?>
<tr class="<?php echo $rowclass?>">
	<td><?php echo $i++;?></td>
	<td><?php echo $row['tanggal']?></td>
	<td><?php echo nl2br($row['kerja'])?></td>
	<td><?php echo nl2br($row['keterangan'])?></td>
	<td><?php echo $row['updatedby']?></td>
	<td align="center">
		<?php echo anchor('logkerja/logkerja_form_update/'.$row['idlogkerja'], '<i class="mdi-action-description"></i>')?>
		<?php echo anchor('logkerja/logkerja_form_delete/'.$row['idlogkerja'], '<i class="mdi-action-delete"></i>')?>
	</td>
</tr>
<?php endforeach ?>
</tbody>
</table>