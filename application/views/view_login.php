<?php $action="login";?>
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

    <title>--LOGIN--</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--MD -->
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/ripples.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/css/material-fullpalette.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>node_modules/bootstrap/css/signin.css" rel="stylesheet">

    <!-- jQuery -->
    <!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Dropdown.js -->
    <!-- <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>css/jquery.dropdown.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>node_modules/bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <?php echo form_open('admin/admin_login', 'class="form-signin" id="myform"');?>
            <div class="well bs-component">
            <h2 class="form-signin-heading">Radio Volare</h2>
            <div class="form-group form-group-lg label-floating is-empty">
                <label for="i6" class="control-label">Username</label>
                <input class="form-control" id="i6" name="username" type="text" value="">
                <span class="help-block">Masukkan Username</span>
            </div>
            <div class="form-group form-group-lg label-floating is-empty">
                <label for="i5" class="control-label">Password</label>
                <input class="form-control" id="i5" name="password" type="password" value="">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
        </form>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>

     <!--MD-->
    <script src="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/bootstrap-material-design-master/dist/js/ripples.js"></script>
    <script>
        $.material.init();
    </script>

  </body>
</html>
