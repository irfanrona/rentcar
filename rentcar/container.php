<div class="container">
    <div class="page-header">
    <?php
        $main = new controller();
      //kondisi untuk menampilkan halaman web yang diminta
      if(isset($_GET['v'])){ //kondisi untuk mengakses halaman view mobil dan sewa
        $menu = $_GET['v'];
        $main->viewMS($menu);
      }else if(isset($_GET['b'])){ //kondisi untuk mengakses halaman view sewa
        $menu = $_GET['b'];
        $main->viewPS($menu);
      }else if (isset($_GET['page'])){ //kondisi untuk mengakses halaman view sewa
        $menu = $_GET['page'];
        $main->viewPage($menu);
      }else if (isset($_GET['konfirmasi'])){ //kondisi untuk mengakses halaman view sewa
        $hp = $_GET['konfirmasi'];
        $main->konfirmasi($hp);
      }else if (isset($_GET['pemesanan'])){ //kondisi untuk mengakses halaman view sewa
        $id = $_GET['pemesanan'];
        $main->tunggu($id);
      }else{
        $main->index(); // menampilkan seluruh data
      }
    ?>
  </div>
</div>