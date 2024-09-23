<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/topik');
}
</script>
<div class="well bs-component">
<?php echo form_open('topik/topik_manage')?>
<fieldset>
	<legend>Kelola Topik</legend>
<table border="0" width="100%" cellpadding="5" cellspacing="1" class="orange">
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
      <label for="topik" class="col-md-2 control-label">Topik</label>
      <div class="col-md-10">
        <input class="form-control" id="topik" name="topik" placeholder="Topik" type="text" required>
      </div>
    </div>
    <div class="form-group" >
      <label for="narasumber" class="col-md-2 control-label">Narasumber</label>
      <div class="col-md-10">
        <input class="form-control" id="narasumber" name="narasumber" placeholder="Narasumber" type="text" >
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text" >
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
      <label for="topik" class="col-md-2 control-label">Topik</label>
      <div class="col-md-10">
        <input class="form-control" id="topik" name="topik" placeholder="Topik" type="text" required value="<?php echo $row['topik']?>">
      </div>
    </div>
    <div class="form-group" >
      <label for="narasumber" class="col-md-2 control-label">Narasumber</label>
      <div class="col-md-10">
        <input class="form-control" id="narasumber" name="narasumber" placeholder="Narasumber" type="text"  value="<?php echo $row['narasumber']?>">
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text"  value="<?php echo $row['keterangan']?>">
      </div>
    </div>
	<div class="form-group col-md-12">
		<?php echo form_hidden('action',$action)?>
		<?php echo form_hidden('idtopik',$row['idtopik'])?>
		<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="delete"){?>
	<div class="form-group" >
	    <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
	    <div class="col-md-10">
	      <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" required value="<?php echo $row['tanggal']?>" disabled>
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
      <label for="topik" class="col-md-2 control-label">Topik</label>
      <div class="col-md-10">
        <input class="form-control" id="topik" name="topik" placeholder="Topik" type="text" required value="<?php echo $row['topik']?>" disabled>
      </div>
    </div>
    <div class="form-group" >
      <label for="narasumber" class="col-md-2 control-label">Narasumber</label>
      <div class="col-md-10">
        <input class="form-control" id="narasumber" name="narasumber" placeholder="Narasumber" type="text" required value="<?php echo $row['narasumber']?>" disabled>
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text" required value="<?php echo $row['keterangan']?>" disabled>
      </div>
    </div>
	<div class="form-group col-md-12">
		<?php echo form_hidden('action',$action)?>
		<?php echo form_hidden('idtopik',$row['idtopik'])?>
		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }?>
</fieldset>
</form>