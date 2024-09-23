<h3>Data Naskah [<?php echo anchor('naskah/naskah_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<?php echo form_open('naskah')?>
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
<tr class="tableheader">
		<th width="5%">#</th>
		<th width="10%">Tanggal</th>
		<th width="20%">Program</th>
		<th width="20%">Judul</th>
		<th>Isi</th>
		<th width="5%">Oleh</th>
		<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($naskah_list as $row):
	?>
<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo tampilTanggal($row['tanggal'])?></td>
		<td><?php echo $row['namaprogram']?></td>
		<td><?php echo $row['judul']?></td>
		<td><?php echo nl2br(tampilPotong($row['isinaskah'],160))?>...
			<div id="naskah<?php echo $row['idnaskah']?>" class="modal fade" tabindex="-1">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title"><?php echo $row['judul']?></h4>
			      </div>
			      <div class="modal-body">
			        <?php echo nl2br($row['isinaskah'])?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
			      </div>
			    </div>
			  </div>
			</div>
		</td>
		<td><?php echo $row['updatedby']?></td>

<td align="center">
	<a class="dataTulisan" href="#" data-toggle="modal" data-target="#naskah<?php echo $row['idnaskah']?>">
		<i class="mdi-hardware-tv"></i>
	</a>
	<?php
		$username = $this->session-> userdata('username');
		$role = $this->session-> userdata('role');
		if(($username==$row['insertedby']) || $role=="Admin"){
	?>
			<?php echo anchor('naskah/naskah_form_update/'.$row['idnaskah'], '<i class="mdi-action-description"></i>')?>
			<?php echo anchor('naskah/naskah_form_delete/'.$row['idnaskah'], '<i class="mdi-action-delete"></i>')?>
	<?php } ?>

</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>
