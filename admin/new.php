<html>
	<head> 
		<title>View Events</title>	
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
		<div class="col-lg-9">
			<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
					<h3 class="panel-title"> Posts</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Title</th>
								<th>Date</th>
								<th>Author</th>
								<th>Image</th>
								<th>Content</th>
								<th>Edit Post</th>
								<th>Delete Post</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
								$i=1;
								$query = "SELECT * FROM events ORDER BY 1 DESC";
								$result = mysqli_query($connect,$query);

								while ($row = mysqli_fetch_array($result)) {
									$id = $row['id'];
									$title = $row['title'];
									$image = $row['image'];
									$content = substr($row['content'],0,400);
									$author = $row['author'];
									$date = $row['date'];

							?>
							<tr align="center">
								<td><?php echo $i++; ?></td>
								<td><?php echo $title; ?></td>
								<td><?php echo $date; ?></td>
								<td><?php echo $author; ?></td>
								<td><center><img src="../student_image/<?php echo $image;?>" width="50" height="50"/></center></td>
								<td><?php echo $content; ?></td>
								<td><a href="edit.php?edit=<?php echo $id;?>">Edit</a></td>
								<td><a href="delete.php?del=<?php echo $id;?>" onclick="return confirm('Do you want to delete this event?')">Delete</a></td>
							</tr>
							<?php 
								}
							?>												
						</tbody> 
					</table>
				</div>
			</div>
		</div>
	</body>
</html>