<?php $this->load->View("header_view")?>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		  <div><i class="mdi-content-add-box i-24"></i> Tambah Himpunan</div>
        </div>
		<div class="modal-body">
		<form action="<?php echo base_url("Data/Himpunan")?>" method="post">
			<div class="form-group">
				<label>Batas Atas</label>
				<input type="number" name="batas_atas" class="form-control" placeholder="Masukkan Batas Atas">
			</div>
			<div class="form-group">
				<label>Batas Bawah</label>
				<input type="number" name="batas_bawah" class="form-control" placeholder="Masukkan Batas Bawah">
			</div>
			<div class="form-group">
				<label>Nilai</label>
				<input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai">
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
              <th width="15%"></th>
              <th class="col-sm-4">Nilai</th>
              <th class="col-sm-5">Bobot</th>
              <th class="col-sm-2"></th>
          </tr>
        </thead>
        <tbody>
			<?php $i = 1; foreach($himpunan->result() as $Tampilkan) : ?>
				<tr class="footable-even" style="display: table-row;">
					<td><?php echo $i++?></td>
					<td><?php echo $Tampilkan->batas_atas," - ",$Tampilkan->batas_bawah?></td>
					<td><?php echo $Tampilkan->nilai?></td>
					<td>
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