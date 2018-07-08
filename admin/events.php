<html>
	<head>
			<title>New Event</title>
			<link rel ="stylesheet" href= "../bootstrap/css/bootstrap.css" >
			<script src ="../jquery.js"> </script>
			<script src ="../bootstrap/js/bootstrap.js"></script>
			<link rel="stylesheet" href="stylee.css" >
			<script> CKEDITOR.replace( 'editor1' ); </script>
	</head>
	<body>
		<?php include 'includes/header.php'?>
		<div class="clearfix"></div>
		<div style="width:50px; height:50px;"></div>  
		<div> 
			<?php include 'includes/sidebar.php'?>
		</div>
		<div class="col-lg-9">	
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">New Event</h3>
					</div>
					<div class="panel-body">
						<form action="events.php" method="POST" enctype="multipart/form-data">			
							<div class="form-group">
								<label>Page Title</label>
								<input type="text" class="form-control" placeholder="Page Title" name="title">
							</div>    					
							<div class="form-group">
								<label>Author</label>
								<input type="text" class="form-control" placeholder="Author" name="author">
							</div>
							<div class="form-group">
								<label>Upload an Image</label>
								<input class="form-control"  type="file" name="image">
							</div>
							<div class="form-group">
								<label>Post Content</label>
								<textarea name="content" class="form-control"></textarea>
							</div>				
							<div class="modal-footer">        
								<button type="submit" class="btn" value="Insert Event" name="submit">Insert Event</button>
							</div>
						</form>
					</div>
				</div>
		</div> 
	</body>
</html>

<?php
	$con=mysqli_connect("localhost","root","","sagarmatha");
	if(isset($_POST['submit'])){
		if ($_POST['title']=='' or $_POST['content']=='' or $_POST['author']==''){
			echo ("<script>alert('FILL All THE FIELDS')</script>");
			exit();
		}
		else{
			$title=$_POST['title'];
			$author=$_POST['author'];
			$content=$_POST['content'];
			$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];
			$image_size=$_FILES['image']['size'];
			$image_tmp=$_FILES['image']['tmp_name'];
			$path="../events_images/$image_name";
			$date=date('y.m.d');
			if ($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/PNG" or $image_type=="image/JPG" or $image_type=="image/JPEG"  ) {
				if ($image_size>=1) {			
					move_uploaded_file($image_tmp,$path);
				}
				else{
					echo ("<script>alert('Invalid file size, use higher size')</script>");
					exit();
				}

			}
			else{
				echo "<script>alert('Inavlid file type')</script>";
				exit();
			}

			$query="insert into events(title,author,image,content,date) values ('$title','$author','$image_name','$content','$date')";
			
			if (mysqli_query($con,$query)){
				echo ("<script>alert('Data has been inserted.')</script>");				
				echo ("<script>window.open('../admin/index.php?view=view','_self')</script>");
			}
		}	
	}	
?>