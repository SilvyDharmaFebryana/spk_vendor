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
			<div class="form-group <?php if(isset($kosongnis)):  echo "has-error"; endif;?>">
              <label for="nis">Nomor Induk Siswa</label>
              <input type="text" class="form-control" id="nis" placeholder="Masukkan Nomor Induk Siswa" name="nis" value="<?php if(isset($nis)): echo $nis; endif;?> <?php if(isset($nilai)):  echo $nilai->nis;  endif;?>" autocomplete="off" <?php if(isset($kosongnis)):  echo "autofocus";  endif;?>>
            </div>
			<div class="form-group <?php if(isset($kosongnama)):  echo "has-error"; endif;?>">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php if(isset($nama)): echo $nama; endif;?> <?php if(isset($nilai)):  echo $nilai->nama;  endif;?>" autocomplete="off" <?php if(isset($kosongnama)):  echo "autofocus";  endif;?>>
            </div>
			
			<div class="form-group <?php if(isset($kosongkelas)):  echo "has-error"; endif;?>">
              <label for="kelas">Kelas</label>
              <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" value="<?php if(isset($kelas)): echo $kelas; endif;?>  <?php if(isset($nilai)):  echo $nilai->kelas;  endif;?>" autocomplete="off" <?php if(isset($kosongkelas)):  echo "autofocus";  endif;?>>
            </div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongmatematika)):  echo "has-error"; endif;?>">
				  <label for="matematika">Matematika</label>
				  <input type="text" class="form-control" id="matematika" placeholder="Nilai Matematika" name="matematika" value="<?php if(isset($matematika)): echo $matematika; endif;?>  <?php if(isset($nilai)):  echo $nilai->nilai_asli_c1; endif;?>" autocomplete="off" <?php if(isset($kosongmatematika)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongfisika)):  echo "has-error"; endif;?>">
				  <label for="fisika">Fisika</label>
				  <input type="text" class="form-control" id="fisika" placeholder="Nilai Fisika" name="fisika" value="<?php if(isset($fisika)): echo $fisika; endif;?>  <?php if(isset($nilai)):  echo $nilai->nilai_asli_c2; endif;?>" autocomplete="off" <?php if(isset($kosongfisika)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongbiologi)):  echo "has-error"; endif;?>">
				  <label for="biologi">Biologi</label>
				  <input type="text" class="form-control" id="biologi" placeholder="Nilai Biologi" name="biologi" value="<?php if(isset($biologi)): echo $biologi; endif;?>  <?php if(isset($nilai)):  echo $nilai->nilai_asli_c3; endif;?>" autocomplete="off" <?php if(isset($kosongbiologi)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosonginggris)):  echo "has-error"; endif;?>">
				  <label for="inggris">Bahasa Inggris</label>
				  <input type="text" class="form-control" id="inggris" placeholder="Nilai Bahasa Inggris" name="inggris" value="<?php if(isset($inggris)): echo $inggris; endif;?>  <?php if(isset($nilai)):  echo $nilai->nilai_asli_c4; endif;?>" autocomplete="off" <?php if(isset($kosonginggris)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongekonomi)):  echo "has-error"; endif;?>">
				  <label for="ekonomi">Ekonomi</label>
				  <input type="text" class="form-control" id="ekonomi" placeholder="Nilai Ekonomi" name="ekonomi" value="<?php if(isset($ekonomi)): echo $ekonomi; endif;?>  <?php if(isset($nilai)):  echo $nilai->nilai_asli_c5; endif;?>" autocomplete="off" <?php if(isset($kosongekonomi)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			
			
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosonggeofrafi)):  echo "has-error"; endif;?>">
				  <label for="geofrafi">Geografi</label>
				  <input type="text" class="form-control" id="geofrafi" placeholder="Nilai Geografi" name="geofrafi" value="<?php if(isset($geofrafi)): echo $geofrafi; endif;?>  <?php if(isset($nilai)):  echo $nilai->nilai_asli_c6; endif;?>" autocomplete="off" <?php if(isset($kosonggeofrafi)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongprestasi)):  echo "has-error"; endif;?>">
				  <label for="prestasi">Prestasi</label>
				  <input type="text" class="form-control" id="prestasi" placeholder="Nilai Prestasi" name="prestasi" value="<?php if(isset($prestasi)): echo $prestasi; endif;?>  <?php if(isset($nilai)):  echo $nilai->nilai_asli_c7; endif;?>" autocomplete="off" <?php if(isset($kosongprestasi)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group <?php if(isset($kosongpengalaman)):  echo "has-error"; endif;?>">
				  <label for="pengalaman">Pengalaman OSN</label>
				  <input type="text" class="form-control" id="pengalaman" placeholder="Nilai Pengalaman OSN" name="pengalaman" value="<?php if(isset($pengalaman)): echo $pengalaman; endif;?><?php if(isset($nilai)):  echo $nilai->nilai_asli_c8; endif;?>" autocomplete="off" <?php if(isset($kosongpengalaman)):  echo "autofocus";  endif;?>>
				</div>
			</div>
			<input type="hidden" name="id_nilai" value="  <?php if(isset($nilai)):  echo $nilai->id_nilai; endif;?>">
			<button md-ink-ripple="" class="md-btn md-raised pull-right p-h-md blue waves-effect" type="submit" name="simpan" value="simpan">SIMPAN</button>
          </form>
      </div>
    </div>
<?php $this->load->View("footer_view")?>