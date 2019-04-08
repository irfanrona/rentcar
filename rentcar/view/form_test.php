<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
			<tr align="center">
				<td>tgl</td>
				<td>:</td>
				<td><input type="date" name="tgl" size="45"/></td>
			</tr>

			<tr align="center">
				<td>jam</td>
				<td>:</td>
				<td><input type="time" name="jam" size="45"/></td>
			</tr>

			<tr align="center">
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="45"/></td>
			</tr>

			<tr align="center">
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="45"/></td>
			</tr>

			<tr align="center">
				<td>ktp</td>
				<td>:</td>
				<td><input type="text" name="ktp" size="45"/></td>
			</tr>

			<tr align="center">
				<td>hp</td>
				<td>:</td>
				<td><input type="text" name="hp" size="45"/></td>
			</tr>

			<tr align="center">
				<td>lokasi</td>
				<td>:</td>
				<td><input type="text" name="lokasi" size="45"/></td>
			</tr>
			
			<tr align="center">
				<td colspan="3"><input type="submit" name="submit" size="45"/></td>
			</tr>
			</table>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$main = new controller();
		$main->insertTest();
	}
?>