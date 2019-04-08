<?php 
	session_start();
	if(empty($_SESSION)){
		$main = new controller();
		$main->index();
	}
	$mysql_mhs=mysql_query("select *from admin where id_admin='$_SESSION[id_admin]'") or die(mysql_error());
	$data_mhs=mysql_fetch_array($mysql_mhs);
	$logout = 'logout';
	$logout = base64_encode($logout);
?>


	<h3>Selamat Datang, <?php echo $data_mhs['name']; ?>!</h3>
	<?php 
		$data = $this->model->selectConfrm();
		?>
		<div class="caption-full">
	            <table class="table table-striped">
	                <thead>
	                <tr class="alert alert-info" role="alert">
	                  <td>id_sewa</td>
	                  <td>tgl</td>
	                  <td>jam</td>
	                  <td>nama</td>
	                  <td>alamat</td>
	                  <td>ktp</td>
	                  <td>hp</td>
	                  <td>lokasi</td>
	                  <td>Status Bayar</td>
	                  <td>Edit</td>
	                  <td>Hapus</td>
	                </tr>
	                </thead><?php
		while ($row=$this->model->fetch($data)){
			$action = base64_encode($row[0]);
		echo"
            <tr>
              <td>$row[0]</td>
              <td>$row[4]</td>
              <td>$row[5]</td>
              <td>$row[6]</td>
              <td>$row[7]</td>
              <td>$row[8]</td>
              <td>$row[9]</td>
              <td>$row[10]</td>
              <td>$row[12]</td>
              <td><a href='index.php?e=$action'>Edit</a></td>
			  <td><a href='index.php?d=$action' onClick=\"return comfirm('Hapus Data?')\"\>Delete</a></td>
            </tr>";
	}?>
			</table>
		</div>
	<?php echo "<a href='index.php?x=$logout'><button>Keluar</button></a>"; ?>
