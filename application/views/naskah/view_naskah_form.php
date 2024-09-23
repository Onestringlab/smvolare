<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/naskah');
}
</script>
<div class="well bs-component">
<?php echo form_open('naskah/naskah_manage')?>
<fieldset>
	<legend>Kelola Naskah</legend>
<?php if($action=="insert"){?>
	<div class="form-group" >
    <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
    <div class="col-md-10">
      <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" required>
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
	  <div class="form-group" >
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Judul" type="text" required>
      </div>
    </div>
    <div class="form-group">
      <label for="isinaskah" class="col-md-2 control-label">Isi</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="isinaskah" name="isinaskah"></textarea>
      </div>
    </div>
  	<div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="update"){?>
	<div class="form-group" >
      <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
      <div class="col-md-10">
        <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" value="<?php echo $row['tanggal']?>" required>
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
	<div class="form-group" >
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Judul" type="text" value="<?php echo $row['judul']?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="isinaskah" class="col-md-2 control-label">Isi</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="isinaskah" name="isinaskah"><?php echo $row['isinaskah']?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		<?php echo form_hidden('action',$action)?>
		<?php echo form_hidden('idnaskah',$row['idnaskah'])?>
		<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="delete"){?>
	<div class="form-group" >
      <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
      <div class="col-md-10">
        <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" value="<?php echo $row['tanggal']?>" disabled>
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
	<div class="form-group" >
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Judul" type="text" value="<?php echo $row['judul']?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="isinaskah" class="col-md-2 control-label">Isi</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="isinaskah" name="isinaskah" disabled><?php echo $row['isinaskah']?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		<?php echo form_hidden('action',$action)?>
		<?php echo form_hidden('idnaskah',$row['idnaskah'])?>
		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }?>
</table>
</form>