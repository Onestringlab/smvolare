<h3>Data Papan Pesan [<?php echo anchor('papanpesan/papanpesan_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr>
		<th>#</th>
		<th width="15%">Waktu</th>
		<th width="15%">Nama</th>
		<th>Pesan</th>
		<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($papanpesan_list as $row):
	?>
<tr>
	<td><?php echo $i++?></td>
	<td><?php echo tampilTanggalJam($row['waktu'])?></td>
	<td><?php echo $row['nama']?></td>
	<td><?php echo tampilPotong(nl2br($row['pesan']),160)?> ...
		<div id="papapesan<?php echo $row['idpapanpesan']?>" class="modal fade" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-body">
		        <?php echo nl2br($row['pesan'])?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
		      </div>
		    </div>
		  </div>
		</div>

	</td>
	<td align="center">
		<a class="dataTulisan" href="#" data-toggle="modal" data-target="#papapesan<?php echo $row['idpapanpesan']?>">
			<i class="mdi-hardware-tv"></i></a>
		<?php
		$username = $this->session-> userdata('username');
		$role = $this->session-> userdata('role');
		if(($username==$row['insertedby']) || $role=="Admin"){
		?>
			<?php echo anchor('papanpesan/papanpesan_form_update/'.$row['idpapanpesan'], '<i class="mdi-action-description"></i>')?>
			<?php echo anchor('papanpesan/papanpesan_form_delete/'.$row['idpapanpesan'], '<i class="mdi-action-delete"></i>')?>
		<?php } ?>
	</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>