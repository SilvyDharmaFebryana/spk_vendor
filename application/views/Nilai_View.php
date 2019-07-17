<?php $this->load->View("header_view")?>
<?php 
	$this->load->model('Admin_Model','Admin');
	$kriteria = $this->Admin->ambilKriteria();
	$kriteriasumbobot = array();
	foreach ($kriteria as $k) {
		array_push($kriteriasumbobot, array(
			'kriteria' => $k->kriteria,
			'bobot' => $k->bobot
		));
	}
?>


<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		  <div><i class="icon mdi-action-info i-24"></i> Informasi Kriteria</div>
        </div>
		<div class="modal-body">
		 <table class="table m-b-none default footable-loaded footable" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
			<tr>
				<th width="5%">Kriteria</th>
				<th >Keterangan</th>
				<th >Bobot</th>
			</tr>
        </thead>
		<tbody>
			<tr class="footable-even" style="display: table-row;">
				<td><b>C1</b></td>
				<td>Performance</td>
				<td><?php echo $kriteriasumbobot[0]['bobot']?></td>
			</tr>
			<tr class="footable-even" style="display: table-row;">
				<td><b>C2</b></td>
				<td>Detail</td>
				<td><?php echo $kriteriasumbobot[1]['bobot']?></td>
			</tr>
			<tr class="footable-even" style="display: table-row;">
				<td><b>C3</b></td>
				<td>Quality Product</td>
				<td><?php echo $kriteriasumbobot[2]['bobot']?></td>
			</tr>
			<tr class="footable-even" style="display: table-row;">
				<td><b>C4</b></td>
				<td>Response</td>
				<td><?php echo $kriteriasumbobot[3]['bobot']?></td>
			</tr>
			
			
		</tbody>
		</table>
		<center><button md-ink-ripple="" data-dismiss="modal" class="md-btn md-raised m-b btn-fw red waves-effect">Close</button></center>
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
	<ul class="list-inline pull-right">
		<li class="dropdown">
			<a md-ink-ripple="" data-toggle="dropdown" class="md-btn md-flat md-btn-circle waves-effect">
				<i class="mdi-navigation-more-vert text-md"></i>
			</a>
			<ul class="dropdown-menu dropdown-menu-scale pull-right pull-up top text-color">
				<li><a href="<?php echo base_url("Data/Nilai")?>">Nilai</a></li>
				<li><a href="<?php echo base_url("Data/NilaiBobot")?>">Bobot Nilai</a></li>
				<li><a href="#"  data-toggle="modal" data-target="#info" data-backdrop="static" data-keyboard="false">Informasi</a></li>
			</ul>
		</li>
	</ul>
    </div>
    <div>
      <table class="table m-b-none default footable-loaded footable" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th width="10%">No</th>
              
              <th width="10%">Nama</th>
              <th width="5%">Performance</th>
              <th width="5%">Detail</th>
              <th width="5%">Quality</th>
              <th width="5%">Response</th>
              <th width="15%">Tanggal Input</th>

              
              <th class="col-sm-2"></th>
          </tr>
        </thead>
        <tbody>
			<?php $i = 1; foreach($nilai->result() as $Tampilkan) : ?>
				<tr class="footable-even" style="display: table-row;">
					<td><?php echo $i++?></td>

					<td><?php echo $Tampilkan->nama?></td>
					<td><center><?php if(isset($NilaiBobot)): echo $Tampilkan->c1; else: echo $Tampilkan->nilai_asli_c1; endif?></td>
					<td><center><?php if(isset($NilaiBobot)): echo $Tampilkan->c2; else: echo $Tampilkan->nilai_asli_c2; endif?></td>
					<td><center><?php if(isset($NilaiBobot)): echo $Tampilkan->c3; else: echo $Tampilkan->nilai_asli_c3; endif?></td>
					<td><center><?php if(isset($NilaiBobot)): echo $Tampilkan->c4; else: echo $Tampilkan->nilai_asli_c4; endif?></td>
					<td><?php echo $Tampilkan->tanggal?></td>
					<td>
						<a href="<?php echo base_url("Data/RNilai/"),$Tampilkan->id_nilai?>" style="color:#f44336" title="Remove"><i class="mdi-content-remove-circle i-20"></i></a>
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