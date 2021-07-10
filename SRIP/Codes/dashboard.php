<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/adminlte.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
		<!-- Morris chart -->
		<link rel="stylesheet" href="plugins/morris/morris.css">
		<!-- jvectormap -->
		<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<!-- Date Picker -->
		<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<!-- Google Font: Source Sans Pro -->
		
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Morphological Operations</title>
		<link rel="stylesheet" type="text/css" href="style.css">


	</head>
	<body id="bd" class="hold-transition sidebar-mini">


	<div class="wrapper">
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
	  <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="image.php" class="nav-link">Hasil</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="Comparison/index.php" class="nav-link">Comparison</a>
        </li>
		<li class="nav-item d-none d-sm-inline-block">
          <a href="QUIZ/Quiz.html" class="nav-link">Quiz</a>
        </li>
      </ul>
  
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <div class="dropdown-divider"></div>
          <a href="logout.php" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> Logout
            <span class="float-right text-muted text-sm"></span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
      </ul>
    </nav>
	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-1">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <!-- /.content-header -->
   
      <!-- Main content -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Virtual Lab</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Meutia Khanandiya</a>
          </div>
        </div>
  
        
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
		
		<div id="div1">
			<header class="shadow">
            <h1 class="text-shadow" id="title">
            VIRTUAL LAB BINARY IMAGE MORPHOLOGY
            </h1>
            <h4 class="text-shadow" id="subtitle">
                  Politeknik Negeri Malang
            </h4>
      </header>
		</div>
		<div class="container">
		<div class="fixed" >
					<div id="myModal" class="modal">
					  <div class="modal-content" >
					    <span class="close">&times;</span>
					    <h6 style="font-size: 20px;">Morphological Operations(Instructions)</h6>
					    <p><strong>The experiment is designed to understand and learn the morphological operations in the images.</strong></p>
					    <ol>
             					<li >
              						<p>You have to select an image from the grid by clicking on to it.</p>
            					</li>
             					<li>
                 				 	<p>Select one option from 'Dilation','Erosion','Closing'and 'Opening'.</p>
               			 		</li>
            			   		 <li>
                 				 	<p>Select options from 'Shape' and 'Size' of structuring elements properties.</p>
            			   		</li>
            			   		<li>
                 				 	<p>Select run option to perform the operations.</p>
            			    	</li>
     
            			 </ol>
              <h7><strong>Interesting Observations</strong></h7>
              <ol>
                <li>
                  <p>Select different size of structuring elements and observe the change in final output.</p>
                 </li>
              </ol>    
					  </div>
					</div>
					<br>
					<p id="p1"> Select Image :</p>
					<div class="img_grid">

            <div id="images" >

                <div class="item">
                    <img id="ed" crossOrigin="" class="imgpro"  src="https://i.ibb.co/fdCtZxN/2.png"  width="100" height="100"  onclick="im(1)" >
                </div>
                <div class="item">
                    <img id="ed1" crossOrigin="" class="imgpro" src="https://i.ibb.co/MydMTD2/3.png" width="100" height="100"  onclick="im(2)">
                </div>
                <div class="item">
                    <img id="ed2" crossOrigin="" class="imgpro" src="https://i.ibb.co/xjhgbFM/1.png" width="100" height="100" onclick="im(3)">
                </div>
               
            </div>
		</div>
		
        <button id="myBtn" class=" button button5" ><strong>Instructions</strong></button>				
				<button id="b2" class="button button3" onClick="window.location.reload()" ><strong>Reset</strong></button>
				<button   class="button button1" id="check" onclick="show();" ><strong>Run</strong></button>
		</div>
			
	
		<div class="flex-item"  style="border-style: solid; color:  #343a40 ;">
			   <div class=" inputoutput" align="center" style="margin: auto;margin-top: 6%;  margin-left: auto;">
          <p><strong>Input Image</strong></p>
					<div  id="div4"  >
						<img id="imageSrc" crossOrigin="" alt="" src=""  />
    						<canvas id="canvasInput" width="300" height="300"></canvas> 
    					<div class="caption" ></div>
  					</div>
  				</div>
  			
  			<div class=" inputoutput" align="center" style="margin: auto;margin-top: 6%;  margin-left: auto;">
          <p id="write1"><strong>Output Image</strong></p>
  			<div id="div5">
   				 <canvas id="canvasOutput" style="display: none;" width="300" height="300"></canvas>
   					 <div class="caption"></div>


  			</div>
  			
        </div>
  			
  		</div>
  			
		</div>
		
		</div>

			
				<div align="center" id="div3">
					<h1 style="font-size: 16px; text-align: center;">Select Operations :</h1>
					<hr style="margin-left:8%;margin-right: 8%;">
						<label class="container3">Dilation
  							<input type="radio"  name="radio" value="dilation" >
  							<span class="checkmark3"></span>
						</label>
						<label class="container3">Erosion
  							<input type="radio" name="radio" value="erosion"  >
  							<span class="checkmark3"></span>
						</label>
						<label class="container3">Opening
  							<input type="radio" name="radio" value="opening" >
  							<span class="checkmark3"></span>
						</label>
						<label class="container3">Closing
  							<input type="radio" name="radio" value="closing" >
  							<span class="checkmark3"></span>
						</label>
						</div>
					
						
				<div id="box" >
					<h2 style="font-size: 16px; margin-top: 2%;">Structuring Element Properties:</h2>
				<div id="al" >
							<h1 style="font-size: 16px; text-align: center;">Shapes:</h1>
					<hr style="margin-left:8%;margin-right: 8%;">
						<label class="container1">Ellipse
  							<input type="radio"  name="radio1" value="elliptical">
  							<span class="checkmark1"></span>
						</label>
						<label class="container1">Rectangle
  							<input type="radio" name="radio1" value="Square">
  							<span class="checkmark1"></span>
						</label>
						<label class="container1">Cross
  							<input type="radio" name="radio1" value="Line">
  							<span class="checkmark1"></span>
						</label>
				</div>
				<div id="al1">
							<h1 style="font-size: 16px; text-align: center;">Size:</h1>
					<hr style="margin-left:8%;margin-right: 8%;">
						<label class="container2">3x3 pixels
  							<input type="radio"  name="radio2" value="3">
  							<span class="checkmark2"></span>
						</label>
						<label class="container2">5x5 pixels
  							<input type="radio"  name="radio2" value="5">
  							<span class="checkmark2"></span>
						</label>
						<label class="container2">7x7 pixels
  							<input type="radio"  name="radio2" value="7">
  							<span class="checkmark2"></span>
						</label>
				</div>
				</div>
		

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script async src="../Libraries/opencv.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="MOper.js"></script>	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>