<h3>Laporan Data Absen</h3>

<div class="well bs-component">
<?php echo form_open('absen/absen_laporan')?>
<div class="form-group">
  <label for="status" class="col-md-1 control-label">Petugas</label>
  <div class="col-md-4">
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

</div>
<div class="form-group">
  <label for="status" class="col-md-1 control-label">Program</label>
    <div class="col-md-4">
      <select id="idprogram" class="form-control" name="idprogram">
      	<?php foreach($program_list as $rowList):?>
		<option value="<?php echo $rowList['idprogram']?>"
			<?php if($rowList['idprogram']==$idprogram) echo "selected"?>>
			<?php echo $rowList['namaprogram']?>
		<?php  endforeach ?>
  	</select>
    </div>
  <label for="sebagai" class="col-md-1 control-label">Sebagai</label>
  <div class="col-md-4">
    <select id="sebagai" class="form-control" name="sebagai">
       <option value="-">-</option>
      <option value="Karyawan" <?php if($sebagai=='Karyawan') echo "selected"?>>Karyawan</option>
      <option value="Operator" <?php if($sebagai=='Operator') echo "selected"?>>Operator</option>
	  <option value="Penyiar" <?php if($sebagai=='Penyiar') echo "selected"?>>Penyiar</option>
    </select>
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
		<th width="15%">Nama</th>
		<th width="15%">Program</th>
		<th width="5%">Sebagai</th>
		<th width="5%">Mulai</th>
		<th width="5%">Selesai</th>
		<th width="5%">Siaran</th>
		<th>Keterangan</th>
		<th width="10%">IP Internet</th>
	</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($absen_list as $row):
	?>
	<tr >
		<td><?php echo $i++;?></td>
		<td><?php tampilTanggal($row['tanggal'])?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['namaprogram']?></td>
		<td><?php echo $row['sebagai']?></td>
		<td><?php echo tampilJam($row['waktumulai'])?></td>
		<td><?php echo tampilJam($row['waktuselesai'])?></td>
		<td><?php echo $row['siaran']?></td>
		<td><?php echo $row['keterangan']?></td>
		<td><?php echo $row['ipaddress2']?></td>
	</tr>
<?php endforeach ?>
</tbody>
</table>
</div>