<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/pengumuman');
}
</script>
<div class="well bs-component">
<?php echo form_open('pengumuman/pengumuman_manage')?>
<fieldset>
	<legend>Kelola Pengumuman</legend>
<?php if($action=="insert"){?>
	<div class="form-group">
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" placeholder="nama" type="text" disabled value="<?php echo $this->session-> userdata('name');?>">
      </div>
    </div>
    <div class="form-group">
      <label for="title" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="title" name="title" placeholder="Judul" type="text" >
      </div>
    </div>
     <div class="form-group">
      <label for="pengumuman" class="col-md-2 control-label">Pengumuman</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="pengumuman" name="pengumuman"></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		  <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="update"){?>
	<div class="form-group">
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" placeholder="nama" type="text" disabled value="<?php echo $this->session-> userdata('name');?>">
      </div>
    </div>
    <div class="form-group">
      <label for="title" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="title" name="title" placeholder="Judul" type="text" value="<?php echo $row['title']?>">
      </div>
    </div>
     <div class="form-group">
      <label for="pengumuman" class="col-md-2 control-label">Pengumuman</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="pengumuman" name="pengumuman"><?php echo $row['pengumuman']?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <?php echo form_hidden('idpengumuman',$row['idpengumuman'])?>
		  <button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		  <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="delete"){?>
	<div class="form-group">
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" placeholder="nama" type="text" disabled value="<?php echo $this->session-> userdata('name');?>">
      </div>
    </div>
     <div class="form-group">
      <label for="title" class="col-md-2 control-label">Judul</label>
      <div class="col-md-10">
        <input class="form-control" id="title" name="title" placeholder="Judul" type="text" value="<?php echo $row['title']?>" disabled>
      </div>
    </div>
     <div class="form-group">
      <label for="pengumuman" class="col-md-2 control-label">Pengumuman</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="10" id="pengumuman" name="pengumuman" disabled><?php echo $row['pengumuman']?></textarea>
      </div>
    </div>
    <div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <?php echo form_hidden('idpengumuman',$row['idpengumuman'])?>
		  <button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		  <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
	<?php }?>
</fieldset>
</form>