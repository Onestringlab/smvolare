<script>
function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/absen');
}
</script>
<div class="well bs-component">
<?php echo form_open('absen/absen_manage')?>
<fieldset>
	<legend>Kelola Absen</legend>
<?php if($action=="insert"){?>
	<div class="form-group" >
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" type="text" value="<?php echo $this->session-> userdata('name');?>" disabled>
      </div>
    </div>
    <div class="form-group" >
      <label for="nama" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" type="text" value="<?php echo ambilTanggalJam();?>" disabled>
      </div>
    </div>
	<div class="form-group">
	    <label for="status" class="col-md-2 control-label">Program</label>
	    <div class="col-md-10">
	      <select id="idprogram" class="form-control" name="idprogram">
	      	<?php foreach($program_list as $row):?>
			     <option value="<?php echo $row['idprogram']?>">
				<?php echo $row['namaprogram']?>
			<?php  endforeach ?>
	  	</select>
	    </div>
	</div>
    <div class="form-group">
      <label for="sebagai" class="col-md-2 control-label">Sebagai</label>
      <div class="col-md-10">
        <select id="sebagai" class="form-control" name="sebagai">
          <option value="Karyawan">Karyawan</option>
          <option value="Operator">Operator</option>
		  <option value="Penyiar">Penyiar</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="siaran" class="col-md-2 control-label">Siaran</label>
      <div class="col-md-10">
        <select id="siaran" class="form-control" name="siaran">
          <option value="Sendiri">Sendiri</option>
          <option value="Grup">Grup</option>
        </select>
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text">
      </div>
    </div>
    <div class="form-group col-md-12">
		  <?php echo form_hidden('action',$action)?>
		  <button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="update"){?>
	<div class="form-group" >
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" type="text" value="<?php echo $this->session-> userdata('name');?>" disabled>
      </div>
    </div>
    <div class="form-group" >
      <label for="nama" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" type="text" value="<?php echo ambilTanggalJam();?>" disabled>
      </div>
    </div>
	<div class="form-group">
	    <label for="status" class="col-md-2 control-label">Program</label>
	    <div class="col-md-10">
	      <select id="idprogram" class="form-control" name="idprogram">
	      	<?php foreach($program_list as $rowList):?>
			<option value="<?php echo $rowList['idprogram']?>"
				<?php if($rowList['idprogram']==$row['idprogram']) echo "selected"?>>
				<?php echo $rowList['namaprogram']?>
			<?php  endforeach ?>
	  	</select>
	    </div>
  	</div>
    <div class="form-group">
      <label for="sebagai" class="col-md-2 control-label">Sebagai</label>
      <div class="col-md-10">
        <select id="sebagai" class="form-control" name="sebagai">
          <option value="Karyawan" <?php if ($row['sebagai']=="Karyawan") echo "selected"; ?>>Karyawan</option>
          <option value="Operator" <?php if ($row['sebagai']=="Operator") echo "selected"; ?>>Operator</option>
		  <option value="Penyiar" <?php if ($row['sebagai']=="Penyiar") echo "selected"; ?>>Penyiar</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="siaran" class="col-md-2 control-label">Siaran</label>
      <div class="col-md-10">
        <select id="siaran" class="form-control" name="siaran">
          <option value="Sendiri" <?php if ($row['siaran']=="Sendiri") echo "selected"; ?>>Sendiri</option>
          <option value="Grup" <?php if ($row['siaran']=="Grup") echo "selected"; ?>>Grup</option>
        </select>
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
		  <?php echo form_hidden('idabsen',$row['idabsen'])?>
		  <button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		<button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
	</div>
<?php }if($action=="delete"){?>
  <div class="form-group" >
      <label for="nama" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" type="text" value="<?php echo $this->session-> userdata('name');?>" disabled>
      </div>
    </div>
    <div class="form-group" >
      <label for="nama" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="nama" name="nama" type="text" value="<?php echo ambilTanggalJam();?>" disabled>
      </div>
    </div>
  <div class="form-group">
      <label for="status" class="col-md-2 control-label">Program</label>
      <div class="col-md-10">
        <select id="idprogram" class="form-control" name="idprogram" disabled>
          <?php foreach($program_list as $rowList):?>
      <option value="<?php echo $rowList['idprogram']?>"
        <?php if($rowList['idprogram']==$row['idprogram']) echo "selected"?>>
        <?php echo $rowList['namaprogram']?>
      <?php  endforeach ?>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label for="sebagai" class="col-md-2 control-label">Sebagai</label>
      <div class="col-md-10">
        <select id="sebagai" class="form-control" name="sebagai" disabled>
          <option value="Karyawan" <?php if ($row['sebagai']=="Karyawan") echo "selected"; ?>>Karyawan</option>
          <option value="Operator" <?php if ($row['sebagai']=="Operator") echo "selected"; ?>>Operator</option>
      <option value="Penyiar" <?php if ($row['sebagai']=="Penyiar") echo "selected"; ?>>Penyiar</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="siaran" class="col-md-2 control-label">Siaran</label>
      <div class="col-md-10">
        <select id="siaran" class="form-control" name="siaran" disabled>
          <option value="Sendiri" <?php if ($row['siaran']=="Sendiri") echo "selected"; ?>>Sendiri</option>
          <option value="Grup" <?php if ($row['siaran']=="Grup") echo "selected"; ?>>Grup</option>
        </select>
      </div>
    </div>
    <div class="form-group" >
      <label for="keterangan" class="col-md-2 control-label" disabled>Keterangan</label>
      <div class="col-md-10">
        <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" type="text" value="<?php echo $row['keterangan']?>" disabled>
      </div>
    </div>
    <div class="form-group col-md-12">
      <?php echo form_hidden('action',$action)?>
      <?php echo form_hidden('idabsen',$row['idabsen'])?>
      <button class="btn btn-lg btn-primary" type="submit">Hapus</button>
      <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
  </div>
<?php }?>
</table>
</form>