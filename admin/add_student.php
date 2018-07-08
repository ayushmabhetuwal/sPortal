<!DOCTYPE html>
 <html>
	<head>
		<meta charset="UTF-8">
		<title>Sagarmatha Student User</title>
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link rel ="stylesheet" href= "../bootstrap/css/bootstrap.css" >
		<script src ="../jquery.js"> </script>
		<script src ="../bootstrap/js/bootstrap.js"></script> 
		<link rel="stylesheet" href="stylee.css" >
	</head>
	<body>
		<?php include 'includes/header.php'?>			
		<div class="clearfix"></div>
		<div style="width:50px; height:50px;"></div> 
		<div>   
			<?php include 'includes/sidebar.php'?>
		</div>
		<div class="marginl" >
			<div class="admincontent  marginauto">
				<div class="studentlist">
					<?php		
						if(isset($_POST['submit'])){
							$User = "root";
							$Password = "";
							$Database = "sagarmatha";
							$Table = "students";
							$Host = "localhost";
							$sqlDate = date('Y-m-d'); 
							$con = mysqli_connect("localhost","root","","sagarmatha");
							$upload_image=$_FILES["myimage"]["name"];  
							$folder="../student_image/"; 
					        move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]); 
							$insert = "INSERT INTO $Table (user,password,email,batch,gender,registerdate,imagename,imagepath ) 
							VALUES('$_POST[user]','$_POST[password]','$_POST[email]','$_POST[batch]','$_POST[gender]','$sqlDate','$upload_image','$folder')";		
							if (!mysqli_query($con,$insert)){
								die("Error:".mysqli_error($con));
							} else {
								echo "<script>alert('Account Created Successfully')</script>";
								echo "<script>window.open('index.php?msg= Account Created Successfully,'_self')</script>";	
							}						
						}

					?>
					<div class="col-lg-9">
						<div class="panel panel-default">
							<div class="panel-heading main-color-bg">
								<h3 class="panel-title">User registration</h3>
							</div>
							<div class="panel-body">
								<form method="post" action="add_student.php" enctype="multipart/form-data">
									<table class="table">
										<tr>
											<th>Name</th><td><input type="text" name="user" maxlength="50" required/></td>
											<th>Upload Image</th><td><input  type="file" name="myimage" required/></td>
										</tr>
										<tr>
											<th>Password</th><td><input type="password" name="password" id="pswd" required /></td>
											<th>Re-enter</th><td><input type="password"  id="re" required /></td>
										</tr>
										<tr>
											<th>Email</th><td><input type="email" name="email" /></td>
											<th>Gender</th><td>	<select name="gender"><option class="option"> Male</option><option class="option">Female</option></select></td>
										</tr>
										<tr>
											<th>Batch</th><td><input type="text" name="batch"/></td>
											<th>Registration Date</th><td><input type="date" id="date" name="reg_date" placeholder="MM/DD/YYYY" required /></td>
										</tr>	
									</table>			
									<div class="sbutton">
										<center><button class="btn" type="submit" name="submit"> Register </button>
										<button class="btn" type="reset">Reset</button></center>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</body>
</html>