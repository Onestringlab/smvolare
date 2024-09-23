<?php
$role = $this->session-> userdata('role');
?>

<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)"><h4><b>RADIO VOLARE</b></h4></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <!--<li><a href="<?php echo base_url(); ?>index.php/main/home">Home</a></li>-->
        <?php if($role=="Penyiar" || $role=="Kontributor" || $role=="Admin") { ?>
        <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">radio</i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/absen"><i class="material-icons">fingerprint</i> Absen</a></li>
            <?php if($role!="Kontributor") { ?>
            <li><a href="<?php echo base_url(); ?>index.php/jadwaliklan/jadwaliklan_putar"><i class="material-icons">play_arrow</i> Putar Iklan</a></li>
            <?php }?>
            <li><a href="<?php echo base_url(); ?>index.php/papanpesan"><i class="material-icons">view_headline</i> Papan Pesan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/topik"><i class="material-icons">event_note</i>Topik</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/naskah"><i class="material-icons">receipt</i> Naskah Siaran</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/logkerja"><i class="material-icons">work</i> Log Kerja</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>index.php/jadwal/jadwal_harian"><i class="material-icons">date_range</i> Jadwal Siaran</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pengumuman"><i class="material-icons">announcement</i> Pengumuman</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/rotw"><i class="material-icons">headset</i> ROTW</a></li>

          </ul>
        </li>
        <?php } ?>
        <?php if($role=="Penjadwal" || $role=="Kontributor" || $role=="Admin") { ?>
        <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">schedule</i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/jadwal"><i class="material-icons">mic</i> Jadwal Siaran</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>index.php/adlibs"><i class="material-icons">speaker_notes</i> Adlibs</a></li>
             <li><a href="<?php echo base_url(); ?>index.php/spot"><i class="material-icons">hearing</i> Spot</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/jadwaliklan"><i class="material-icons">event</i> Jadwal Iklan</a></li>
          </ul>
        </li>
        <?php } ?>
        <?php if($role=="Admin") { ?>
        <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">face</i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/program"><i class="material-icons">radio</i> Program</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin"><i class="material-icons">accessibility</i> Pengguna</a></li>
          </ul>
        </li>
        <?php } ?>

        <li><a href="<?php echo base_url();?>index.php/admin/logout"><i class="material-icons">exit_to_app</i> [<?php echo $this->session-> userdata('username');?>] </a></li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>