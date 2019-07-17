<?php $this->load->View("header_view")?>
<div class="modal fade" id="pesan" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		  <div>Normalisasi Data</div>
        </div>
		<div class="modal-body">
			<center>
				<h3>Apakah Ingin Melakukan Normalisasi Data?</h3>
				<h5>Jika Data Sudah Ternormalikasi Data Akan Diperbarui</h5>
				<button data-dismiss="modal" class="md-btn md-raised m-b btn-fw blue">TIDAK</button>
				<button onclick="location.href='<?php echo base_url("Data/prosesNormalisasi")?>'" type="button" class="md-btn md-raised m-b btn-fw green" >YA</button>
			</center>
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
				<li><a href="<?php echo base_url("Data/Normalisasi_VektorS")?>">Vektor S</a></li>
				<li><a href="<?php echo base_url("Data/Normalisasi")?>">Vektor V</a></li>			
				<li><a href="#"  data-toggle="modal" data-target="#pesan" data-backdrop="static" data-keyboard="false">Lakukan Normalisasi</a></li>
				<li><a href="<?php echo base_url("Data/HapusNormalisasi")?>">Hapus Semua Data</a></li>
			</ul>
		</li>
	</ul>
    </div>
    <div>
      <table class="table m-b-none default footable-loaded footable" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th width="10%">#</th>
              <th width="10%">Kode Vendor</th>
              <th width="15%">Nama</th>
              <th>Nilai Vektor S</th>
          </tr>
        </thead>
        <tbody>
			<?php $i = 1; foreach($Normalisasi->result() as $Tampilkan) : ?>
				<tr class="footable-even" style="display: table-row;">
					<td><?php echo "S",$i++?></td>
					<td><?php echo $Tampilkan->nis?></td>
					<td><?php echo $Tampilkan->nama?></td>
					<td><?php echo number_format($Tampilkan->nilai,4);?></td>
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