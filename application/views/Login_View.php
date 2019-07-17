<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Masuk</title>
  <meta name="description" content="Masuk Sistem Admin"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/wave/waves.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/material-design-icons.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/bootstrap/css/bootstrap.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/font.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/app.css")?>" type="text/css" />
</head>
<body background="<?php echo base_url("assets/img/body-pattern.gif")?>">
<div class="app">
  <div class="center-block w-xxl w-auto-xs p-v-md">
    <!--<div class="navbar">
      <div class="navbar-brand m-t-lg text-center">
        <span class="m-l inline"><a href="<?php echo base_url()?>"></a></span>
      </div>
    </div>-->
  <center style="margin-top:40px"><h4>PT. ANDALAN MULTI KENCANA</h4><h4 style="margin-top:-8px">PEMILIHAN VENDOR TERBAIK</h4></center>
    <div class="p-lg panel md-whiteframe-z1 text-color m" style="margin-top:30px">
      <div class="m-b text-sm"></div>
      <form action="<?php echo base_url("Home/Login") ?>" method="post">
        <div class="md-form-group float-label">
          <input type="username" class="md-input" ng-model="user.username" name="username" value="<?php if(isset($username)): echo $username; else : endif; ?>" autocomplete="off" <?php if(isset($ufocus)): echo $ufocus; else :;endif; ?>>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <label>Username</label>
        </div>
        <div class="md-form-group float-label">
			<input type="password" class="md-input" ng-model="user.password" name="password" value="<?php if(isset($password)): echo $password; else : endif; ?>" autocomplete="off" <?php if(isset($pfocus)): echo $pfocus; else : endif; ?>>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <label>Password</label>
        </div>      
        <div class="m-b-md"></div>
        <button md-ink-ripple type="submit" class="md-btn md-raised blue btn-block p-h-md">Sign In</button>
      </form>
    </div>
	<?php if(isset($Message)):?>
			<div class="col-md-13">
				<div class="bs-component">
					<div class="alert alert-dismissible alert-danger">
						<button class="close" type="button" data-dismiss="alert">×</button><strong>Gagal Login! </strong><br><?php echo $Message?>.
					</div>
				</div>
			</div>
		<?php  else : endif;?>		
  </div>
</div>
	<script src="<?php echo base_url("assets/plugin/jquery/jquery.js")?>"></script>
	<script src="<?php echo base_url("assets/plugin/bootstrap/js/bootstrap.js")?>"></script>
	<script src="<?php echo base_url("assets/plugin/wave/waves.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-load.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-jp.config.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-jp.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-nav.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-toggle.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-load.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-form.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-waves.js")?>"></script>
	<script src="<?php echo base_url("assets/js/ui-client.js")?>"></script>
</body>
</html>
