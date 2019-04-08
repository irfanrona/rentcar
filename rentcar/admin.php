<?php
	include "controller/controller.php";
	session_start();
	$main = new controller();
	if(isset($_POST['edit'])){
		$main->edit();
	}else if (isset($_POST['batal'])) {
		$main->deleteUserAdmin();
	}
?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Rental Mobil - Chipunk</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

    <!--CSS Custom-->
    <link href="css/simple-line-icons.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.cbpQTRotator.js"></script>
	</head>
	<body>
<div id="wrap">
	<div class="container">
		<?php 
			if(empty($_SESSION)){
				$main->admin_login();
			}else{
				$session_id=$_SESSION['id_admin'];
				$mysql_mhs=$main->model->check_session($session_id);
				$data_mhs=mysql_fetch_array($mysql_mhs);
				$logout = 'logout';
				$logout = base64_encode($logout);
				?>
				<h3>Selamat Datang, <?php echo $data_mhs['name']; ?>!</h3>
				<?php 
					$data = $main->model->selectConfrm();
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
				                  <td>Aksi</td>
				                  <td>Edit</td>
				                  <td>Hapus</td>
				                </tr>
				                </thead><?php
					while ($row=$main->model->fetch($data)){
						$action = $row[0];
						if($row[12]==0){
							$bayar = 'BELUM LUNAS';
						}else if($row[12]==1){
							$bayar = 'DP TELAH DIBAYAR';
						}else if($row[12]==2){
							$bayar = 'LUNAS';
						}?>
			            <tr>
			              <td><?php echo $row[0]; ?></td>
			              <td><?php echo $row[4]; ?></td>
			              <td><?php echo $row[5]; ?></td>
			              <td><?php echo $row[6]; ?></td>
			              <td><?php echo $row[7]; ?></td>
			              <td><?php echo $row[8]; ?></td>
			              <td><?php echo $row[9]; ?></td>
			              <td><?php echo $row[10]; ?></td>
			              <td><?php echo $bayar; ?></td>"
			              <form action="" method="POST">
			              <input type="number" name="id_sewa" value="<?php echo "$action"; ?>" hidden/>
			              	<td><select name="action" class="form-control">
								    <option value="0"><button type="submit" class="btn btn-danger" data-dismiss="modal" name="batal">BELUM LUNAS</button></option>
								    <option value="1"><button type="submit" class="btn btn-danger" data-dismiss="modal" name="batal">SUDAH BAYAR DP</button></option>
								    <option value="2"><button type="submit" class="btn btn-danger" data-dismiss="modal" name="batal">SUDAH LUNAS</button></option>
							    </select>
							</td>
							<td><button type="submit" class="btn btn-warning" data-dismiss="modal" name="edit">EDIT</button></td>
        					<td><button type="submit" class="btn btn-danger" data-dismiss="modal" name="batal">HAPUS</button></td>
        				  </form>
			            </tr>

			    <?php
				}?>
						</table>
					</div>
				<?php echo "<a href='index.php?x=$logout'><button>Keluar</button></a>";
			}
		?>
	</div>
</div>
<?php
	include_once 'footer.php';
?>