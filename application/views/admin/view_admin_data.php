<h3>Data Admin [<?php echo anchor('admin/admin_form_insert/','<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<table class="table table-striped table-hover ">
<thead>
<tr>
	<th width="40">#</th>
	<th width="100">Role</th>
	<th>Nama</th>
	<th width="120">Username</th>
	<th width="200">Email</th>
	<th width="150">Updated On</td>
	<th width="100">Updated By</td>
	<th width="80"></td>
</tr>
</thead>
<tbody>
<?php
	$i=0;
	foreach($admin_list as $row):
		$i++;
	?>
<tr>
	<td class="center"><?php echo $i?></td>
	<td><?php echo $row['role']?></td>
	<td><?php echo $row['name']?></td>
	<td><?php echo $row['username']?></td>
	<td><?php echo $row['email']?></td>
	<td class="center"><?php echo $row['updatedon']?></td>
	<td class="center"><?php echo $row['updatedby']?></td>
	<td class="center">
		<?php echo anchor('admin/admin_form_update/'.$row['idadmin'], '<i class="mdi-action-description"></i>')?>
		<?php echo anchor('admin/admin_form_delete/'.$row['idadmin'], '<i class="mdi-action-delete"></i>')?>
	</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>