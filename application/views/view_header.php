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
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi-av-radio"></i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/absen"><i class="mdi-maps-location-history"></i> Absen</a></li>
            <?php if($role!="Kontributor") { ?>
            <li><a href="<?php echo base_url(); ?>index.php/jadwaliklan/jadwaliklan_putar"><i class="mdi-av-play-arrow"></i> Putar Iklan</a></li>
            <?php }?>
            <li><a href="<?php echo base_url(); ?>index.php/papanpesan"><i class="mdi-action-view-headline"></i> Papan Pesan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/topik"><i class="mdi-notification-event-note"></i> Topik</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/naskah"><i class="mdi-action-receipt"></i> Naskah Siaran</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/logkerja"><i class="mdi-action-work"></i> Log Kerja</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pemenang"><i class="mdi-action-wallet-giftcard"></i> Pemenang Kuis</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>index.php/jadwal/jadwal_harian"><i class="mdi-hardware-watch"></i>Jadwal Siaran</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pengumuman"><i class="mdi-action-assignment-late"></i> Pengumuman</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/rotw"><i class="mdi-hardware-headset"></i> ROTW</a></li>

          </ul>
        </li>
        <?php } ?>
        <?php if($role=="Penjadwal" || $role=="Kontributor" || $role=="Admin") { ?>
        <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi-device-access-time"></i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/jadwal"><i class="mdi-av-mic"></i> Jadwal Siaran</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>index.php/adlibs"><i class="mdi-action-speaker-notes"></i> Adlibs</a></li>
             <li><a href="<?php echo base_url(); ?>index.php/spot"><i class="mdi-av-hearing"></i> Spot</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/jadwaliklan"><i class="mdi-action-event"></i> Jadwal Iklan</a></li>
          </ul>
        </li>
        <?php } ?>
         <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi-device-dvr"></i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/logiklan"><i class="mdi-action-settings-voice"></i> Laporan Iklan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/absen/absen_laporan"><i class="mdi-maps-location-history"></i> Laporan Absen</a></li>
          </ul>
        </li>
        <?php if($role=="Admin") { ?>
        <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi-action-settings-cell"></i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/chart"><i class="mdi-action-assignment"></i> Chart </a></li>
            <!-- <li><a href="<?php echo base_url(); ?>index.php/chart"><i class="mdi-action-accessibility"></i> Chart Indonesia 10</a></li> -->
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi-action-face-unlock"></i>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/program"><i class="mdi-action-assignment"></i> Program</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin"><i class="mdi-action-accessibility"></i> Pengguna</a></li>
          </ul>
        </li>
        <?php } ?>

        <li><a href="<?php echo base_url();?>index.php/admin/logout"><i class="mdi-action-exit-to-app"></i> [<?php echo $this->session-> userdata('username');?>] </a></li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>