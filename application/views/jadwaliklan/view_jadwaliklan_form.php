<div class="well bs-component">
<?php echo form_open('jadwaliklan/jadwaliklan_manage')?>
<fieldset>
	<legend>Kelola Jadwal Iklan</legend>
<?php if($action=="insert"){?>
	 <div class="form-group">
      <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
      <div class="col-md-10">
        <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" required>
      </div>
    </div>
    <div class="form-group">
      <label for="waktu" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="waktu" name="waktu" placeholder="waktu" type="time" required>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Iklan</label>
      <div class="col-md-10">
        <select id="iklan" class="form-control" name="iklan">
        	<?php foreach($iklan_list as $row_iklan):?>
			      <option value="<?php echo $row_iklan['idiklan']?>">
				  <?php echo $row_iklan['judul']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status Putar</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status">
          <option value="0">Belum</option>
          <option value="1">Sudah</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="jarak" class="col-md-2 control-label">Jarak</label>
      <div class="col-md-10">
        <select id="jarak" class="form-control" name="jarak">
          <option value="1">Ya</option>
          <option value="0">Tidak</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<button class="btn btn-lg btn-primary" type="submit">Tambah</button>
  		<button class="btn btn-lg btn-primary" type="button" id="button_cancel">Batal</button>
	</div>
<?php }if($action=="update"){?>
	<div class="form-group">
      <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
      <div class="col-md-10">
        <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" required value="<?php echo $row['tanggal']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="waktu" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="waktu" name="waktu" placeholder="waktu" type="time" required value="<?php echo $row['waktu']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Iklan</label>
      <div class="col-md-10">
        <select id="iklan" class="form-control" name="iklan">
        	<?php foreach($iklan_list as $row_iklan):?>
			      <option value="<?php echo $row_iklan['idiklan']?>"
			      	<?php if($row_iklan['idiklan']==$row['iklan']) echo "selected"?>>
				  <?php echo $row_iklan['judul']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status Putar</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status">
          <option value="0" <?php if ($row['status']=="0") echo "selected"; ?>>Belum</option>
          <option value="1" <?php if ($row['status']=="1") echo "selected"; ?>>Sudah</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="jarak" class="col-md-2 control-label">Jarak</label>
      <div class="col-md-10">
        <select id="jarak" class="form-control" name="jarak">
          <option value="1" <?php if ($row['jarak']=="1") echo "selected"; ?>>Ya</option>
          <option value="0" <?php if ($row['jarak']=="0") echo "selected"; ?>>Tidak</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('idjadwaliklan',$row['idjadwaliklan'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
  		<button class="btn btn-lg btn-primary" type="button" id="button_cancel">Batal</button>
	</div>
<?php }if($action=="delete"){?>
<div class="form-group">
      <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
      <div class="col-md-10">
        <input class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" type="date" disabled value="<?php echo $row['tanggal']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="waktu" class="col-md-2 control-label">Waktu</label>
      <div class="col-md-10">
        <input class="form-control" id="waktu" name="waktu" placeholder="waktu" type="time" disabled value="<?php echo $row['waktu']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Iklan</label>
      <div class="col-md-10">
        <select id="iklan" class="form-control" name="iklan" disabled>
        	<?php foreach($iklan_list as $row_iklan):?>
			      <option value="<?php echo $row_iklan['idiklan']?>"
			      	<?php if($row_iklan['idiklan']==$row['iklan']) echo "selected"?>>
				  <?php echo $row_iklan['judul']?>
			<?php  endforeach ?>
    	</select>
      </div>
    </div>
    <div class="form-group">
      <label for="status" class="col-md-2 control-label">Status Putar</label>
      <div class="col-md-10">
        <select id="status" class="form-control" name="status" disabled>
          <option value="0" <?php if ($row['status']=="0") echo "selected"; ?>>Belum</option>
          <option value="1" <?php if ($row['status']=="1") echo "selected"; ?>>Sudah</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="jarak" class="col-md-2 control-label">Jarak</label>
      <div class="col-md-10">
        <select id="jarak" class="form-control" name="jarak" disabled>
          <option value="1" <?php if ($row['jarak']=="1") echo "selected"; ?>>Ya</option>
          <option value="0" <?php if ($row['jarak']=="0") echo "selected"; ?>>Tidak</option>
        </select>
      </div>
    </div>

    <div class="form-group col-md-12">
  		<?php echo form_hidden('action',$action)?>
  		<?php echo form_hidden('idjadwaliklan',$row['idjadwaliklan'])?>
      <?php echo form_hidden('tanggal',$row['tanggal'])?>
  		<button class="btn btn-lg btn-primary" type="submit">Hapus</button>
  		<button class="btn btn-lg btn-primary" type="button" id="button_cancel">Batal</button>
	</div>
<?php }?>
</table>
</form>
<script>
$(document).ready(function(){
    $("#button_cancel").click(function(){
      var tanggal = $("#tanggal").val();
        location.replace('<?php echo base_url(); ?>index.php/jadwaliklan?tanggal='+tanggal);
      });
  });
//function button_cancel(){
  //location.replace('<?php echo base_url(); ?>index.php/jadwaliklan?tanggal=');
//}
</script>