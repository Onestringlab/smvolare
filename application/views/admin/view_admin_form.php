<script>

function button_cancel(){
	location.replace('<?php echo base_url(); ?>index.php/admin');
}
function validateForm(){
	validation=true;
	if(document.adminform.password.value!=document.adminform.repassword.value){
		alert("Please check Password dan Re-Password");
		validation=false;
	}
	return validation;
}

</script>
<div class="well bs-component">
<?php $attributes = array('name' => 'adminform','id' => 'adminform',' onsubmit'=>'return validateForm()','class'=>'form-horizontal'); ?>
<?php echo form_open('admin/admin_manage',$attributes) ?>
	<fieldset>
	<legend>Kelola Admin</legend>
	<?php if($action=="insert"){?>
	  <div class="form-group">
      <label for="role" class="col-md-2 control-label">Role</label>
      <div class="col-md-10">
        <select id="role" class="form-control" name="role">
          <option value="Admin">Admin</option>
          <option value="Kontributor">Kontributor</option>
    		  <option value="Penjadwal">Penjadwal</option>
    		  <option value="Penyiar">Penyiar</option>
        </select>
      </div>
    </div>
	  <div class="form-group">
      <label for="inputName" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="inputName" name="name" placeholder="Nama Lengkap" type="text" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="inputUsername" class="col-md-2 control-label">Username</label>
      <div class="col-md-10">
        <input class="form-control" id="inputUsername"  name="username" placeholder="Username" type="text" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <input class="form-control" id="inputEmail" name="email" placeholder="Email" type="email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Password</label>
      <div class="col-md-10">
        <input class="form-control" id="inputEmail" name="password" placeholder="Password" type="password" required="required">
      </div>
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail" class="col-md-2 control-label">Re Password</label>
      <div class="col-md-10">
        <input class="form-control" id="inputEmail" name="repassword" placeholder="Re-Password" type="password" required="required">
      </div>
    </div>
    <div class="form-group col-md-12">
      <?php echo form_hidden('action',$action)?>
      <button class="btn btn-lg btn-primary" type="submit">Tambah</button>
      <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
    </div>
	<?php }if($action=="update"){?>
	<div class="form-group">
      <label for="role" class="col-md-2 control-label">Role</label>
      <div class="col-md-10">
        <select id="role" class="form-control" name="role">
          	 <option value="Admin" <?php if ($row['role']=="Admin") echo "selected"; ?>>Admin</option>
             <option value="Kontributor" <?php if ($row['role']=="Kontributor") echo "selected"; ?>>Kontributor</option>
             <option value="Penjadwal" <?php if ($row['role']=="Penjadwal") echo "selected"; ?>>Penjadwal</option>
			       <option value="Penyiar" <?php if ($row['role']=="Penyiar") echo "selected"; ?>>Penyiar</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <input class="form-control" id="inputName" name="name" value="<?php echo $row['name']?>" required="required" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputUsername" class="col-md-2 control-label">Username</label>
      <div class="col-md-10">
        <input class="form-control" id="inputUsername"  name="username" value="<?php echo $row['username']?>" required="required" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <input class="form-control" id="inputEmail" name="email" value="<?php echo $row['email']?>" type="email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-md-2 control-label">Password</label>
      <div class="col-md-10">
        <input class="form-control" id="inputPassword" name="password" placeholder="Password" type="password" value="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputRePassword" class="col-md-2 control-label">Re Password</label>
      <div class="col-md-10">
        <input class="form-control" id="inputRePassword" name="repassword" placeholder="Re-Password" type="password">
      </div>
    </div>
    <div class="form-group col-md-12">
      <?php echo form_hidden('action',$action)?>
  	  <?php echo form_hidden('idadmin',$row['idadmin'])?>
  	  <button class="btn btn-lg btn-primary" type="submit">Perbaiki</button>
      <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
    </div>
	<?php }if($action=="delete"){?>
	<div class="form-group">
      <label for="role" class="col-md-2 control-label">Role</label>
      <div class="col-md-10">
      	<?php echo $row['role']?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-md-2 control-label">Nama</label>
      <div class="col-md-10">
        <?php echo $row['name']?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputUsername" class="col-md-2 control-label">Username</label>
      <div class="col-md-10">
        <?php echo $row['username']?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <?php echo $row['email']?>
      </div>
    </div>
    <div class="form-group col-md-12">
      <?php echo form_hidden('action',$action)?>
  	  <?php echo form_hidden('idadmin',$row['idadmin'])?>
  	  <button class="btn btn-lg btn-primary" type="submit">Hapus</button>
      <button class="btn btn-lg btn-primary" type="button" onclick="button_cancel()">Batal</button>
    </div>
	<?php }?>
	</fieldset>
</form>
</div>

