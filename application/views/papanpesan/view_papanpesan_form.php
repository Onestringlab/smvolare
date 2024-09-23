<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/papanpesan');
}
</script>
<div class="well bs-component">
<?php echo form_open('papanpesan/papanpesan_manage')?>
<fieldset>
	<legend>Kelola Papan Pesan</legend>
<?php if($action=="insert"){?>
	<div class="form-group">
      <label for="waktu" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="waktu" name="waktu" placeholder="waktu" type="text" disabled value="<?php echo date('d M Y H:i:s')?>">
      </div>
    </div>
    <div class="form-group">
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" placeholder="nama" type="text" disabled value="<?php echo $this->session-> userdata('name');?>">
      </div>
    </div>
     <div class="form-group">
      <label for="pesan" class="col-md-2 control-label">Pesan</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="pesan" name="pesan"></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		  <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="update"){?>
	<div class="form-group">
      <label for="waktu" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="waktu" name="waktu" placeholder="waktu" type="text" disabled value="<?php echo $row['waktu']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" placeholder="nama" type="text" disabled value="<?php echo $row['nama']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="pesan" class="col-md-2 control-label">Pesan</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="pesan" name="pesan"><?php echo $row['pesan']?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <?php echo form_hidden('idpapanpesan',$row['idpapanpesan'])?>
		  <button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		  <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="delete"){?>
	<div class="form-group">
      <label for="waktu" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="waktu" name="waktu" placeholder="waktu" type="text" disabled value="<?php echo $row['waktu']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" placeholder="nama" type="text" disabled value="<?php echo $row['nama']?>">
      </div>
    </div>
	<div class="form-group">
      <label for="pesan" class="col-md-2 control-label">Pesan</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="pesan" name="pesan" disabled><?php echo $row['pesan']?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <?php echo form_hidden('idpapanpesan',$row['idpapanpesan'])?>
		  <button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		  <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }?>
</fieldset>
</form>