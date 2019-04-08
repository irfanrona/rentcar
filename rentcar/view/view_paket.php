<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.php?b=1" aria-controls="1">Paket 1</a></li>
    <li><a href="index.php?b=2" aria-controls="2">Paket 2</a></li>
    <li><a href="index.php?b=3" aria-controls="3">Paket 3</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active">
        <div class="thumbnail">
            <?php
                if($menu=='1'){
                    ?><!--Konten-->
                    <div class="caption-full">
                        <table class="table table-striped">
                            <tr><blockquote>Tabel Harga Paket 1 Chipunk RentCAR</blockquote></tr>
                            <tr class="alert alert-info" role="alert">
                              <td>#</td>
                              <td>Jenis Mobil</td>
                              <td>Harga</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Avanza</td>
                              <td>Rp 350.000</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Elf</td>
                              <td>Rp 750.000</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Grand Livina</td>
                              <td>Rp 400.000</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Luxio</td>
                              <td>Rp 350.000</td>
                            </tr>
                        </table>
                    </div><?php     
                  }else if($menu=='2'){ //kondisi untuk mengakses halaman view sewa
                    ?><!--Konten-->
                    <div class="caption-full">
                        <table class="table table-striped">
                            <tr><blockquote>Tabel Harga Paket 2 Chipunk RentCAR</blockquote></tr>
                            <tr class="alert alert-info" role="alert">
                              <td>#</td>
                              <td>Jenis Mobil</td>
                              <td>Harga</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Avanza</td>
                              <td>Rp 450.000</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Elf</td>
                              <td>Rp 950.000</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Grand Livina</td>
                              <td>Rp 500.000</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Luxio</td>
                              <td>Rp 450.000</td>
                            </tr>
                        </table>
                    </div><?php
                  }else if ($menu=='3'){ //kondisi untuk mengakses halaman view sewa
                    ?><!--Konten-->
                    <div class="caption-full">
                        <table class="table table-striped">
                            <tr><blockquote>Tabel Harga Paket 3 Chipunk RentCAR</blockquote></tr>
                            <tr class="alert alert-info" role="alert">
                              <td>#</td>
                              <td>Jenis Mobil</td>
                              <td>Harga</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Avanza</td>
                              <td>Rp 550.000</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Elf</td>
                              <td>Rp 1.100.000</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Grand Livina</td>
                              <td>Rp 600.000</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Luxio</td>
                              <td>Rp 550.000</td>
                            </tr>
                        </table>
                    </div><?php
                  }else{
                    header('location:index.php');
                  }
            ?>
        </div>
    </div>
  </div>

</div>