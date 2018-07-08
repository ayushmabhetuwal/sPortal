<?php
	session_start();
	if (isset($_SESSION['user_name'])) {
		$user_name = $_SESSION['user_name'];
	?>
	<html>
		<head>
			<title>Admin Dashboard Panel</title>	
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
							<h3 class="panel-title">Website Overview</h3>
						</div>
						<div class="panel-body">
							<div class="col-md-3 ">		
								<?php 
									$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
									$sql = "SELECT * FROM events";
									$run = mysqli_query($connect, $sql);
									$total_events = mysqli_num_rows($run);
								?>
								<div class="well dash-box main-color-bg">
									<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $total_events;?></h2>
									<h4>Events</h4>
								</div>								
							</div>
							<div class="col-md-3">
								<?php 
									$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
									$sql = "SELECT * FROM students";
									$run = mysqli_query($connect, $sql);
									$total_users = mysqli_num_rows($run);
								?>
								<div class="well dash-box main-color-bg">
									<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $total_users;?></h2>
									<h4>Profiles</h4>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well dash-box main-color-bg">
									<h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 3</h2>
									<h4>Notes</h4>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well dash-box main-color-bg">
									<h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
									<h4>Assignments</h4>
								</div>
							</div>				
						</div>
					</div>
				<div class="panel panel-default">                
					<div class="panel panel-default">
						<div class="panel-heading main-color-bg">
							<h3 class="panel-title">Latest Posts</h3>
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
									<th>Edit</th>	
									<th>Delete</th>				
								</tr>
							</thead>
							<tbody> 										
								<?php 
									$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
									$i=1;
									$query = "SELECT * FROM events ORDER BY 1 DESC LIMIT 5";
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
									<td><center><img src="../events_images/<?php echo $image;?>" width="50" height="50"/></center></td>
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
<?php
}
else {
	header('Location:login.php');
}
?>