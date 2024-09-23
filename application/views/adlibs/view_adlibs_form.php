<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/adlibs');
}
</script>
<div class="well bs-component">
<?php echo form_open('adlibs/adlibs_manage')?>
<fieldset>
	<legend>Kelola Adlibs</legend>
<?php if($action=="insert"){?>
    <div class="form-group" >
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Judul" type="text" required>
      </div>
    </div>
    <div class="form-group">
      <label for="isiiklan" class="col-md-2 control-label">Isi</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="isiiklan" name="isiiklan"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status">
          <option value="1">Aktif</option>
          <option value="0">Tidak Aktif</option>
        </select>
      </div>
    </div>

   <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('tipe','Adlibs')?>
  		<button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	 </div>
<?php }if($action=="update"){?>

	  <div class="form-group">
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Judul" type="text" value="<?php echo $row['judul']?>" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="inputFile" class="col-md-2 control-label">Isi</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="textArea" name="isiiklan"><?php echo $row['isiiklan']?></textarea>
      </div>
    </div>
     <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status">
           <option value="1" <?php if($row['status']==1) echo "selected"?>>Aktif</option>
          <option value="0" <?php if($row['status']==0) echo "selected"?>>Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('tipe','Adlibs')?>
  		<?php echo form_hidden('idiklan',$row['idiklan'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	 </div>
<?php }if($action=="delete"){?>

	  <div class="form-group">
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Judul" type="text" value="<?php echo $row['judul']?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="inputFile" class="col-md-2 control-label">Isi</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="textArea" name="isiiklan" disabled><?php echo $row['isiiklan']?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status" disabled>
           <option value="1" <?php if($row['status']==1) echo "selected"?>>Aktif</option>
          <option value="0" <?php if($row['status']==0) echo "selected"?>>Tidak Aktif</option>
        </select>
      </div>
    </div>
     <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status" disabled>
          <option value="1">Aktif</option>
          <option value="0">Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('idiklan',$row['idiklan'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	 </div>
<?php }?>
</table>
</form>