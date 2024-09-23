<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/rotw');
}
</script>
<div class="well bs-component">
<?php echo form_open('rotw/rotw_manage')?>
<fieldset>
	<legend>Kelola ROTW</legend>
<?php if($action=="insert"){?>
	<div class="form-group">
      <label for="judullagu" class="col-md-2 control-label">Judul Lagu</label>
      <div class="col-md-10">
        <input class="form-control" id="judullagu" name="judullagu" placeholder="judullagu" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="artis" class="col-md-2 control-label">Artis</label>
      <div class="col-md-10">
        <input class="form-control" id="artis" name="artis" placeholder="artis" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="alasan" class="col-md-2 control-label">alasan</label>
      <div class="col-md-10">
        <input class="form-control" id="alasan" name="alasan" placeholder="alasan" type="text">
      </div>
    </div>
    <div class="form-group col-md-12">
	  	<?php echo form_hidden('action',$action)?>
	  	<button class="btn btn-lg btn-primary" type="submit">Tambah</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="update"){?>
	<div class="form-group">
      <label for="judullagu" class="col-md-2 control-label">Judul Lagu</label>
      <div class="col-md-10">
        <input class="form-control" id="judullagu" name="judullagu" placeholder="judullagu" type="text"  value="<?php echo $row['judullagu']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="artis" class="col-md-2 control-label">Artis</label>
      <div class="col-md-10">
        <input class="form-control" id="artis" name="artis" placeholder="artis" type="text"  value="<?php echo $row['artis']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="alasan" class="col-md-2 control-label">alasan</label>
      <div class="col-md-10">
        <input class="form-control" id="alasan" name="alasan" placeholder="alasan" type="text"  value="<?php echo $row['alasan']?>">
      </div>
    </div>
    <div class="form-group col-md-12">
	  	<?php echo form_hidden('action',$action)?>
	  	<?php echo form_hidden('idrotw',$row['idrotw'])?>
	  	<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="delete"){?>
	<div class="form-group">
      <label for="judullagu" class="col-md-2 control-label">Judul Lagu</label>
      <div class="col-md-10">
        <input class="form-control" id="judullagu" name="judullagu" placeholder="judullagu" type="text"  value="<?php echo $row['judullagu']?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="artis" class="col-md-2 control-label">Artis</label>
      <div class="col-md-10">
        <input class="form-control" id="artis" name="artis" placeholder="artis" type="text"  value="<?php echo $row['artis']?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="alasan" class="col-md-2 control-label">alasan</label>
      <div class="col-md-10">
        <input class="form-control" id="alasan" name="alasan" placeholder="alasan" type="text"  value="<?php echo $row['alasan']?>" disabled>
      </div>
    </div>
    <div class="form-group col-md-12">
	  	<?php echo form_hidden('action',$action)?>
	  	<?php echo form_hidden('idrotw',$row['idrotw'])?>
	  	<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }?>
</fieldset>
</form>