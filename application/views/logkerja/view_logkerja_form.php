<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/logkerja');
}
</script>

<?php echo form_open('logkerja/logkerja_manage')?>
<div class="well bs-component">
<?php echo form_open('naskah/naskah_manage')?>
<fieldset>
	<legend>Kelola Log Kerja</legend>
<?php if($action=="insert"){?>
	<div class="form-group" >
	    <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
	    <div class="col-md-10">
	      <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" required>
	    </div>
	</div>
	<div class="form-group" >
      <label for="kerja" class="col-md-2 control-label">Kerja</label>
      <div class="col-md-10">
        <textarea class="form-control" id="kerja" name="kerja" placeholder="" rows="5"></textarea>
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="" rows="5"></textarea>
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
	      <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" required value="<?php echo $row['tanggal']?>">
	    </div>
	</div>
	<div class="form-group" >
      <label for="kerja" class="col-md-2 control-label">Kerja</label>
      <div class="col-md-10">
        <textarea class="form-control" id="kerja" name="kerja" placeholder="" rows="5"><?php echo $row['kerja']?></textarea>
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="" rows="5"><?php echo $row['keterangan']?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
	  <?php echo form_hidden('action',$action)?>
	  <?php echo form_hidden('idlogkerja',$row['idlogkerja'])?>
	  <button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
  	</div>
<?php }if($action=="delete"){?>
<div class="form-group" >
	    <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
	    <div class="col-md-10">
	      <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" disabled value="<?php echo $row['tanggal']?>">
	    </div>
	</div>
	<div class="form-group" >
      <label for="kerja" class="col-md-2 control-label">Kerja</label>
      <div class="col-md-10">
        <textarea class="form-control" id="kerja" name="kerja" placeholder="" rows="5" disabled><?php echo nl2br($row['kerja'])?></textarea>
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="" rows="5" disabled><?php echo nl2br($row['keterangan'])?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
	  <?php echo form_hidden('action',$action)?>
	  <?php echo form_hidden('idlogkerja',$row['idlogkerja'])?>
	  <button class="btn btn-lg btn-primary" type="submit">Hapus</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
  	</div>
<?php }?>
</table>
</form>