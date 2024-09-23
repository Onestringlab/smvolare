<br>
<center><h3><b>HARAP <span style="color:red">REFRESH</span> TERLEBIH DAHULU! SEBELUM PUTAR IKLAN</b></h3></center>
<audio id="audio" controls="controls">
	<source id="oggSource" src="" type="audio/ogg"></source>
	<source id="mp3Source" type="audio/mp3"></source>
	Your browser does not support the audio format.
</audio>
<br>
<div class="well bs-component col-md-6">
<h3>Data Jadwal Iklan - <?php echo $tanggal ?></h3>

<table class="table table-striped table-hover" id="jadwalIklan">
	<thead>
	<tr>
		<th width="5%">#</th>
		<th width="15%">Waktu</th>
		<th >Iklan</th>
		<th width="5%">File</th>
		<th width="5%"></th>
	</tr>
	</thead>
	<tbody>
<?php
	$i=1;
	foreach($jadwaliklan_list as $row):
		$iconStatus="<i class='material-icons'>mic</i>";
		$iconStatus2="<i class='material-icons'>check</i>";
	?>
	<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo tampilJam($row['waktu'])?></td>
		<td><?php echo $row['judul']?></td>
		<td>
			<?php if($row['tipe']=="Spot"){ ?>
			<a class="dataSuara" href="#" data-source="<?php echo base_url().'uploadFile/spot/'.$row['namafile'] ?>"
				id="<?php echo $row['idjadwaliklan']?>" idiklan="<?php echo $row['idiklan']?>">
				<i class="mdi-av-play-arrow"></i>
			</a>
			</td><td></td>
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
			</td?><td><a class="catatLog" href="#" id="<?php echo $row['idjadwaliklan']?>" idiklan="<?php echo $row['idiklan']?>"> <i class="mdi-content-create"></i></a></td>
			<?php } ?>
	</tr>
<?php
	if($row['jarak']==1) echo "<tr class='success'><td colspan='6'><br></td></tr>";
?>
<?php endforeach ?>
	</tbody>
</table>
</div>
<div class="well bs-component col-md-6">
<h3>Iklan Sudah Diputar - <?php echo $tanggal ?></h3>
<table class="table table-striped table-hover" id="iklanPutar">
	<thead>
	<tr>
		<th width="5%">#</th>
		<th width="30%">Waktu</th>
		<th >Iklan</th>
		<th width="5%">Oleh</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$i=1;
	foreach($logiklan_list as $row):
		$iconStatus="<i class='material-icons'>mic</i>";
		$iconStatus2="<i class='material-icons'>check</i>";
	?>
	<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo tampilTanggalJam($row['insertedon'])?></td>
		<td><?php echo $row['juduliklan']?></td>
		<td><?php echo $row['insertedby']?></td>
	</tr>
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

		$(this).closest('tr').remove();
		var idjadwaliklan =$(this).attr("id");
		var idiklan = $(this).attr("idiklan");
		var juduliklan = $(this).parent().prev().text();
		console.log(juduliklan);

		$.post("statusiklan_update",{
	        idjadwaliklan: idjadwaliklan,
	        idiklan: idiklan,
	        juduliklan: juduliklan
	    },
	    function(data, status){
	        //console.log("Data: " + data + "\nStatus: " + status);
	        $("#iklanPutar > tbody:first").prepend(data);
	    });
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
    $(".catatLog").click(function(){
    	$(this).closest('tr').remove();
		var idjadwaliklan =$(this).attr("id");
		var idiklan = $(this).attr("idiklan");
		var juduliklan = $(this).parent().prev().prev().text();
		console.log(idiklan);

		$.post("statusiklan_update",{
	        idjadwaliklan: idjadwaliklan,
	        idiklan: idiklan,
	        juduliklan: juduliklan
	    },
	    function(data, status){
	        //console.log("Data: " + data + "\nStatus: " + status);
	        $("#iklanPutar > tbody:first").prepend(data);
	    });
    });
});
</script>
<style>
table{
	background-color: white;
}
</style>
