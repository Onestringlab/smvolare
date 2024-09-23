<h3>Data Spot [<?php echo anchor('spot/spot_form_insert/', '<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<audio id="audio" controls="controls">
    <source id="oggSource" src="" type="audio/ogg"></source>
    <source id="mp3Source" type="audio/mp3"></source>
    Your browser does not support the audio format.
</audio>
<table class="table table-striped table-hover ">
<thead>
<tr >
		<th width="5%">#</th>
		<th width="10%">Tipe</th>
		<th>Judul</th>
		<th width="5%">File</th>
		<th width="5%">Status</th>
		<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($spot_list as $row):
		$iconStatus="<i class='mdi-action-done'></i>";
	?>
<tr >
		<td><?php echo $i++;?></td>
		<td><?php echo $row['tipe']?></td>
		<td><?php echo $row['judul']?></td>
		<td>
			<a class="dataSuara" href="#" data-source="<?php echo base_url().'uploadFile/spot/'.$row['namafile'] ?>">
				<i class="mdi-av-play-arrow"></i>
			</a>
		</td>
		<td>
			<?php
			if($row['status']==0) $iconStatus="<i class='mdi-content-clear'></i>";
			echo $iconStatus;
			?>
		</td>
<td align="center">
	<?php echo anchor('spot/spot_form_update/'.$row['idiklan'], '<i class="mdi-action-description"></i>')?>
	<?php echo anchor('spot/spot_form_delete/'.$row['idiklan'], '<i class="mdi-action-delete"></i>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<script>
$(document).ready(function(){
    $(".dataSuara").click(function(){
    	var audio = document.getElementById('audio');
		var source = document.getElementById('oggSource');
		source.src = $(this).attr("data-source");

		audio.load(); //call this to just preload the audio without playing
		audio.play(); //call this to play the song right away
    });
});
</script>