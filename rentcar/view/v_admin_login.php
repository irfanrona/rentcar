<?php
	if (isset($_POST['login'])) {
		$user=$_POST['user'];
		$pass=$_POST['pass'];

		$main = new controller();
		$error=$main->login($user,$pass);
	}else{
		$error = "";
	}
?>
<h1>Administrator Login !</h1>
		<hr>
		<h3>Masukkan akun anda!</h3>
		<form action="" method="POST">
			<div class="form-group">
		    	<label >Username</label>
		    	<input type="text" class="form-control" placeholder="username" name="user" required>
		  	</div>
		  	<div class="form-group">
		    	<label >Password</label>
		    	<input type="password" class="form-control" placeholder="password" name="pass" required>
		  	</div>
		  	<div class="form-group">
		    	<label ></label>
		    	<i><?php echo $error;?></i>
		  	</div>
		  	<button type="submit" name="login" class="btn btn-success btn-md">Login</button>
		</form>