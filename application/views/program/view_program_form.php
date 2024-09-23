<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/program');
}
</script>
<div class="well bs-component">
<?php echo form_open('program/program_manage')?>
<fieldset>
	<legend>Kelola Program</legend>
	<?php if($action=="insert"){?>
	<div class="form-group">
      <label for="namaprogram" class="col-md-2 control-label">Nama Program</label>
      <div class="col-md-10">
        <input class="form-control" id="namaprogram" name="namaprogram" placeholder="Nama Program" type="text" required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="statusprogram" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="statusprogram" class="form-control" name="statusprogram">
          <option value="1">Aktif</option>
          <option value="0">Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
    <?php echo form_hidden('action',$action)?>
    	<button class="btn btn-lg btn-primary" type="submit">Tambah</button>
    	<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	   </div>
	<?php }if($action=="update"){?>
	  <div class="form-group">
      <label for="namaprogram" class="col-md-2 control-label">Nama Program</label>
      <div class="col-md-10">
        <input class="form-control" id="namaprogram" name="namaprogram" placeholder="Nama Program" type="text" required="required" value="<?php echo $row['namaprogram']?>">
      </div>
    </div>

    <div class="form-group">
      <label for="statusprogram" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="statusprogram" class="form-control" name="statusprogram">
          <option value="1" <?php if ($row['statusprogram']=="1") echo "selected"; ?>>Aktif</option>
          <option value="0" <?php if ($row['statusprogram']=="0") echo "selected"; ?>>Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('idprogram',$row['idprogram'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	  </div>
	<?php }if($action=="delete"){ $iconStatus="<i class='material-icons'>check</i>"; ?>
	 <div class="form-group">
      <label for="namaprogram" class="col-md-2 control-label">Nama Program</label>
      <div class="col-md-10">
        <input class="form-control" id="namaprogram" name="namaprogram" placeholder="Nama Program" type="text" value="<?php echo $row['namaprogram']?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="statusprogram" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="statusprogram" class="form-control" name="statusprogram" disabled>
          <option value="1" <?php if ($row['statusprogram']=="1") echo "selected"; ?>>Aktif</option>
          <option value="0" <?php if ($row['statusprogram']=="0") echo "selected"; ?>>Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('idprogram',$row['idprogram'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	  </div>
	<?php }?>
	</fieldset>
</form>
</div>