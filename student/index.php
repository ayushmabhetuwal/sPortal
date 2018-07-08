	<!DOCTYPE HTML>
<html>
  <head>
    <title>Admin Panel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/> 
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <style>
    #chartdiv {
      width: 100%;
      height: 295px;
    }
    </style>
      <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
         <script>
           $(document).ready(function() {
            $("#owl-demo").owlCarousel({
            items : 3,
            lazyLoad : true,
            autoPlay : true,
            pagination : true,
            nav:true,
            });
           });
          </script>
  </head> 
  <body class="cbp-spmenu-push">
    <div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"> sPortal</a></h1>
    </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
           <li class="treeview">
            <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Events</span>                
               </a>

            <li class="treeview">
              <a href="anyorphp.html">
              <i class="fa fa-pie-chart"></i>
              <span>Announcements</span>
              <span class="label label-primary pull-right">new</span>
              </a>
            </li>

              
            <li>
              <a href="widgets.html">
              <i class="fa fa-th"></i> <span>Notes</span>
              <small class="label pull-right label-info">08</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i> <span>Assignments</span>               
            </a>
            </li>
            <li class="treeview">
               <a href="#">
               <i class="fa fa-table"></i> <span>Teachers</span>               
            </a>         
            <li class="treeview">
              <a href="#">
              <i class="fa fa-folder"></i> <span>Notifications</span>               
               </a>             
          </div>
       </nav>
    </aside>
	</div>
			<div class="sticky-header header-section ">
			<div class="header-left">
			<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<div class="profile_details_left">
					<ul class="nofitications-dropdown">			 
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
            </li>            
          </ul>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">
              
        <div class="search-box">
          <form class="input">
            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
            <label class="input__label" for="input-31">
              <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
              </svg>
            </label>
          </form>
        </div>     

        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    </div>

      <div id="page-wrapper">
      <div class="main-page">
      <div class="col_3">                         
          <div class="clearfix"> </div> 

    <div class="row-one widgettable">
      <div class="col-md-9 content-top-2 card">
        <div class="agileinfo-cdr">
          <div class="card-header">
                        <h3>Events</h3>
            </div>       
            	
            <div id="Linegraph" style="width: 100%; height: 350px">
            </div>
            
        </div>

        </div>
      <div class="col-md-3 stat">
        <div class="content-top-1">
        <div class="col-md-6 top-content">
          <h5>Recents</h5>
          <label>Assignment Questions</label>
        </div>

          <div class="col-md-6 top-content1">    
          <div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
        <div class="col-md-6 top-content">
          <h5>Activity</h5>
          <label>Feedback</label>
        </div>

        <div class="col-md-6 top-content1">    
          <div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
          <div class="col-md-6 top-content">           
            <label>Calender</label>
          </div>
          <div class="col-md-6 top-content1">    
            <div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
          </div>
           <div class="clearfix"> </div>
          </div>

       
      </div>
      <div class="col-md-2 stat">                
      </div>
      <div class="clearfix"> </div>
    </div>   
    </div>

  <div class="footer">
     <p>&copy; Sagarmatha College of Science and Technology. All Rights Reserved | By <a href="https://sagarmatha.edu.com.np/" target="_blank">quadCoders</a></p>   
  </div>
  </div>