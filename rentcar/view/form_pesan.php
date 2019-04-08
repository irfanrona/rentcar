<?php
  if(isset($_POST['submit'])){
    $main = new controller();
    $main->insert();
  }
  $tomorrow = date("Y-m-d", time()+86400); //86400 = 1 day
  $year = date("Y-m-d", time()+31622400);
?>

<form action="" method="POST">
  <hr>
  <div class="form-group">
    <label for="id_mobil">Pilih Jenis Mobil</label>
    <select name="id_mobil" class="form-control">
    <option value="1">Avanza</option>
    <option value="2">Elf</option>
    <option value="3">Grand Livina</option>
    <option value="4">Luxio</option>
    </select>
  </div>
  <div class="form-group">
    <label for="id_paket">Pilih Paket</label>
    <select name="id_paket" class="form-control">
    <option value="10">Paket 1 (6 jam)</option>
    <option value="20">Paket 2 (12 jam)</option>
    <option value="30">Paket 3 (24 jam)</option>
    </select>
  </div>
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
  Lihat Daftar Harga
  </button>
  <hr>
  <div class="form-group">
    <label >Pilih Tanggal Pemesanan</label>
    <input type="date" min="<?php echo "".$tomorrow;?>" max="<?php echo "".$year;?>" class="form-control" name="tgl" required>
  </div>
  <div class="form-group">
    <label >Pilih Jam Pemesanan</label>
    <input type="time" class="form-control" name="jam" required>
  </div>
  <hr>
  <div class="form-group">
    <label >Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="nama lengkap" name="nama" required>
  </div>
  <div class="form-group">
    <label >Alamat</label>
    <textarea class="form-control" rows="3" placeholder="alamat" name="alamat" required></textarea>
  </div>
  <div class="form-group">
    <label >No. KTP</label>
    <input type="number" class="form-control" placeholder="no. ktp" name="ktp" required>
  </div>
  <div class="form-group">
    <label >No. HP</label>
    <input type="number" class="form-control" placeholder="no. hp" name="hp" required>
  </div>
  <div class="form-group">
    <label >Lokasi Penjemputan</label>
    <input type="text" class="form-control" placeholder="lokasi penjemputan" name="lokasi" required>
  </div>
  <div class="checkbox alert alert-warning" role="alert">
    <label>
      <input type="checkbox" class="alert-link" required> Saya telah membaca syarat dan ketentuan, dan saya setuju !
    </label>
  </div>
  <button type="submit" name="submit" class="btn btn-success btn-lg">Kirim</button>
</form>

<div class="modal fade bs-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">List Harga</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <tr class="alert alert-info" role="alert">
            <td>#</td>
            <td>Jenis Mobil</td>
            <td>Harga Paket 1 (6 jam)</td>
            <td>Harga Paket 2 (12 jam)</td>
            <td>Harga Paket 3 (24 jam)</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Avanza</td>
            <td>Rp 350.000</td>
            <td>Rp 450.000</td>
            <td>Rp 550.000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Elf</td>
            <td>Rp 750.000</td>
            <td>Rp 950.000</td>
            <td>Rp 1.100.000</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Grand Livina</td>
            <td>Rp 400.000</td>
            <td>Rp 500.000</td>
            <td>Rp 600.000</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Luxio</td>
            <td>Rp 350.000</td>
            <td>Rp 450.000</td>
            <td>Rp 550.000</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>