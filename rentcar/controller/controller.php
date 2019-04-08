<?php
	//include class model
	include_once "model/model.php";
	
	class controller{
		//variable public
		public $model;
		//konstruktor untuk class
		
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat class model
		}
		function index(){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll
			include_once "view/view.php"; // memanggil view.php
		}
		function viewEdit($nim){
			$data = $this->model->selectMhs($nim); //select data mahasiswa dengan nim...
			$row = $this->model->fetch($data); //fetch hasil select
			include_once "view/view_edit.php"; // menampilkan halaman untuk edit data
		}
		function viewPage($menu){
			if ($menu=='syarat') {
				include_once 'view/view_syarat.php';
			}else if ($menu=='pesan') {
				include_once 'view/form_pesan.php';
			}
		}
		function viewPS($menu){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll
			include_once "view/view_paket.php";
		}
		function viewMS($menu){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll
			include_once "view/view_mobil.php";
		}
		function konfirmasi($hp){
			$data = $this->model->selectMhs($hp); //select data mahasiswa dengan nim...
			include_once "view/konfirmasi.php"; // menampilkan halaman untuk edit data
		}
		function tunggu($id){
			$id = $this->model->selectID($id);
			$id = $this->model->fetch($id);
			include_once "view/view_pemesanan.php"; // menampilkan halaman untuk edit data
		}
		function admin_login(){
			include_once "view/v_admin_login.php"; // menampilkan halaman untuk edit data
		}
		function login($user,$pass){
			$mysql = $this->model->start_session($user,$pass);
			if ($data = $this->model->fetch($mysql)){
				$_SESSION['id_admin']=$data['id_admin'];
				$login = 'login';
				$login =base64_encode($login);
				header("location:admin.php");
			} else {
				return $error="Username dan Password Salah!";
			}
		}
		//fungsi update data
		function update(){
			$id_sewa = $_POST['id_sewa'];
			$konfirmasi = $_POST['konfirmasi'];
			$update = $this->model->updateSewa($konfirmasi,$id_sewa);
			$id_sewa =base64_encode($id_sewa);
			header("location:index.php?pemesanan=$id_sewa");
		}
		function edit(){
			$id_sewa = $_POST['id_sewa']; 
			$action = $_POST['action'];

			$update = $this->model->updateSewaStatus($action,$id_sewa);
		}
		function delete($id){
			$delete = $this->model->deleteMhs($id);
			$login = 'login';
			$login =base64_encode($login);
			header("location:index.php?x=$login");	
		}
		function deleteUser(){
			$id = $_POST['id_sewa'];
			$delete = $this->model->deleteMhs($id);
			header("location:index.php?page=pesan");	
		}
		function deleteUserAdmin(){
			$id = $_POST['id_sewa'];
			$delete = $this->model->deleteMhs($id);
		}
		function insert(){
			$id_mobil = $_POST['id_mobil'];
			$id_paket = $_POST['id_paket'];
			$id_harga = $id_mobil + $id_paket;
			$tgl = $_POST['tgl'];
			$jam = $_POST['jam'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$ktp = $_POST['ktp'];
			$hp = $_POST['hp'];
			$lokasi = $_POST['lokasi'];
			$insert = $this->model->insertSewa($id_mobil,$id_paket,$id_harga,$tgl,$jam,$nama,$alamat,$ktp,$hp,$lokasi);
			$hp = base64_encode($hp);
			header("location:index.php?konfirmasi=$hp");
		}
		function insertTest(){
			//$id_mobil = $_POST['id_mobil'];
			//$id_paket = $_POST['id_paket'];
			$tgl = $_POST['tgl'];
			$jam = $_POST['jam'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$ktp = $_POST['ktp'];
			$hp = $_POST['hp'];
			$lokasi = $_POST['lokasi'];
			$insert = $this->model->insertSewa('',$tgl,$jam,$nama,$alamat,$ktp,$hp,$lokasi);
			header_remove();
			header("location:index.php");
		}
		function __destruct(){
		}
	}
 ?>
