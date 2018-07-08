<html>
	<head>
		<title> Edit </title>
			<link rel ="stylesheet" href= "../bootstrap/css/bootstrap.css" >
			<script src ="../jquery.js"> </script>
			<script src ="../bootstrap/js/bootstrap.js"></script>
			<link rel="stylesheet" href="stylee.css" >
			<script> CKEDITOR.replace( 'editor1' ); </script>			
	</head>	
	<body>
		<?php include 'includes/header.php'?>
		<div class="clearfix"></div>
		<div>
		<div style="width:50px; height:50px;"></div>
		<div>	 
			<?php include 'includes/sidebar.php'?>
		</div>
		<?php
			$connect = mysqli_connect("localhost", "root", "", "sagarmatha");				
			$edit_id = @$_GET['edit'];	
			$query = "SELECT * FROM events WHERE id='$edit_id'";
			$result = mysqli_query($connect,$query);
			while ($row = mysqli_fetch_array($result)) {
				$edit_id1 = $row['id'];
				$title = $row['title'];
				$image = $row['image'];
				$content = $row['content'];
				$author = $row['author'];
				$date = $row['date'];
		?>
		<div class="col-lg-9">
			<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
					<h3 class="panel-title">New Event</h3>
				</div>
				<div class="panel-body">
					<form action="../admin/edit.php?edit_form=<?php echo $edit_id1; ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Page Title</label>
								<input type="text" class="form-control" placeholder="Page Title" name="title" value="<?php echo $title; ?>">
						</div>   			
						<div class="form-group">
							<label>Author</label>
								<input type="text" class="form-control" placeholder="Author" name="author" value="<?php echo $author; ?>" >
						</div>
						<div class="form-group">
							<label>Upload an Image</label>
							<input class="form-control"  type="file" name="image">
							<img src="../events_images/<?php echo $image; ?>" width="100" height"100">
						</div>
						<div class="form-group">
							<label>Post Content</label>
							<textarea name="content" class="form-control" ><?php echo $content; ?></textarea>
						</div>
						<div class="modal-footer">        
							<button type="submit" class="btn btn-primary" value="Insert Event" name="update">Update Event</button>
						</div>
		<?php
			} 
		?>			</form>
				</div>
			</div>
		</div>
	</body>
</html>

<?php
	if(isset($_POST['update']))
	{
		$update_id = $_GET['edit_form'];
		$post_title = $_POST['title'];
		$post_date = date('y-m-d');
		$post_author = $_POST['author'];
		$post_content = $_POST['content'];
		$post_image = $_FILES['image']['name'];
		$post_image_type = $_FILES['image']['type'];
		$post_image_size = $_FILES['image']['size'];
		$post_image_tmp = $_FILES['image']['tmp_name'];
		$path="../events_images/$post_image";
		move_uploaded_file($post_image_tmp, destination);
		$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
		$query="UPDATE events set title = '$post_title', author = '$post_author', image = '$post_image', content = '$post_content', date = '$post_date' WHERE id = '$update_id'";
		if (mysqli_query($connect,$query)) {			
			echo "<script>alert('Event has been updated.')</script>";
			echo "<script>window.open('index.php?view=view','_self')</script>";
		}
	}
?>