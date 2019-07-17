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
  
  <div class="modal fade" id="rangking" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		  <div><i class="icon mdi-action-info i-24"></i> Informasi Semua Rangking</div>
        </div>
		<div class="modal-body">
		<table class="table m-b-none default footable-loaded footable" ui-jp="footable" data-filter="#filter" data-page-size="5">
		<thead>
			<tr>
				<th width="5%">Rangking</th>
				<th >Nama</th>
				<th >Nilai</th>
			</tr>
        </thead>
		<tbody>
			<?php $i = 1; foreach($NormalisasiRank->result() as $Tampilkan) : ?>
			<tr class="footable-even" style="display: table-row;">
				<td><b><?php echo $i++?></b></td>
				<td><?php echo $Tampilkan->nama?></td>
				<td><?php echo $Tampilkan->vektor_v?></td>
			</tr>
			<?php endforeach?>
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
    <div class="panel-heading"><strong>Perbaikan Bobot</div>
    <table class="table">
      <thead>
        <tr >
          <th style="padding:0px" class="text-center"><h4>C<small>1</small></h4></th>
          <th style="padding:0px" class="text-center"><h4>C<small>2</small></h4></th>
          <th style="padding:0px" class="text-center"><h4>C<small>3</small></h4></th>
          <th style="padding:0px" class="text-center"><h4>C<small>4</small></h4></th>
        </tr>
      </thead>
      <tbody>
        <tr>
			<th class="text-center"><?php echo "<b>",number_format(isset($NormalisasiBobot) ? $NormalisasiBobot->c1 : 0,4),"<b>";?></th>
			<th class="text-center"><?php echo "<b>",number_format(isset($NormalisasiBobot) ? $NormalisasiBobot->c2 : 0,4),"<b>";?></th>
			<th class="text-center"><?php echo "<b>",number_format(isset($NormalisasiBobot) ? $NormalisasiBobot->c3 : 0,4),"<b>";?></th>
			<th class="text-center"><?php echo "<b>",number_format(isset($NormalisasiBobot) ? $NormalisasiBobot->c4 : 0,4),"<b>";?></th>
        </tr>
      </tbody>
    </table>    
  </div>
  
  
 
  
  <div class="panel panel-default">
    <div class="panel-heading"><strong>Hasil Perhitungan Keseluruhan Vendor Terbaik</div>
    <table class="table">
      <thead>
		<th style="padding:0px;background: #699ec8;" class="text-center" class="text-center"><h4><strong>No</strong></h4></th>
		<th style="padding:0px;background: #699ec8;" class="text-center"><h4><strong>Vektor_S</strong></h4></th>
		<th style="padding:0px;background: #699ec8;" class="text-center"><h4><strong>Vektor_V</strong></h4></th>
          <th style="padding: 0px;background: #699ec8;" class="text-center" class="text-center"><h4><strong>Vendor Name</strong></h4></th>
      </thead>
      <tbody>
	  <?php $i=1; foreach($Normalisasi->result() as $Tampilkan) : ?>
        <tr>
				<td class="text-center"><?php echo $i++?></td>
				<td class="text-center"><?php echo "<b>",number_format($Tampilkan->vektor_s,4),"<b>";?></td>
				<td class="text-center"><?php echo "<b>",number_format($Tampilkan->vektor_v,4),"<b>";?></td>
				<td ><left><?php echo $Tampilkan->nama?></left></td>
			
        </tr>
		<?php endforeach?>
		
      </tbody>
    </table>  
  </div>

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Hasil Perhitungan Vendor Laverage (Cluster 1)</div>
    <table class="table">
      <thead>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Ranking</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Vektor S</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Vektor V</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center" class="text-center"><h5><strong>Nama Vendor</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Status</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Tanggal</strong></h5></th>
    <!--<th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Akhir</strong></h5></th>-->
      </thead>
      <tbody>
    <?php 
    $i=1; 
    $z=1;
    $data = count($Normalisasi3->result());
    $data_petama = $data - $data + 1;
    $data_terakhir = $data - $data_petama;
    foreach($Normalisasi3->result() as $Tampilkan) : ?>
        <tr class="text-center">
        <td>Rank <?php echo $i++?></td>
        <td><?php echo "<b>",number_format($Tampilkan->vektor_s,3),"<b>";?></td>
        <td><?php echo "<b>",number_format($Tampilkan->vektor_v,3),"<b>";?></td>
        <td><?php echo $Tampilkan->nama?></td>
        <td>
          <?php
          // echo $z++;
          if($z <= $data_petama){
            echo 'Perpanjangan MOU tanpa Pratinjau';
            $z++;
          }elseif ($z > $data_petama && $z < $data) {
            echo 'Perlu Peninjauan';
            $z++;
          }else{
            echo 'Perlu Peninjauan lebih lanjut (turun cluster)';
          }
          ?>
        </td>
        <td><?php echo $Tampilkan->tanggal_input?></td>
        </tr>
    <?php endforeach?>
    </tbody>
    </table>  
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><strong>Hasil Perhitungan Vendor Non Critical (Cluster 2)</div>
    <table class="table">
      <thead>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Ranking</strong></h5></th>
		<th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Vektor S</strong></h5></th>
		<th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Vektor V</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center" class="text-center"><h5><strong>Nama Vendor</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Status</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Tanggal</strong></h5></th>
      </thead>
      <tbody>
	  <?php 
      $i=1; 
      $z=1;
      $data = count($Normalisasi1->result());
      $data_petama = $data - $data + 1;
      $data_terakhir = $data - $data_petama;
      foreach($Normalisasi1->result() as $Tampilkan) : ?>
          <tr class="text-center">
          <td>Rank <?php echo $i++?></td>
  				<td><?php echo "<b>",number_format($Tampilkan->vektor_s,3),"<b>";?></td>
  				<td><?php echo "<b>",number_format($Tampilkan->vektor_v,3),"<b>";?></td>
  				<td><?php echo $Tampilkan->nama?></td>
          <td>
            <?php
            // echo $z++;
            if($z <= $data_petama){
              echo 'Perpanjangan MOU tanpa Pratinjau';
              $z++;
            }elseif ($z > $data_petama && $z < $data) {
              echo 'Perlu Peninjauan';
              $z++;
            }else{
              echo 'Perlu Peninjauan lebih lanjut (turun cluster)';
            }
            ?>
        </td>
        <td><?php echo $Tampilkan->tanggal_input?></td>
        </tr>
		<?php endforeach?>
		</tbody>
    </table>  
  </div>

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Hasil Perhitungan Vendor Critical (Cluster 3)</div>
    <table class="table">
      <thead>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Ranking</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Vektor S</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Vektor V</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center" class="text-center"><h5><strong>Nama Vendor</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Status</strong></h5></th>
    <th style="padding:0px;background: #699ec8;" class="text-center"><h5><strong>Tanggal</strong></h5></th>
      </thead>
      <tbody>
    <?php 
    $i=1; 
    $z=1;
    $data = count($Normalisasi2->result());
    $data_petama = $data - $data + 1;
    $data_terakhir = $data - $data_petama;
    foreach($Normalisasi2->result() as $Tampilkan) : ?>
        <tr class="text-center">
        <td>Rank <?php echo $i++?></td>
        <td><?php echo "<b>",number_format($Tampilkan->vektor_s,3),"<b>";?></td>
        <td><?php echo "<b>",number_format($Tampilkan->vektor_v,3),"<b>";?></td>
        <td><?php echo $Tampilkan->nama?></td>
        <td>
          <?php
          // echo $z++;
          if($z <= $data_petama){
            echo 'Perpanjangan MOU tanpa Pratinjau';
            $z++;
          }elseif ($z > $data_petama && $z < $data) {
            echo 'Perlu Peninjauan';
            $z++;
          }else{
            echo 'Pemutusan Kontrak Kerja (MOU) dalam 3 bulan';
          }
          ?>
        </td>
        <td><?php echo $Tampilkan->tanggal_input?></td>
        </tr>
    <?php endforeach?>
    </tbody>
    </table>  
  </div>

  
  
  <?php 
		$this->load->model('Admin_Model','Admin');
		$max = $this->Admin->nilaiTertinggi();
		if($max->nilai){
		$nilaimax = $max->nilai;
		$nilaitinggi = $max->nilai;
		$getDatamax = $this->Admin->GetnilaiByMax($nilaitinggi);
		$idnilai = $getDatamax->id_nilai;
		$DataBymax = $this->Admin->nilaiByMax($idnilai);
		$count = $this->Admin->sumData();
		$totalvendor = $count->total;
	?>
    
	<?php }?>
  </div>
</div>
<?php $this->load->View("footer_view")?>