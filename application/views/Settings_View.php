<?php $this->load->view('Header_View')?>
	<div class="box-row">
		<div class="box-cell">
          <div class="box-inner padding">
			<div class="row row-sm">
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		  <div>Update Your Account</div>
        </div>
		<div class="modal-body">
			<form action="<?php echo base_url("Home/") ?>" method="post">
			<?php $username = $Profile->username;
			if(isset($username)) : $uname = $username; endif; ?>
			<div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" value="<?php echo $uname?>" id="username" name="username" placeholder="Enter Username" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" autocomplete="off">
            </div>
			<input type="hidden" name="id_admin" value="<?php echo $Profile->id_admin?>">
            <button type="submit" name="update" value="update" class="btn btn-default m-b">Save</button>
			</form>
		</div>
      </div>
    </div>
  </div>

 
 
 <h2 style="margin-top:200px"><center><strong>Selamat Datang</h2>
 <h3><center>PT. Andalan Multi Kencana<h3>
 
 
		
</div>
		</div>
	</div>
  </div>
<?php $this->load->view('Footer_View')?>