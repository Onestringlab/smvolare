<h3>Jadwal Siaran </h3>
<div class="well bs-component">
<ul class="nav nav-tabs">
  <li><a data-toggle="tab" href="#Senin">Senin</a></li>
  <li><a data-toggle="tab" href="#Selasa">Selasa</a></li>
  <li><a data-toggle="tab" href="#Rabu">Rabu</a></li>
  <li><a data-toggle="tab" href="#Kamis">Kamis</a></li>
  <li><a data-toggle="tab" href="#Jumat">Jumat</a></li>
  <li><a data-toggle="tab" href="#Sabtu">Sabtu</a></li>
  <li><a data-toggle="tab" href="#Minggu">Minggu</a></li>
</ul>

<div class="tab-content">
  <div id="Senin" class="tab-pane fade  <?php echo getActive(1);?> ">
  	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th width="2%">#</th>
			<th width="5%">Hari</th>
			<th width="5%">Mulai</th>
			<th width="5%">Selesai</th>
			<th width="15%">Program</th>
			<th width="15%">Petugas 1</th>
			<th width="15%">Petugas 2</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($senin as $row):
			?>
		<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo tampilHari($row['hari'])?></td>
				<td><?php echo tampilJam($row['mulai'])?></td>
				<td><?php echo tampilJam($row['selesai'])?></td>
				<td><?php echo $row['namaprogram']?></td>
				<td><?php echo $row['petugas1']?></td>
				<td><?php echo $row['petugas2']?></td>
				<td><?php echo $row['keterangan']?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
  </div>

  <div id="Selasa" class="tab-pane fade <?php echo getActive(2);?>">
  	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th width="2%">#</th>
			<th width="5%">Hari</th>
			<th width="5%">Mulai</th>
			<th width="5%">Selesai</th>
			<th width="15%">Program</th>
			<th width="15%">Petugas 1</th>
			<th width="15%">Petugas 2</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($selasa as $row):
			?>
		<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo tampilHari($row['hari'])?></td>
				<td><?php echo tampilJam($row['mulai'])?></td>
				<td><?php echo tampilJam($row['selesai'])?></td>
				<td><?php echo $row['namaprogram']?></td>
				<td><?php echo $row['petugas1']?></td>
				<td><?php echo $row['petugas2']?></td>
				<td><?php echo $row['keterangan']?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
  </div>

  <div id="Rabu" class="tab-pane fade <?php echo getActive(3);?>">
  	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th width="2%">#</th>
			<th width="5%">Hari</th>
			<th width="5%">Mulai</th>
			<th width="5%">Selesai</th>
			<th width="15%">Program</th>
			<th width="15%">Petugas 1</th>
			<th width="15%">Petugas 2</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($rabu as $row):
			?>
		<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo tampilHari($row['hari'])?></td>
				<td><?php echo tampilJam($row['mulai'])?></td>
				<td><?php echo tampilJam($row['selesai'])?></td>
				<td><?php echo $row['namaprogram']?></td>
				<td><?php echo $row['petugas1']?></td>
				<td><?php echo $row['petugas2']?></td>
				<td><?php echo $row['keterangan']?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
  </div>

  <div id="Kamis" class="tab-pane fade <?php echo getActive(4);?>">
  	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th width="2%">#</th>
			<th width="5%">Hari</th>
			<th width="5%">Mulai</th>
			<th width="5%">Selesai</th>
			<th width="15%">Program</th>
			<th width="15%">Petugas 1</th>
			<th width="15%">Petugas 2</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($kamis as $row):
			?>
		<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo tampilHari($row['hari'])?></td>
				<td><?php echo tampilJam($row['mulai'])?></td>
				<td><?php echo tampilJam($row['selesai'])?></td>
				<td><?php echo $row['namaprogram']?></td>
				<td><?php echo $row['petugas1']?></td>
				<td><?php echo $row['petugas2']?></td>
				<td><?php echo $row['keterangan']?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
  </div>

  <div id="Jumat" class="tab-pane fade <?php echo getActive(5);?>">
  	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th width="2%">#</th>
			<th width="5%">Hari</th>
			<th width="5%">Mulai</th>
			<th width="5%">Selesai</th>
			<th width="15%">Program</th>
			<th width="15%">Petugas 1</th>
			<th width="15%">Petugas 2</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($jumat as $row):
			?>
		<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo tampilHari($row['hari'])?></td>
				<td><?php echo tampilJam($row['mulai'])?></td>
				<td><?php echo tampilJam($row['selesai'])?></td>
				<td><?php echo $row['namaprogram']?></td>
				<td><?php echo $row['petugas1']?></td>
				<td><?php echo $row['petugas2']?></td>
				<td><?php echo $row['keterangan']?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
  </div>

  <div id="Sabtu" class="tab-pane fade <?php echo getActive(6);?>">
  	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th width="2%">#</th>
			<th width="5%">Hari</th>
			<th width="5%">Mulai</th>
			<th width="5%">Selesai</th>
			<th width="15%">Program</th>
			<th width="15%">Petugas 1</th>
			<th width="15%">Petugas 2</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($sabtu as $row):
			?>
		<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo tampilHari($row['hari'])?></td>
				<td><?php echo tampilJam($row['mulai'])?></td>
				<td><?php echo tampilJam($row['selesai'])?></td>
				<td><?php echo $row['namaprogram']?></td>
				<td><?php echo $row['petugas1']?></td>
				<td><?php echo $row['petugas2']?></td>
				<td><?php echo $row['keterangan']?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
  </div>

  <div id="Minggu" class="tab-pane fade <?php echo getActive(7);?>">
  	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th width="2%">#</th>
			<th width="5%">Hari</th>
			<th width="5%">Mulai</th>
			<th width="5%">Selesai</th>
			<th width="15%">Program</th>
			<th width="15%">Petugas 1</th>
			<th width="15%">Petugas 2</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($minggu as $row):
			?>
		<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo tampilHari($row['hari'])?></td>
				<td><?php echo tampilJam($row['mulai'])?></td>
				<td><?php echo tampilJam($row['selesai'])?></td>
				<td><?php echo $row['namaprogram']?></td>
				<td><?php echo $row['petugas1']?></td>
				<td><?php echo $row['petugas2']?></td>
				<td><?php echo $row['keterangan']?></td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
  </div>
</div>

</div>