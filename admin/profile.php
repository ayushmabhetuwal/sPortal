<html>
    <head> 
        <title>Profiles</title>	
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
                    <h3 class="panel-title"> Profiles</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Batch</th>
                                    <th>Image</th>													
                                    <th>Gender</th>
                                    <th>Registration Date</th>													
                                </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $connect = mysqli_connect("localhost", "root", "", "sagarmatha");
                                $i=1;
                                $query = "SELECT * FROM students ORDER BY 1 DESC";
                                $result = mysqli_query($connect,$query);

                                while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['id'];
                                    $name = $row['user'];
                                    $email = $row['email'];
                                    $batch = $row['batch'];
                                    $image = $row['imagename'];	
                                    $gender = $row['gender'];
                                    $date = $row['registerdate'];
                            ?>
                            <tr align="center">
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $batch; ?></td>		
                                <td><center><img src="../events_images/<?php echo $image;?>" width="50" height="50"/></center></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $date; ?></td>		
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