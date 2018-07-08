<?php
	$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
	$delete_id = $_GET['del'];
	$query = "DELETE FROM events WHERE id = '$delete_id'";
	if (mysqli_query($connect,$query)) {
		echo "<script>alert('Event has been deleted.')</script>";
		echo "<script>window.open('new.php?view=view','_self')</script>";
	} 
?>