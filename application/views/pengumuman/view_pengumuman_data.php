<h3>Data Pengumuman [<?php echo anchor('pengumuman/pengumuman_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr>
		<th width="5%">#</th>
		<th width="25%">Judul</th>
		<th>Pengumuman</th>
		<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($pengumuman_list as $row):
	?>
<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo $row['title']?></td>
		<td><?php echo tampilPotong(nl2br($row['pengumuman']),160)?> ...
			<div id="pengumuman<?php echo $row['idpengumuman']?>" class="modal fade" tabindex="-1">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title"><?php echo $row['title']?></h4>
			      </div>
			      <div class="modal-body">
			        <?php echo nl2br($row['pengumuman'])?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
			      </div>
			    </div>
			  </div>
			</div>
		</td>
<td align="center">
	<a class="dataTulisan" href="#" data-toggle="modal" data-target="#pengumuman<?php echo $row['idpengumuman']?>">
		<i class="mdi-hardware-tv"></i>
	</a>
	<?php
		$username = $this->session-> userdata('username');
		$role = $this->session-> userdata('role');
		if(($username==$row['insertedby']) || $role=="Admin"){
		?>
			<?php echo anchor('pengumuman/pengumuman_form_update/'.$row['idpengumuman'], '<i class="mdi-action-description"></i>')?>
	<?php echo anchor('pengumuman/pengumuman_form_delete/'.$row['idpengumuman'], '<i class="mdi-action-delete"></i>')?>
	<?php } ?>

</td>
</tr>
<?php endforeach ?>
</tbody>
</table>