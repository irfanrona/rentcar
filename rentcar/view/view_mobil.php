<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.php?v=avanza" aria-controls="avanza">Avanza</a></li>
    <li><a href="index.php?v=elf" aria-controls="elf">Elf</a></li>
    <li><a href="index.php?v=grand" aria-controls="grand">Grand</a></li>
    <li><a href="index.php?v=luxio" aria-controls="luxio">Luxio</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active">
        <div class="thumbnail">
            <?php
                if($menu=='avanza'){
                    ?><!--Konten-->
                    <img class="img-responsive" src="source/picture/avanza.png" alt="avanza">
                    <div class="caption-full">
                        <h4 class="pull-right"><input class="btn btn-default" type="button" value="Paket 1 Rp 350.000"><input class="btn btn-default" type="button" value="Paket 2 Rp 450.000"><input class="btn btn-default" type="button" value="Paket 3 Rp 550.000"></h4>
                        <h4><a href="#">Avanza</a>
                        </h4>
                        <p>Lihat Spesifikasi Grand Avanza 1.3 E A/T kami di <a target="_blank" href="http://www.toyota.astra.co.id/product/avanza">Toyota Product - http://www.toyota.astra.co.id/product/avanza</a>.</p>
                        <p>Kami hadir dengan harga rental / sewa mobil murah dan kondisi mobil yang baru demi kenyamanan client kami. Atas dasar ini juga kami sadar dengan kondisi kendaraan yang bukan sekedar nyaman, namun juga aman bagi keselamatan penumpang.</p>
                        <p>Tipe kendaraan yang fleksibel, cocok bagi anda yang senang berpergian keluar kota atau pada saat membawa keluarga waktu mudik. Kendaraan yang luas menghadirkan kenyamanan untuk anda walaupun menempuh jarak yang jauh.</p>
                    </div>
                    <div class="ratings">
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div><?php     
                  }else if($menu=='elf'){ //kondisi untuk mengakses halaman view sewa
                    ?><!--Konten-->
                    <img class="img-responsive" src="source/picture/elf.png" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><input class="btn btn-default" type="button" value="Paket 1 Rp 750.000"><input class="btn btn-default" type="button" value="Paket 2 Rp 950.000"><input class="btn btn-default" type="button" value="Paket 3 Rp 1.100.000"></h4>
                        <h4><a href="#">Elf</a>
                        </h4>
                        <p>Lihat Spesifikasi ISUZU ELF NKR 55 MICROBUS LWB kami di <a target="_blank" href="www.isuzu-astra.com/product.php?model=MTQ=">Isuzu Product - http://www.isuzu-astra.com/product/elf</a>.</p>
                        <p>Kami hadir dengan harga rental / sewa mobil murah dan kondisi mobil yang baru demi kenyamanan client kami. Atas dasar ini juga kami sadar dengan kondisi kendaraan yang bukan sekedar nyaman, namun juga aman bagi keselamatan penumpang.</p>
                        <p>Kendaraan yang banyak diminati oleh customer kami untuk bepergian dengan keluarga besar atau rombongan karena memiliki ruangan dalam yang luas dan nyaman sehingga mampu memuat banyak penumpang dan barang bawaan. Minibus Elf pun menawarkan jarak pandang yang tinggi dan luas sehingga memudahkan anda dalam berkendara.</p>
                    </div>
                    <div class="ratings">
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            3.0 stars
                        </p>
                    </div><?php
                  }else if ($menu=='grand'){ //kondisi untuk mengakses halaman view sewa
                    ?><!--Konten-->
                    <img class="img-responsive" src="source/picture/grand.png" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><input class="btn btn-default" type="button" value="Paket 1 Rp 400.000"><input class="btn btn-default" type="button" value="Paket 2 Rp 500.000"><input class="btn btn-default" type="button" value="Paket 3 Rp 600.000"></h4>
                        <h4><a href="#">Grand Livina</a>
                        </h4>
                        <p>Lihat Spesifikasi All New Grandlivina 1.5 SV kami di <a target="_blank" href="http://www.nissan-id.com/2015/03/spesifikasi-nissan-grandlivina.html">Nissan Product - http://www.nissan-id.com/2015/03/spesifikasi-nissan-grandlivina.html</a>.</p>
                        <p>Kami hadir dengan harga rental / sewa mobil murah dan kondisi mobil yang baru demi kenyamanan client kami. Atas dasar ini juga kami sadar dengan kondisi kendaraan yang bukan sekedar nyaman, namun juga aman bagi keselamatan penumpang.</p>
                        <p>Kendaraan yang nyaman untuk bepergian dengan keluarga, sangat cocok karena ruangan nyaman dan elegan. Grand Livina menjadikan kendaraan sedan keluarga idaman.</p>
                    </div>
                    <div class="ratings">
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            5.0 stars
                        </p>
                    </div><?php
                  }else if ($menu=='luxio'){ //kondisi untuk mengakses halaman view sewa
                    ?><!--Konten-->
                    <img class="img-responsive" src="source/picture/luxio.png" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><input class="btn btn-default" type="button" value="Paket 1 Rp 350.000"><input class="btn btn-default" type="button" value="Paket 2 Rp 450.000"><input class="btn btn-default" type="button" value="Paket 3 Rp 550.000"></h4>
                        <h4><a href="#">Luxio</a>
                        </h4>
                        <p>Lihat Spesifikasi Luxio Type X kami di <a target="_blank" href="http://daihatsu.co.id/product/luxio">Daihatsu Product - http://daihatsu.co.id/product/luxio</a>.</p>
                        <p>Kami hadir dengan harga rental / sewa mobil murah dan kondisi mobil yang baru demi kenyamanan client kami. Atas dasar ini juga kami sadar dengan kondisi kendaraan yang bukan sekedar nyaman, namun juga aman bagi keselamatan penumpang.</p>
                        <p>Tipe kendaraan yang fleksibel, cocok bagi anda yang senang berpergian keluar kota atau pada saat membawa keluarga waktu mudik. Kendaraan yang luas menghadirkan kenyamanan untuk anda walaupun menempuh jarak yang jauh.</p>
                    </div>
                    <div class="ratings">
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div><?php
                  }else{
                    header('location:index.php');
                  }
            ?>
        </div>
    </div>
  </div>

</div>