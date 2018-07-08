<?php
session_start();
?>
<html>
	<head>
		<title>Admin Dashboard Login</title>
		<link rel ="stylesheet" href= "../bootstrap/css/bootstrap.css" >
		<script src ="../jquery.js"> </script>
		<script src ="../bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" href="style.css" >
	</head>
	<body> 
		<div style="width:50px; height:100px;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form id="login" action="login.php" class="well" method="POST">
						<div class="form-group">
							<label>Username</label>
								<input type="text" class="form-control" placeholder="Enter Email" name="user_name">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" >
						</div>
							<button type="submit" class="btn btn-default btn-block"  name="login" value="Login">Login</button>
					</form>
				</div>
			</div>
		</div>		
	</body>
</html>

<?php
	$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
	if(isset($_POST['login'])) {	
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$query = "SELECT * FROM admin WHERE name = '$user_name' AND password = '$password'";
		$result = mysqli_query($connect,$query);
		if(mysqli_num_rows($result)==1) {		
			$_SESSION['user_name'] = $user_name;
			echo "<script>window.open('index.php','_self')</script>";			
		} else {
			echo "<script>alert('username or password invalid')</script>";
		}
	}
?>


