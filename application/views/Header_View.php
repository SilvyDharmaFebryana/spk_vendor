<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<?php if(isset($Title)) : ?>
  <title><?php echo ":: ",$Title," ::"; ?></title>
	<?php else : ?>
  <title>-</title>
	<?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/wave/waves.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/material-design-icons.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/bootstrap/css/bootstrap.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/font.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/app.css")?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/dropzone/dropzone.css")?>" type="text/css" />
  <meta name="theme-color" content="#2196f3">
</head>
<body>
<div class="app">
  <aside id="aside" class="app-aside modal fade " role="menu">
    <div class="left">
      <div class="box bg-white">
        <div class="navbar md-blackframe-z1 no-radius blue">
		<center><h4 style="margin-top:30px"></h4><h6><strong>Copyright &copy;</strong> 2019</h6></center>
        </div>
        <div class="box-row">
          <div class="box-cell scrollable hover">
            <div class="box-inner">
              <div id="nav">
                <nav ui-nav>
                  <ul class="nav">
                    <!--<li <?php if(isset($MenuHome)) : echo "class='active'";else :endif;?>>
                      <a href="<?php echo base_url("Home")?>">
                        <span class="pull-right text-muted"></span>
                        <i class="icon mdi-action-home i-20" <?php if(isset($MenuHome)) : echo "style='color:#2196f3'";else :endif;?>></i>
                        <span class="font-normal">Home</span>
                      </a>
                    </li>-->
					<li <?php if(isset($MenuData)) : echo "class='active'";else :endif;?>>
                      <a href="<?php echo base_url("")?>">
                        <span class="pull-right text-muted"></span>
                        <i class="icon mdi-action-view-list i-20" <?php if(isset($MenuData)) : echo "style='color:#2196f3'";else :endif;?>></i>
                        <span class="font-normal">DATA</span>
                      </a>
					  <ul class="nav nav-sub">
                        <li <?php if(isset($MenuNilai) and $_SESSION['rules']=='manajer') : echo "class='active'";else :endif;?>>
                  <?php if( $_SESSION['rules']=='manajer' ){?>  
                        <a href="<?php echo base_url("Data/Nilai")?>">Nilai</a>
              <?php } ?>                        
                        </li>
						<li <?php if(isset($MenuKriteria)) : echo "class='active'";else :endif;?>>
            <?php if( $_SESSION['rules']=='staff' ){?>  
              <a href="<?php echo base_url("Data/Kriteria")?>">Kriteria</a>
              <?php } ?>
                        </li>
						<li <?php if(isset($MenuHimpunan)) : echo "class='active'";else :endif;?>>
            <?php if( $_SESSION['rules']=='staff' ){?>              
            <a href="<?php echo base_url("Data/Himpunan")?>">Himpunan</a>
            <?php } ?>
                        </li>
						<li <?php if(isset($MenuNormalisasi)) : echo "class='active'";else :endif;?>>
            <?php if( $_SESSION['rules']=='vendor' or $_SESSION['rules']=='manajer' ){?>             
            <a href="<?php echo base_url("Data/Normalisasi")?>">Normalisasi</a>
            <?php } ?>
                        </li>
						<li <?php if(isset($MenuVendor)) : echo "class='active'";else :endif;?>>
            <?php if( $_SESSION['rules']=='staff' ){?>             
            <a href="<?php echo base_url("Data/Vendor")?>">Vendor</a>
            <?php } ?>
                        </li>
						<li <?php if(isset($MenuUser)) : echo "class='active'";else :endif;?>>
                          <?php if( $_SESSION['rules']=='admin'){?>
                            <a href="<?php echo base_url("Data/User")?>">User</a>
                          <?php } ?>
                        </li>
                      </ul>
                    </li>
                    <li class="b-b b m-v-sm"></li>
					<li>
                      <a href="<?php echo base_url("Home/LogOut")?>">
                        <span class="pull-right text-muted"></span>
                        <span class="font-normal">LogOut</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div id="content" class="app-content" role="main">
    <div class="box">
    <div class="navbar md-whiteframe-z1 no-radius blue">
      <a md-ink-ripple  data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm"><i class="mdi-navigation-menu i-24"></i></a>
      <div class="navbar-item pull-left h4">
	  <?php if(isset($Title)) : echo $Title; else : endif; ?>
	  </div>
      <ul class="nav nav-sm navbar-tool pull-right">
		<?php if(isset($AddNilai)) : ?>
        <li>
          <a href="<?php echo base_url("Data/AddNilai")?>">
            <i class="mdi-content-add-box i-24"></i>
          </a>
        </li>
		<?php  endif;?>
		<?php if(isset($AddHimpunan)) : ?>
		<li>
          <a href="#"  data-toggle="modal" data-target="#add" data-backdrop="static" data-keyboard="false">
            <i class="mdi-content-add-box i-24"></i>
          </a>
        </li>
		<?php  endif;?>	

	<?php if(isset($AddVendor)) : ?>
		<li>
          <a href="#"  data-toggle="modal" data-target="#add" data-backdrop="static" data-keyboard="false">
            <i class="mdi-content-add-box i-24"></i>
          </a>
        </li>
		<?php  endif;?>		
		
		<?php if(isset($AddUser)) : ?>
		<li>
          <a href="#"  data-toggle="modal" data-target="#add" data-backdrop="static" data-keyboard="false">
            <i class="mdi-content-add-box i-24"></i>
          </a>
        </li>
		<?php  endif;?>	
		
		<?php if(isset($MenuNormalisasi)) : ?>
		<li class="dropdown">
          <a md-ink-ripple="" data-toggle="dropdown" class=" waves-effect">
            <i class="mdi-navigation-more-vert i-24"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-scale pull-right pull-up text-color">
            <li><a href="#"  data-toggle="modal" data-target="#pesan" data-backdrop="static" data-keyboard="false">Lakukan Normalisasi</a></li>
			<li><a href="<?php echo base_url("Data/HapusNormalisasi")?>">Hapus Semua Data</a></li>
          </ul>
        </li>
		<?php  endif;?>		
		<?php if(isset($AddKriteria)) : 
		if($cektotal==3){?>
		<div class="navbar-item pull-left h4">
		
		</div>
		<?php }else{ 
		?>
		<li>
          <a href="#"  data-toggle="modal" data-target="#add" data-backdrop="static" data-keyboard="false">
            <i class="mdi-content-add-box i-24"></i>
          </a>
        </li>
		<?php }; endif;?>
      </ul>
      <div class="pull-right" ui-view="navbar@"></div>
      <div id="search" class="pos-abt w-full h-full blue hide">
        <div class="box">
          <div class="box-col w-56 text-center">
            <a md-ink-ripple class="navbar-item inline"  ui-toggle-class="show" target="#search"><i class="mdi-navigation-arrow-back i-24"></i></a>
          </div>
          <div class="box-col v-m">
            <input class="form-control input-lg no-bg no-border" placeholder="Search" ng-model="app.search.content">
          </div>
          <div class="box-col w-56 text-center">
            <a md-ink-ripple class="navbar-item inline"><i class="mdi-av-mic i-24"></i></a>
          </div>
        </div>
      </div>
    </div>
