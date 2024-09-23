<?php if($this->session->userdata('username')!='' && $this->session->userdata('role')!=''){?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>--Studio Management--</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--MD -->
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/ripples.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/material-fullpalette.min.css" rel="stylesheet">

   <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <!-- Dropdown.js
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
    -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>node_modules/bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>node_modules/bootstrap/css/starter-template.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.file-input.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!--MD-->
    <script src="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/js/ripples.js"></script>

    <!--
    <script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    -->

    <script>
      $.material.init();
    </script>
  </head>

  <body>

    <!-- main header -->
    <?php $this->load->view('view_header'); ?>

    <div class="container">

      <div class="starter-template">
        <?php  $this->load->view($main_content); ?>
      </div>

    </div><!-- /.container -->

  </body>
</html>
<?php } else if ($this->session->userdata('username')=='' && $this->session->userdata('role')=='') {
    redirect('admin/login');
}
?>
<style>
body {
  padding: 60px 5px;
  color:#001A33;
  font-size: 14px;
 }
.form-group label.control-label {
    font-size: 14px;
    line-height: 1.07142857;
    color: #000033;
    font-weight: 400;
    margin: 16px 0 0 0;
}
.container .jumbotron, .container .well, .container-fluid .jumbotron, .container-fluid .well, body .jumbotron, body .well {
    background-color: #fff;
    padding: 20px;
    margin-top: 20px;

    -webkit-box-shadow: 0 0px 0px 0 rgba(0,0,0,.2),0 0px 0px 0 rgba(0,0,0,.19);
    box-shadow: 0 0px 0px 0 rgba(0,0,0,.2),0 0px 0px 0 rgba(0,0,0,.19);
    border-radius: 2px;
    border: 0;
}
.modal-dialog{
    width: 80%;
}
.modal-body{
    font-size: 20px;
}
.modal-title{
    font-size: 24px;font-weight: bold;
}
#header{
    background-color: #686963;
}
thead th{
    background-color: #8aa29e;
    color:#fafafa;
}
a{
    color:#db5461;
}

li a {
    font-size: 18px;
}
li a.active{
    font-size: 20px;font-weight: bold;
}

audio {
 width: 100%;
 margin-bottom:0px;
}​




</style>