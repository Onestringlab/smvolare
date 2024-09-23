<style>
div .form-group {
    padding-bottom: 7px;
    margin: 128px 0 0 0;
    display: inline;
}
</style>

<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/jadwal');
}
</script>
<div class="well bs-component">
<?php echo form_open('jadwal/jadwal_manage')?>
<fieldset>
	<legend>Kelola Jadwal Siaran</legend>
<?php if($action=="insert"){?>
	  <div class="form-group">
      <label for="status" class="col-md-2 control-label">Hari</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="hari">
          <option value="1">Senin</option>
          <option value="2">Selasa</option>
          <option value="3">Rabu</option>
          <option value="4">Kamis</option>
          <option value="5">Jum'at</option>
          <option value="6">Sabtu</option>
          <option value="7">Minggu</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="mulai" class="col-md-2 control-label">Mulai</label>
      <div class="col-md-10">
        <input class="form-control" id="mulai" name="mulai" placeholder="Mulai" type="time" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="selesai" class="col-md-2 control-label">Selesai</label>
      <div class="col-md-10">
        <input class="form-control" id="selesai" name="selesai" placeholder="Selesai" type="time" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Program</label>
      <div class="col-md-10">
        <select id="program" class="form-control" name="program">
        	<?php foreach($program_list as $row):?>
			     <option value="<?php echo $row['idprogram']?>">
				<?php echo $row['namaprogram']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Petugas 1</label>
      <div class="col-md-10">
        <select id="petugas1" class="form-control" name="petugas1">
        	<?php foreach($penyiar_list as $row):?>
			<option value="<?php echo $row['idadmin']?>">
				<?php echo $row['name']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Petugas 2</label>
      <div class="col-md-10">
        <select id="petugas2" class="form-control" name="petugas2">
        	<?php foreach($penyiar_list as $row):?>
			<option value="<?php echo $row['idadmin']?>">
				<?php echo $row['name']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
	  <div class="form-group">
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text">
      </div>
    </div>
    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	 </div>

<?php }if($action=="update"){?>
	  <div class="form-group">
      <label for="status" class="col-md-2 control-label">Hari</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="hari">
          <option value="1" <?php if($row['hari']==1) echo "selected"?>>Senin</option>
          <option value="2" <?php if($row['hari']==2) echo "selected"?>>Selasa</option>
          <option value="3" <?php if($row['hari']==3) echo "selected"?>>Rabu</option>
          <option value="4" <?php if($row['hari']==4) echo "selected"?>>Kamis</option>
          <option value="5" <?php if($row['hari']==5) echo "selected"?>>Jum'at</option>
          <option value="6" <?php if($row['hari']==6) echo "selected"?>>Sabtu</option>
          <option value="7" <?php if($row['hari']==7) echo "selected"?>>Minggu</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="mulai" class="col-md-2 control-label">Mulai</label>
      <div class="col-md-10">
        <input class="form-control" id="mulai" name="mulai" placeholder="Mulai" type="time" required="required" value="<?php echo $row['mulai']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="selesai" class="col-md-2 control-label">Selesai</label>
      <div class="col-md-10">
        <input class="form-control" id="selesai" name="selesai" placeholder="Selesai" type="time" required="required" value="<?php echo $row['selesai']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Program</label>
      <div class="col-md-10">
        <select id="program" class="form-control" name="program">
        	<?php foreach($program_list as $rowList):?>
			<option value="<?php echo $rowList['idprogram']?>"
				<?php if($rowList['idprogram']==$row['program']) echo "selected"?>>
				<?php echo $rowList['namaprogram']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Petugas 1</label>
      <div class="col-md-10">
        <select id="petugas1" class="form-control" name="petugas1">
        	<?php foreach($penyiar_list as $rowList):?>
			<option value="<?php echo $rowList['idadmin']?>"
				<?php if($rowList['idadmin']==$row['petugas1']) echo "selected"?>>
				<?php echo $rowList['name']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Petugas 2</label>
      <div class="col-md-10">
        <select id="petugas2" class="form-control" name="petugas2">
        	<?php foreach($penyiar_list as $rowList):?>
			<option value="<?php echo $rowList['idadmin']?>"
				<?php if($rowList['idadmin']==$row['petugas2']) echo "selected"?>>
				<?php echo $rowList['name']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
	  <div class="form-group">
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text" value="<?php echo $row['keterangan']?>">
      </div>
    </div>
     <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('idjadwal',$row['idjadwal'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	 </div>
<?php }if($action=="delete"){?>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Hari</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="hari" disabled>
          <option value="1" <?php if($row['hari']==1) echo "selected"?>>Senin</option>
          <option value="2" <?php if($row['hari']==2) echo "selected"?>>Selasa</option>
          <option value="3" <?php if($row['hari']==3) echo "selected"?>>Rabu</option>
          <option value="4" <?php if($row['hari']==4) echo "selected"?>>Kamis</option>
          <option value="5" <?php if($row['hari']==5) echo "selected"?>>Jum'at</option>
          <option value="6" <?php if($row['hari']==6) echo "selected"?>>Sabtu</option>
          <option value="7" <?php if($row['hari']==7) echo "selected"?>>Minggu</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="mulai" class="col-md-2 control-label">Mulai</label>
      <div class="col-md-10">
        <input class="form-control" id="mulai" name="mulai" placeholder="Mulai" type="time" required="required" value="<?php echo $row['mulai']?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="selesai" class="col-md-2 control-label">Selesai</label>
      <div class="col-md-10">
        <input class="form-control" id="selesai" name="selesai" placeholder="Selesai" type="time" required="required" value="<?php echo $row['selesai']?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Program</label>
      <div class="col-md-10">
        <select id="program" class="form-control" name="program" disabled>
        	<?php foreach($program_list as $rowList):?>
			<option value="<?php echo $rowList['idprogram']?>"
				<?php if($rowList['idprogram']==$row['program']) echo "selected"?>>
				<?php echo $rowList['namaprogram']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Petugas 1</label>
      <div class="col-md-10">
        <select id="petugas1" class="form-control" name="petugas1" disabled>
        	<?php foreach($penyiar_list as $rowList):?>
			<option value="<?php echo $rowList['idadmin']?>"
				<?php if($rowList['idadmin']==$row['petugas1']) echo "selected"?>>
				<?php echo $rowList['name']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Petugas 2</label>
      <div class="col-md-10">
        <select id="petugas2" class="form-control" name="petugas2" disabled>
        	<?php foreach($penyiar_list as $rowList):?>
			<option value="<?php echo $rowList['idadmin']?>"
				<?php if($rowList['idadmin']==$row['petugas2']) echo "selected"?>>
				<?php echo $rowList['name']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
	  <div class="form-group">
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text" value="<?php echo $row['keterangan']?>" disabled>
      </div>
    </div>
     <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
		<?php echo form_hidden('idjadwal',$row['idjadwal'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	 </div>
<?php }?>
</table>
</form>
