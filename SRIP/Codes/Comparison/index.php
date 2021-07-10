<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="../dist/css/adminlte.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
		<!-- Morris chart -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">
		<!-- jvectormap -->
		<link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<!-- Date Picker -->
		<link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<!-- Google Font: Source Sans Pro -->
		
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Morphological Operations</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Resemble.js : Image analysis</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="libs/twitter-bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="demoassets/resemble.css?v1">

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
          <a href="../dashboard.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../image.php" class="nav-link">Hasil</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Comparison</a>
        </li>
		<li class="nav-item d-none d-sm-inline-block">
          <a href="../QUIZ/Quiz.html" class="nav-link">Quiz</a>
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
      <a href="../dashboard.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Virtual Lab</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Meutia Khanandiya</a>
          </div>
        </div>
  
        
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
		<body>
	<div class="container">
			<header>
				<div class="page-header">
					<h1>Binary Image Morphology Comparison</h1>
				</div>
			</header>

			<section role="main">
				<div class="row">
					<div class="span12">
						<div class="hero-unit">
							<div class="row">
								<div class="span6">
									<p>
										<div id="drop-zone" class="drop-zone">
											Drop image here.
										</div>
									</p>
								</div>
								<div class="span4">
									<h2>What is this?</h2>
									<p>
										Binary Image Morphology analyses and compares images with HTML5 canvas and JavaScript.
									</p>
									<p>
										<strong>Try it for yourself.</strong>
									</p>
									<div id="image-data" style="display:none">

										
										Black &amp; white
										<div class="progress">
											<div id="black" class="bar" style="width: 0%;"></div>
										</div>
										<div class="progress last">
											<div id="white" class="bar" style="width: 0%;"></div>
										</div>
									 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span6">
								<div id="dropzone1" class="small-drop-zone">
									Drop first image
								</div>
								<div id="dropzone2" class="small-drop-zone">
									Drop second image
								</div>
							</div>
							<div class="span6">
								<h2>Compare two images?</h2>
								<p>
									Drop two images on the boxes to the left.  The box below will show a generated 'diff' image, pink areas show mismatch.  This example best works with two very similar but slightly different images.  Try for yourself!
								</p>
								<p>
								Don't have any images to compare?
								<br />
								<br />
								<button class="btn" id="example-images">Use example images</button>
								<br />
								<br />
								<button class="btn" id="example-images-alpha">Use example images with alpha</button>
								</p>
								<div id="image-diff" class="small-drop-zone">
									Diff will appear here.
								</div>
								<br/>

								<div class="btn-group buttons" style="display:none">
									<button class="btn" id="raw">Ignore nothing</button>
									<button class="btn active" id="less">Ignore less</button>
									<button class="btn" id="colors">Ignore colors</button>
									<button class="btn" id="antialiasing">Ignore antialiasing</button>
									<button class="btn" id="alpha">Ignore alpha</button>
								</div>

								<br/>
								<br/>
								<div class="btn-group buttons" style="display:none">
									<button class="btn active" id="original-size">Use original size</button>
									<button class="btn" id="same-size">Scale to same size</button>
								</div>

								<div class="btn-group buttons" style="display:none">
									<button class="btn active" id="pink">Pink</button>
									<button class="btn" id="yellow">Yellow</button>
								</div>
								<br/>
								<br/>

								<div class="btn-group buttons" style="display:none">
									<button class="btn active" id="flat">Flat</button>
									<button class="btn" id="movement">Movement</button>
									<button class="btn" id="flatDifferenceIntensity">Flat with diff intensity</button>
									<button class="btn" id="movementDifferenceIntensity">Movement with diff intensity</button>
									<button class="btn" id="diffOnly">Diff portion from the input</button>
								</div>
								<br/>
								<div id="diff-results" style="display:none;">
									<p>
										<strong>The second image is <span id="mismatch"></span>% different compared to the first.
										<span id="differentdimensions" style="display:none;">And they have different dimensions.</span></strong>
									</p>
									<p>
										Use the buttons above to change the comparison algorithm.  Perhaps you don't care about color? Annoying antialiasing causing too much noise?  Resemble.js offers multiple comparison options.
									</p>
								</div>

								<p id="thesame" style="display:none;">
									<strong>These images are the same!</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
</body>
				<br/><br/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="resemble.js"></script>
		<script src="demoassets/main.js"></script>		

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script async src="../Libraries/opencv.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="MOper.js"></script>	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>