<?php
	if(isset($_POST['submit'])){
		$main = new controller();
		$main->update();
	}else if (isset($_POST['batal'])) {
		$main = new controller();
		$main->deleteUser();
	}
	
?>
<?php 
  while ($row=$this->model->fetch($data)){
  $data1 = $row[1];
  $data2 = $row[2];
  $data3 = $row[3];

  $Mobil = $this->model->selectMobil($data1);
  $Mobil = $this->model->fetch($Mobil);
  $Paket = $this->model->selectPaket($data2);
  $Paket = $this->model->fetch($Paket);
  $Harga = $this->model->selectHarga($data3);
  $Harga = $this->model->fetch($Harga);
  $id = $row[0];
  $tgl = $row[4];
  $jam = $row[5];
  $nama = $row[6];
  $alamat = $row[7];
  $ktp = $row[8];
  $hp = $row[9];
  $lokasi = $row[10];
  $konfirmasi = $row[11];
  }
  $DP = ($Harga[0] * 30)/100;
?>
<div class=" bs-example-modal-lg" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="id_mobil">Jenis Mobil</label>
            <p><?php echo "$Mobil[0]"; ?></p>
          </div>
          <div class="form-group">
            <label for="id_paket">Paket</label>
            <p><?php echo "$Paket[0]"; ?></p>
          </div>
          <div class="form-group">
            <label for="id_paket">Total Pembayaran</label>
            <p><?php echo "Rp. $Harga[0],-"; ?></p>
          </div>
          <div class="form-group">
            <label for="id_paket">DP</label>
            <p><?php echo "Rp. $DP,-"; ?></p>
          </div>
          <hr>
          <div class="form-group">
            <label >Tanggal Pemesanan</label>
            <p><?php echo "$tgl"; ?></p>
          </div>
          <div class="form-group">
            <label >Jam Pemesanan</label>
            <p><?php echo "$jam"; ?></p>
          </div>
          <hr>
          <div class="form-group">
            <label >Nama Lengkap</label>
            <p><?php echo "$nama"; ?></p>
          </div>
          <div class="form-group">
            <label >Alamat</label>
            <p><?php echo "$alamat"; ?></p>
          </div>
          <div class="form-group">
            <label >No. KTP</label>
            <p><?php echo "$ktp"; ?></p>
          </div>
          <div class="form-group">
            <label >No. HP</label>
            <p><?php echo "$hp"; ?></p>
          </div>
          <div class="form-group">
            <label >Lokasi Penjemputan</label>
            <p><?php echo "$lokasi"; ?></p>
          </div>
      </div>
      <div class="modal-footer">
      	<form action="" method="POST">
      	<input type="number" name="konfirmasi" value="1" hidden/>
      	<input type="number" name="id_sewa" value="<?php echo "$id"; ?>" hidden/>
        <button type="submit" class="btn btn-success" data-dismiss="modal" name="submit">Pesan</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal" name="batal">Batal</button>
        </form>
      </div>
    </div>
  </div>
</div>