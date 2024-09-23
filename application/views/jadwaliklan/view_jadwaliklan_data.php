<h3>Data Jadwal Iklan [<?php echo anchor('jadwaliklan/jadwaliklan_form_insert/','<i class="mdi-content-add"></i>')?>]
</h3>
<div class="well bs-component">
<audio id="audio" controls="controls">
	<source id="oggSource" src="" type="audio/ogg"></source>
	<source id="mp3Source" type="audio/mp3"></source>
	Your browser does not support the audio format.
</audio>
<?php echo form_open('jadwaliklan/',array('method'=>'get'))?>
	<div class="form-group">
      <label for="tanggal" class="col-md-1 control-label">Tanggal</label>
      <div class="col-md-2">
        <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" value="<?php echo $tanggal ?>" required>
      </div>
      <button class="btn btn-sm btn-primary col-md-2" type="submit">Tampilkan</button>

      <label for="tanggalSalin" class="col-md-2 control-label">Salin Ke Tanggal</label>
      <div class="col-md-2">
        <input class="form-control" id="tanggalSalin" name="tanggalSalin" type="date">
      </div>
      <button class="btn btn-sm btn-primary col-md-2" type="button"
      id="salinIklan">Salin Iklan</button>
    </div>
</form>
<table class="table table-striped table-hover ">
<thead>
<tr>
		<th width="5%">#</th>
		<th width="5%">Input</th>
		<th width="10%">Tanggal</th>
		<th width="5%">Waktu</th>
		<th >Iklan</th>
		<th width="5%">File</th>
		<th width="5%">Jarak</th>
		<th width="5%">Putar</th>
		<th width="5%">Waktu</th>
		<th width="5%">Oleh</th>
		<th width="10%"></th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	foreach($jadwaliklan_list as $row):
		$iconStatus="<i class='mdi-av-mic'></i>";
		$iconStatus2="<i class='mdi-action-done'></i>";
	?>
<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo $row['insertedby']?></td>
		<td><?php echo tampilTanggal($row['tanggal'])?></td>
		<td><?php echo tampilJam($row['waktu'])?></td>
		<td><?php echo $row['judul']?></td>
		<td>
			<?php if($row['tipe']=="Spot"){ ?>
			<a class="dataSuara" href="#" data-source="<?php echo base_url().'uploadFile/spot/'.$row['namafile'] ?>">
				<i class="mdi-av-play-arrow"></i>
			</a>
			<?php } else { ?>
			<a class="dataTulisan" href="#" data-toggle="modal" data-target="#adlibs<?php echo $row['idjadwaliklan']?>">
				<i class="mdi-hardware-tv"></i>
			</a>
			<div id="adlibs<?php echo $row['idjadwaliklan']?>" class="modal fade" tabindex="-1">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title"><?php echo $row['judul']?></h4>
			      </div>
			      <div class="modal-body">
			        <?php echo nl2br($row['isiiklan'])?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
			      </div>
			    </div>
			  </div>
			</div>
			<?php } ?>
		</td>
		<td>
			<?php
			if($row['jarak']==0) {$iconStatus2="<i class='mdi-content-clear'></i>";}
			echo $iconStatus2;
			?>
		</td>
		<td>
			<?php
			if($row['status']==0) {$iconStatus="<i class='mdi-av-mic-off'></i>";}
			echo $iconStatus;
			?>
		</td>
		<?php if($row['status']==0) {?>
			<td></td>
			<td></td>
		<?php } else{ ?>
			<td><?php echo tampilJam2($row['updatedon'])?></td>
			<td><?php echo $row['updatedby']?></td>
		<?php }?>
		<td align="center">
			<?php
			//$username = $this->session-> userdata('username');
			//$role = $this->session-> userdata('role');
			//if(($username==$row['insertedby']) || $role=="Admin"){
			?>
				<?php echo anchor('jadwaliklan/jadwaliklan_form_update/'.$row['idjadwaliklan'], '<i class="mdi-action-description"></i>')?>
				<?php echo anchor('jadwaliklan/jadwaliklan_form_delete/'.$row['idjadwaliklan'], '<i class="mdi-action-delete"></i>')?>
			<?php //} ?>
		</td>
</tr>
<?php
	if($row['jarak']==1) echo "<tr class='success'><td colspan='11'><br></td></tr>";
?>
<?php endforeach ?>
</tbody>
</table>
</div>
<script>
$(document).ready(function(){
    $(".dataSuara").click(function(){
    	var audio = document.getElementById('audio');
		var source = document.getElementById('oggSource');
		source.src = $(this).attr("data-source");

		audio.load(); //call this to just preload the audio without playing
		audio.play(); //call this to play the song right away
    });
    $("#salinIklan").click(function(){
    	var tanggal =$("#tanggal").val();
    	var tanggalSalin =$("#tanggalSalin").val();
    	if(tanggal=="" || tanggalSalin==""){
    		alert("Masukan Tanggal dan Tanggal Salin");
    	}
    	if(tanggal!="" && tanggalSalin!=""){
    		window.location.href = 'jadwaliklan/jadwaliklan_salin?tanggal='+tanggal+'&tanggalSalin='+tanggalSalin;
    		 /*$.post("jadwaliklan/jadwaliklan_salin",
		        {
		          tanggal: "tanggal",
		          tanggalSalin: "tanggalSalin"
		        },
		        function(data,status){
		            console.log("Data: " + data + "\nStatus: " + status);
		        });
		      */
    	}

    });


});
</script>
