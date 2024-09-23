
<script>
function button_cancel(){
	location.replace('<?php echo base_url();?>index.php/chart');
}
</script>
<div class="well bs-component">
<?php echo form_open('chart/chart_manage')?>
<fieldset>
	<legend>Kelola Data Chart</legend>
<?php if($action=="insert"){?>
<div class="form-group">
	<label class="col-sm-2 control-label">Chart</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="chart" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Program</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="program" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tanggal" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Foto</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="foto" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw1</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw1" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song1</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song1" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis1</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis1" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw2</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw2" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song2</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song2" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis2</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis2" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw3</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw3" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song3</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song3" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis3</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis3" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw4</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw4" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song4</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song4" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis4</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis4" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw5</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw5" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song5</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song5" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis5</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis5" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw6</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw6" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song6</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song6" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis6</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis6" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw7</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw7" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song7</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song7" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis7</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis7" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw8</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw8" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song8</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song8" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis8</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis8" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw9</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw9" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song9</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song9" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis9</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis9" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw10</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw10" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song10</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song10" value="">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis10</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis10" value="">
       </div>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?=form_hidden('action',$action)?>
		<button type="submit" class="btn btn-primary">Tambah</button>
		<button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
	</div>
</div>
<?php }if($action=="update"){?>
<div class="form-group">
	<label class="col-sm-2 control-label">chart</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="chart" value="<?php echo $row['chart']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">program</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="program" value="<?php echo $row['program']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tanggal</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tanggal" value="<?php echo $row['tanggal']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">foto</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="foto" value="<?php echo $row['foto']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw1</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw1" value="<?php echo $row['tw1']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song1</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song1" value="<?php echo $row['song1']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis1</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis1" value="<?php echo $row['artis1']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw2</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw2" value="<?php echo $row['tw2']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song2</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song2" value="<?php echo $row['song2']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis2</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis2" value="<?php echo $row['artis2']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw3</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw3" value="<?php echo $row['tw3']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song3</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song3" value="<?php echo $row['song3']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis3</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis3" value="<?php echo $row['artis3']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw4</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw4" value="<?php echo $row['tw4']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song4</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song4" value="<?php echo $row['song4']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis4</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis4" value="<?php echo $row['artis4']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw5</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw5" value="<?php echo $row['tw5']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song5</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song5" value="<?php echo $row['song5']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis5</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis5" value="<?php echo $row['artis5']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw6</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw6" value="<?php echo $row['tw6']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song6</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song6" value="<?php echo $row['song6']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis6</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis6" value="<?php echo $row['artis6']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw7</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw7" value="<?php echo $row['tw7']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song7</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song7" value="<?php echo $row['song7']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis7</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis7" value="<?php echo $row['artis7']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw8</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw8" value="<?php echo $row['tw8']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song8</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song8" value="<?php echo $row['song8']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis8</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis8" value="<?php echo $row['artis8']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw9</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw9" value="<?php echo $row['tw9']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song9</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song9" value="<?php echo $row['song9']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis9</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis9" value="<?php echo $row['artis9']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw10</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="tw10" value="<?php echo $row['tw10']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song10</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="song10" value="<?php echo $row['song10']?>">
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis10</label>
	<div class="col-sm-10">
	   <input class="form-control" type="text" name="artis10" value="<?php echo $row['artis10']?>">
       </div>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?=form_hidden('action',$action)?>
		<?=form_hidden('idchart',$row['idchart'])?>
		<button type="submit" class="btn btn-primary">Perbaiki</button>
		<button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
	</div>
</div>
<?php }if($action=="delete"){?>
<div class="form-group">
	<label class="col-sm-2 control-label">idchart</label>
	<div class="col-sm-10">
	   <?php echo $row['idchart']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">chart</label>
	<div class="col-sm-10">
	   <?php echo $row['chart']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">program</label>
	<div class="col-sm-10">
	   <?php echo $row['program']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tanggal</label>
	<div class="col-sm-10">
	   <?php echo $row['tanggal']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">foto</label>
	<div class="col-sm-10">
	   <?php echo $row['foto']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw1</label>
	<div class="col-sm-10">
	   <?php echo $row['tw1']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song1</label>
	<div class="col-sm-10">
	   <?php echo $row['song1']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis1</label>
	<div class="col-sm-10">
	   <?php echo $row['artis1']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw2</label>
	<div class="col-sm-10">
	   <?php echo $row['tw2']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song2</label>
	<div class="col-sm-10">
	   <?php echo $row['song2']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis2</label>
	<div class="col-sm-10">
	   <?php echo $row['artis2']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw3</label>
	<div class="col-sm-10">
	   <?php echo $row['tw3']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song3</label>
	<div class="col-sm-10">
	   <?php echo $row['song3']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis3</label>
	<div class="col-sm-10">
	   <?php echo $row['artis3']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw4</label>
	<div class="col-sm-10">
	   <?php echo $row['tw4']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song4</label>
	<div class="col-sm-10">
	   <?php echo $row['song4']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis4</label>
	<div class="col-sm-10">
	   <?php echo $row['artis4']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw5</label>
	<div class="col-sm-10">
	   <?php echo $row['tw5']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song5</label>
	<div class="col-sm-10">
	   <?php echo $row['song5']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis5</label>
	<div class="col-sm-10">
	   <?php echo $row['artis5']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw6</label>
	<div class="col-sm-10">
	   <?php echo $row['tw6']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song6</label>
	<div class="col-sm-10">
	   <?php echo $row['song6']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis6</label>
	<div class="col-sm-10">
	   <?php echo $row['artis6']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw7</label>
	<div class="col-sm-10">
	   <?php echo $row['tw7']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song7</label>
	<div class="col-sm-10">
	   <?php echo $row['song7']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis7</label>
	<div class="col-sm-10">
	   <?php echo $row['artis7']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw8</label>
	<div class="col-sm-10">
	   <?php echo $row['tw8']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song8</label>
	<div class="col-sm-10">
	   <?php echo $row['song8']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis8</label>
	<div class="col-sm-10">
	   <?php echo $row['artis8']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw9</label>
	<div class="col-sm-10">
	   <?php echo $row['tw9']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song9</label>
	<div class="col-sm-10">
	   <?php echo $row['song9']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis9</label>
	<div class="col-sm-10">
	   <?php echo $row['artis9']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tw10</label>
	<div class="col-sm-10">
	   <?php echo $row['tw10']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">song10</label>
	<div class="col-sm-10">
	   <?php echo $row['song10']?>
       </div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">artis10</label>
	<div class="col-sm-10">
	   <?php echo $row['artis10']?>
       </div>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?=form_hidden('action',$action)?>
		<?=form_hidden('idchart',$row['idchart'])?>
		<button type="submit" class="btn btn-primary">Hapus</button>
		<button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
	</div>
</div>
<?php }?>
</form>
	</div>
</div>

