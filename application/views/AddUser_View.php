<?php $this->load->View("header_view")?>
<div class="box-row">
 <div class="box-cell">
 <div class="box-inner padding">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading bg-white">
          <b><a href="<?php echo base_url("Data/User")?>"><?php if(isset($Title)) : echo $Title; endif;?></a></b>
        </div>
        <div class="panel-body">
		  <form action="<?php echo base_url("Data/AddUser") ?>" method="post" role="form">
			<div class="form-group <?php if(isset($kosongusername)):  echo "has-error"; endif;?>">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Masukkan Usernames" name="username" value="<?php if(isset($username)): echo $username; endif;?><?php if(isset($user)):  echo $user->username;  endif;?>" autocomplete="off" <?php if(isset($kosongusername)):  echo "autofocus";  endif;?>>
            </div>
			<div class="form-group <?php if(isset($kosongpassword)):  echo "has-error"; endif;?>">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" value="<?php if(isset($password)): echo $password; endif;?><?php if(isset($user)):  echo $user->password;  endif;?>" autocomplete="off" <?php if(isset($kosongpassword)):  echo "autofocus";  endif;?>>
            </div>
			<div class="form-group <?php if(isset($kosongrules)):  echo "has-error"; endif;?>">
              <label for="rules">Role</label>
              
				<select class="form-control" id="kategori" name="rules">
				<option value="">-- Select Role  -- </option>
				<option value="manajer">Manager</option>
				<option value="vendor">Vendor</option>
				<option value="staff">Staff</option>
			</div>
			<input type="hidden" name="id_nilai" value="<?php if(isset($nilai)):echo $nilai->id_nilai; else: echo"0";endif;?><?php if(isset($erernilai)): echo $erernilai;endif;?>">
			<button md-ink-ripple="" class="md-btn md-raised pull-right p-h-md blue waves-effect" type="submit" name="simpan" value="simpan">SIMPAN</button>
          </form>
      </div>
    </div>
	
<?php $this->load->View("footer_view")?>