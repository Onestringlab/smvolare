<h3>Laporan Iklan</h3>
<div class="well bs-component">
<?php echo form_open('logiklan/index')?>
<div class="form-group">
  <label for="status" class="col-md-1 control-label">Iklan</label>
  <div class="col-md-4">
    <select id="idiklan" class="form-control" name="idiklan">
    	<?php foreach($iklan_list as $row_iklan):?>
		      <option value="<?php echo $row_iklan['idiklan']?>"
		      	<?php if($row_iklan['idiklan']==$idiklan) echo "selected"?>>
			  <?php echo $row_iklan['judul']?>
		<?php  endforeach ?>
	</select>
  </div>
  <label for="status" class="col-md-1 control-label">Tanggal</label>
  <div class="col-md-2">
    <input class="form-control" id="tanggal1" name="tanggal1" type="date" value="<?php echo $tanggal1 ?>">
  </div>
  <div class="col-md-2">
    <input class="form-control" id="tanggal2" name="tanggal2" type="date" value="<?php echo $tanggal2 ?>"   >
  </div>
  <div class="col-md-2">
	<button class="btn btn-lg btn-primary" type="submit">Cari</button>
  </div>
</div>
</form>
<table class="table table-striped table-hover ">
<thead>
<tr>
		<th width="5%">#</th>
		<th width="10%">Tanggal</th>
		<th width="30%">Judul</th>
		<th>Jam</th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	$countRow=1;
	$tanggalTemp=null;
	$total = count($logiklan_list);
	foreach($logiklan_list as $row):
	if($tanggalTemp!=ambilTanggalSQL($row['insertedon'])){
		if($i!=1){
			echo "</td></tr>";
		}

	?>
<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo tampilTanggal($row['insertedon'])?></td>
		<td><?php echo $row['judul']?></td>
		<td><?php echo tampilJam2($row['insertedon'])?>
	<?php } else {
		echo "\t". tampilJam2($row['insertedon']);
	}
		if($countRow==$total){
				echo "</td></tr>";
		}
		$countRow++;
	?>

<?php
		$tanggalTemp = ambilTanggalSQL($row['insertedon']);

	endforeach
?>
</tbody>
</table>

</div>