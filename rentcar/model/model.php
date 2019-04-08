<?php
	
	class model{
		function __construct(){
			$connect=mysql_connect("localhost","root","");
			$db = mysql_select_db("rental_mobil");
		}

		function execute($query){
			return mysql_query($query);
		}
		function start_session($user,$pass){

			$query="select *from admin where username='$user' and password='$pass'";
			return $this->execute($query);
		}
		function check_session($session_id){

			$query="select *from admin where id_admin='$session_id'";
			return $this->execute($query);
		}
		function selectAll(){
			$query="select *from mahasiswa";
			return $this->execute($query);
		}
		function selectConfrm(){
			$query="select *from sewa where konfirmasi=1";
			return $this->execute($query);
		}
		function selectMobil($data1){
			$query="select type from mobil where id_mobil='$data1'";
			return $this->execute($query);
		}
		function selectPaket($data2){
			$query="select paket from paket where id_paket='$data2'";
			return $this->execute($query);
		}
		function selectHarga($data3){
			$query="select harga from harga where id_harga='$data3'";
			return $this->execute($query);
		}
		function selectMhs($hp){
			$hp = base64_decode($hp);
			$query="select * from sewa where hp='$hp'";
			return $this->execute($query);
		}
		function selectID($id){
			$id = base64_decode($id);
			$query="select id_sewa from sewa where id_sewa ='$id'";
			return $this->execute($query);
		}

		function updateMhs($nim,$nama,$angkatan,$fakultas,$prodi){
			$query="update mahasiswa set nim='$nim',nama='$nama',angkatan='$angkatan',fakultas='$fakultas',program='$prodi' where nim='$nim'";
			return $this->execute($query);
		}
		function updateSewa($konfirmasi,$id_sewa){
			$query="update sewa set konfirmasi='$konfirmasi' where id_sewa='$id_sewa'";
			return $this->execute($query);
		}
		function updateSewaStatus($action,$id_sewa){
			$query="update sewa set status_bayar='$action' where id_sewa='$id_sewa'";
			return $this->execute($query);
		}

		function deleteMhs($id){
			$query="delete from sewa where id_sewa='$id'";
			return $this->execute($query);
		}

		function insertSewa($id_mobil,$id_paket,$id_harga,$tgl,$jam,$nama,$alamat,$ktp,$hp,$lokasi){
			$query="insert into sewa values ('','$id_mobil','$id_paket','$id_harga','$tgl','$jam','$nama','$alamat','$ktp','$hp','$lokasi','','')";
			return $this->execute($query);
		}
		function insertTest($tgl,$jam,$nama,$alamat,$ktp,$hp,$lokasi){
			$query="insert into test values ('','$tgl','$jam','$nama','$alamat','$ktp','$hp','$lokasi')";
			return $this->execute($query);
		}

		function fetch($var){
			return mysql_fetch_array($var);
		}
		
		function __destruct(){
		}
	}
?>