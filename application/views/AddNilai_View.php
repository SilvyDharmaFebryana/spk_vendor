<?php $this->load->View("header_view")?>
<div class="box-row">
 <div class="box-cell">
 <div class="box-inner padding">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading bg-white">
          <b><a href="<?php echo base_url("Data/Nilai")?>"><?php if(isset($Title)) : echo $Title; endif;?></a></b>
        </div>
        <div class="panel-body">
		  <form action="<?php echo base_url("Data/AddNilai") ?>" method="post" role="form">
			
			<div class="form-group <?php if(isset($kosongnama)):  echo "has-error"; endif;?>">
              <label for="nama"><strong></S>Nama Vendor </strong></label>
			<select class="form-control" id="nama" name="nama" required="*" style="width: 100%">
				<option value="">-- Select Vendor -- </option>
				<?php foreach ($get_vendor as $datas) { ?>
				<option value="<?php echo $datas->nama_vendor ?>"><?php echo $datas->nama_vendor ?></option>				
				<?php } ?>
			</select>
			</div>	
			<hr></hr>	

		<!--<div class="form-group">
			<label><strong>Tanggal</strong></label>
			<input type="date" name="tanggal" class="form-control" placeholder="" value= "<?php $tanggal=date('d-m-Y'); echo $tanggal;?>" required>-->

			<!--<?php echo set_value('tanggal') ?>" required>-->
		<!--</div>-->

			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongdetail)):  echo "has-error"; endif;?>">
				  <label for="detail"><strong>Profile Company</strong></label>
				  
				  <input type="text" class="form-control" id="detail" placeholder="Nilai Detail" name="detail" value="<?php if(isset($detail)): echo $detail; endif;?><?php if(isset($nilai)):  echo $nilai->nilai_asli_c2; endif;?>" autocomplete="off" <?php if(isset($kosongdetail)):  echo "autofocus";  endif;?>>
				  <hr></hr>
				  <label for="performance"><strong>Ket:</strong></label>
				  <label>Keterangan dan Kelengkapan data dokumen Vendor</label>
					<ul class="list-group">
					  <li class="list-group-item active"><strong>100 - 80 :</strong> Keterangan dan Kelengkapan dokumen 100% sama</li>
					  <li class="list-group-item active"><strong>79 - 60 :</strong> Keterangan dan Kelengkapan dokumen 80% sama</li>
					  <li class="list-group-item active"><strong>59 - 40 :</strong> Keterangan dan Kelengkapan dokumen 60% sama</li>
					  <li class="list-group-item active"><strong>39 - 20 :</strong> Keterangan dan Kelengkapan dokumen 40% sama</li>
					  <li class="list-group-item active"><strong>19 - 0 :</strong> Keterangan dan Kelengkapan dokumen 20% sama</li>
					</ul> 
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongperformance)):  echo "has-error"; endif;?>">
				  <label for="performance"><strong>Performance</strong></label>
				  <input type="text" class="form-control" id="matematika" required="" placeholder="Nilai Performance" name="performance" value="<?php if(isset($performance)): echo $performance; endif;?><?php if(isset($nilai)):  echo $nilai->nilai_asli_c1; endif;?>" autocomplete="off" <?php if(isset($kosongperformance)):  echo "autofocus";  endif;?>>
				  <hr></hr>
				  <label for="performance"><strong>Ket:</strong></label>
				  <label>Kualitas Performa dari Vendor tersebut</label>
				  <ul class="list-group">
					  <li class="list-group-item active"><strong>100 - 80 :</strong> Sangat Baik</li>
					  <li class="list-group-item active"><strong>79 - 60 :</strong> Baik</li>
					  <li class="list-group-item active"><strong>59 - 40 :</strong> Cukup</li>
					  <li class="list-group-item active"><strong>39 - 20 :</strong> Kurang</li>
					  <li class="list-group-item active"><strong>19 - 0 :</strong> Sangat Kurang</li>
					</ul> 
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongquality)):  echo "has-error"; endif;?>">
				  <label for="quality"><strong>Quality</strong></label>
				  <input type="text" class="form-control" id="quality" placeholder="Nilai Quality" name="quality" value="<?php if(isset($quality)): echo $quality; endif;?><?php if(isset($nilai)):  echo $nilai->nilai_asli_c3; endif;?>" autocomplete="off" <?php if(isset($kosongquality)):  echo "autofocus";  endif;?>>
				  <hr></hr>
				  <label for="performance"><strong>Ket:</strong></label>
				  <label>Kualitas barang yang di produksi oleh Vendor</label>
				  <ul class="list-group">
					  <li class="list-group-item active"><strong>100 - 80 :</strong> Kualitas produk yang hasilkan ≤ 100% baik</li>
					  <li class="list-group-item active"><strong>79 - 60 :</strong> Kualitas produk yang hasilkan ≤ 80% baik</li>
					  <li class="list-group-item active"><strong>59 - 40 :</strong> Kualitas produk yang dihasilkan ≤ 60% baik</li>
					  <li class="list-group-item active"><strong>39 - 20 :</strong> Kualitas produk yang dihasilkan ≤ 40% baik</li>
					  <li class="list-group-item active"><strong>19 - 0 :</strong> Kualitas produk yang dihasilkan ≤ 20% baik</li>
					</ul> 
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongresponse)):  echo "has-error"; endif;?>">
				  <label for="response"><strong>Response</strong></label>
				  <input type="text" class="form-control" id="response" placeholder="Nilai Response" name="response" value="<?php if(isset($response)): echo $response; endif;?><?php if(isset($nilai)):  echo $nilai->nilai_asli_c4; endif;?>" autocomplete="off" <?php if(isset($kosongresponse)):  echo "autofocus";  endif;?>>
				  <hr></hr>
				  <label for="performance"><strong>Ket:</strong></label>
				  <label>komunikasi dan respon vendor tersebut terhadap perusahaan</label>
				  <ul class="list-group">
					  <li class="list-group-item active"><strong>100 - 80 : </strong>Expert (terbaik)</li>
					  <li class="list-group-item active"><strong>79 - 60 : </strong>Proficient (baik)</li>
					  <li class="list-group-item active"><strong>59 - 40 : </strong>Competent (sedang)</li>
					  <li class="list-group-item active"><strong>39 - 20 : </strong>Capable (kurang)</li>
					  <li class="list-group-item active"><strong>19 - 0 : </strong>Basic (sangat kurang)</li>
					</ul> 
				</div>
			</div>
			<input type="hidden" name="id_nilai" value="<?php if(isset($nilai)):echo $nilai->id_nilai; else: echo"0";endif;?><?php if(isset($erernilai)): echo $erernilai;endif;?>">
			<hr></hr>
			<button md-ink-ripple="" class="md-btn md-raised pull-right p-h-md blue waves-effect" type="submit" name="simpan" value="simpan"><center>Simpan Nilai</button>
          </form>
      </div>
    </div>
	
<?php $this->load->View("footer_view")?>