<?php $this->load->View("header_view")?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		  <div><i class="mdi-content-add-box i-24"></i> Tambah User</div>
        </div>
		<div class="modal-body">
		<form action="<?php echo base_url("Data/User")?>" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" placeholder="Masukkan Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password">
			</div>
			<div class="form-group">
				<label>Role</label>
				<select class="form-control" id="kategori" name="rules">
				<option value="">-- Select Role  -- </option>
				<option value="manajer">Manager</option>
				<option value="vendor">Vendor</option>
				<option value="staff">Staff</option></select>
				
			</div>
			<button type="submit" value="simpan" name="simpan" class="btn btn-primary">Simpan</button>
		</form>
		</div>
      </div>
    </div>
  </div>
 <div class="box-row">
  <div class="box-cell">
   <div class="box-inner padding">
  <div class="panel panel-default">
    <div class="panel-heading">
	<?php if(isset($Title)) : echo $Title; endif;?>
    </div>
    <div>
      <table class="table m-b-none default footable-loaded footable" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th width="1%"></th>
              <th class="col-sm-4">User</th>
              <th class="col-sm-5">Role</th>
              <th class="col-sm-2"></th>
          </tr>
        </thead>
        <tbody>
			<?php $i = 1; foreach($admin->result() as $Tampilkan) : ?>
				<tr class="footable-even" style="display: table-row;">
					<td><?php echo $i++?></td>
					<td><?php echo $Tampilkan->username?></td>
					<td><?php echo $Tampilkan->rules?></td>
					<td>
						<a href="#" style="color:#2196f3" title="Detail"><i class="mdi-action-info i-20"></i></a>
						<a href="" style="color:#f44336" title="Remove"><i class="mdi-content-remove-circle i-20"></i></a>
					</td>
				</tr>
				<?php endforeach?>
        </tbody>
        <!--<tfoot class="hide-if-no-paging">
          <tr>
              <td colspan="5" class="text-center footable-visible">
                  <ul class="pagination"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
              </td>
          </tr>
        </tfoot>-->
      </table>
    </div>
  </div>
          </div>
        </div>
      </div>
<?php $this->load->View("footer_view")?>