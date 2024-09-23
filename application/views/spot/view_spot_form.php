<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/spot');
}
</script>
<div class="well bs-component">
<?php echo form_open_multipart('spot/spot_manage')?>
<fieldset>
	<legend>Kelola Spot</legend>
	<?php if($action=="insert"){?>
	  <div class="form-group">
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Judul" type="text" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="inputFile" class="col-md-2 control-label">File</label>
      <div class="col-md-10">
        <input name="namaFile" id="namaFile" readonly="" class="form-control" placeholder="Browse..." type="text">
        <input name="userfile" id="userfile" type="file">
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
    <div class="form-group">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('tipe','Spot')?>
  		<button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	  </div>
<?php }if($action=="update"){?>
	  <div class="form-group">
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Nama Program" type="text" required="required"  value="<?php echo $row['judul']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputFile" class="col-md-2 control-label">File</label>
      <div class="col-md-10">
        <input name="namaFile" id="namaFile" readonly="" class="form-control" placeholder="Browse..." type="text">
        <input name="userfile" id="userfile" type="file">
      </div>
    </div>
    <div class="form-group">
      <label for="namaprogram" class="col-md-2 control-label">File Sebelumnya</label>
      <div class="col-md-10">
       <audio controls>
		  <source src="<?php echo base_url().'uploadFile/spot/'.$row['namafile'] ?>" type="audio/mpeg">
		</audio>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status">
            <option value="1" <?php if ($row['status']=="1") echo "selected"; ?>>Aktif</option>
          	<option value="0" <?php if ($row['status']=="0") echo "selected"; ?>>Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="form-group">
		<?php echo form_hidden('action',$action)?>
		<?php echo form_hidden('tipe','Spot')?>
		<?php echo form_hidden('idiklan',$row['idiklan'])?>
    <?php echo form_hidden('filetemp',$row['namafile'])?>
		<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="delete"){?>
     <div class="form-group">
      <label for="judul" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="judul" name="judul" placeholder="Nama Program" type="text" disabled  value="<?php echo $row['judul']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="namaprogram" class="col-md-2 control-label">File</label>
      <div class="col-md-10">
       <audio controls>
      <source src="<?php echo base_url().'uploadFile/spot/'.$row['namafile'] ?>" type="audio/mpeg">
    </audio>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status" disabled>
            <option value="1" <?php if ($row['status']=="1") echo "selected"; ?>>Aktif</option>
            <option value="0" <?php if ($row['status']=="0") echo "selected"; ?>>Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="form-group">
		<?php echo form_hidden('action',$action)?>
		<?php echo form_hidden('idiklan',$row['idiklan'])?>
		<?php echo form_hidden('filetemp',$row['namafile'])?>
		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }?>
</fieldset>
</form>

<script>
    $(document).on('change', '#userfile', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        $("#namaFile").val(label);
    });
</script>