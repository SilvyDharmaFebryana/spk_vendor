<?php $this->load->View("header_view")?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		  <div><i class="mdi-content-add-box i-24"></i> Tambah Kriteria</div>
        </div>
		<div class="modal-body">
		<form action="<?php echo base_url("Data/Kriteria")?>" method="post">
			<div class="form-group">
				<label>Kode Kriteria</label>
				<input type="text" name="kd_kriteria" class="form-control" placeholder="Masukkan Kode Kriteria">
			</div>
			<div class="form-group">
				<label>Kriteria</label>
				<input type="text" name="kriteria" class="form-control" placeholder="Masukkan Kriteria">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan">
			</div>
			<div class="form-group">
				<label>Bobot</label>
				<input type="text" name="bobot" class="form-control" placeholder="Masukkan Bobot Kriteria" autocomplete="off">
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
			<th class="col-sm-2">Kode Kriteria</th>
              <th class="col-sm-4">Kriteria</th>
              <th class="col-sm-4">Keterangan</th>
              <th class="col-sm-2">Bobot</th>
              <th class="col-sm-2"></th>
          </tr>
        </thead>
        <tbody>
			<?php $i = 1; foreach($kriteria->result() as $Tampilkan) : ?>
				<tr class="footable-even" style="display: table-row;">
					<td><?php echo $Tampilkan->kd_kriteria?></td>
					<td><?php echo $Tampilkan->kriteria?></td>
					<td><?php echo $Tampilkan->keterangan?></td>
					<td><?php echo $Tampilkan->bobot?></td>
					<td>
						<a href="#"  data-toggle="modal" data-target="#update<?php echo $Tampilkan->id_kriteria?>" data-backdrop="static" data-keyboard="false" style="color:#2196f3" title="Detail"><i class="mdi-action-info i-20"></i></a>
						<a href="<?php echo base_url("Data/RemoveKriteria/"),$Tampilkan->id_kriteria?>" style="color:#f44336" title="Remove"><i class="mdi-content-remove-circle i-20"></i></a>
					</td>
				</tr>
				<div class="modal fade" id="update<?php echo $Tampilkan->id_kriteria?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class=" modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					  <div><i class="mdi-content-add-box i-24"></i>Kriteria</div>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url("Data/Kriteria")?>" method="post">
						<div class="form-group">
							<label>Kode Kriteria</label>
							<input type="text" name="kd_kriteria" class="form-control" placeholder="Masukkan Kode Kriteria" disabled="" value="<?php echo $Tampilkan->kd_kriteria?>">
						</div>
						<div class="form-group">
							<label>Kriteria</label>
							<input type="text" name="kriteria" class="form-control" placeholder="Masukkan Kriteria" disabled="" value="<?php echo $Tampilkan->kriteria?>">
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" disabled="" value="<?php echo $Tampilkan->keterangan?>">
						</div>
						<div class="form-group">
							<label>Bobot</label>
							<input type="text" name="bobot" class="form-control" placeholder="Masukkan Bobot Kriteria" disabled="" value="<?php echo $Tampilkan->bobot?>"  autocomplete="off">
						</div>
					</form>
					</div>
				  </div>
				</div>
			  </div>
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