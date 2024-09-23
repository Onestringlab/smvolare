<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/pemenang');
}
</script>
<div class="well bs-component">
<?php echo form_open('pemenang/pemenang_manage')?>
<fieldset>
	<legend>Kelola Pemenang Kuis</legend>
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
		<select id="idprogram" class="form-control" name="idprogram">
			<?php foreach($program_list as $row_program):?>
		     <option value="<?php echo $row_program['idprogram']?>">
			<?php echo $row_program['namaprogram']?>
		<?php  endforeach ?>
		</select>
	</div>
</div>
<div class="form-group" >
	<label for="pemenang" class="col-md-2 control-label">Pemenang</label>
	<div class="col-md-10">
		<textarea class="form-control" rows="5" id="pemenang" name="pemenang"></textarea>
	</div>
</div>
<div class="form-group" >
	<label for="sponsor" class="col-md-2 control-label">Sponsor</label>
	<div class="col-md-10">
		<input class="form-control" id="sponsor" name="sponsor" placeholder="Sponsor" type="text" >
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
		<select id="idprogram" class="form-control" name="idprogram">
			<?php foreach($program_list as $row_program):?>
		     <option value="<?php echo $row['idprogram']?>"
		     	<?php if($row['idprogram']==$row_program['idprogram']) echo "selected" ?>>
			<?php echo $row_program['namaprogram']?>
		<?php  endforeach ?>
		</select>
	</div>
</div>
<div class="form-group" >
	<label for="pemenang" class="col-md-2 control-label">Pemenang</label>
	<div class="col-md-10">
		<textarea class="form-control" rows="5" id="pemenang" name="pemenang"><?php echo $row['pemenang']?></textarea>
	</div>
</div>
<div class="form-group" >
	<label for="sponsor" class="col-md-2 control-label">Sponsor</label>
	<div class="col-md-10">
		<input class="form-control" id="sponsor" name="sponsor" placeholder="Sponsor" type="text" value="<?php echo $row['sponsor']?>">
	</div>
</div>
<div class="form-group" >
	<label for="keterangan" class="col-md-2 control-label">Keterangan</label>
	<div class="col-md-10">
		<input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text" value="<?php echo $row['keterangan']?>">
	</div>
</div>
<div class="form-group col-md-12">
	<?php echo form_hidden('action',$action)?>
	<?php echo form_hidden('idpemenang',$row['idpemenang'])?>
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
		<select id="idprogram" class="form-control" name="idprogram" disabled>
			<?php foreach($program_list as $row_program):?>
		     <option value="<?php echo $row['idprogram']?>"
		     	<?php if($row['idprogram']==$row_program['idprogram']) echo "selected" ?>>
			<?php echo $row_program['namaprogram']?>
		<?php  endforeach ?>
		</select>
	</div>
</div>
<div class="form-group" >
	<label for="pemenang" class="col-md-2 control-label">Pemenang</label>
	<div class="col-md-10">
		<textarea class="form-control" rows="5" id="pemenang" name="pemenang" disabled><?php echo $row['pemenang']?></textarea>
	</div>
</div>
<div class="form-group" >
	<label for="sponsor" class="col-md-2 control-label">Sponsor</label>
	<div class="col-md-10">
		<input class="form-control" id="sponsor" name="sponsor" placeholder="Sponsor" type="text" value="<?php echo $row['sponsor']?>" disabled>
	</div>
</div>
<div class="form-group" >
	<label for="keterangan" class="col-md-2 control-label">Keterangan</label>
	<div class="col-md-10">
		<input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text" value="<?php echo $row['keterangan']?>" disabled>
	</div>
</div>
<div class="form-group col-md-12">
	<?php echo form_hidden('action',$action)?>
	<?php echo form_hidden('idpemenang',$row['idpemenang'])?>
		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
</div>
<?php }?>
</table>
</form>