<?php
session_start();
$exp=$_GET['exp'];
?>

<head>
<!-- The Primary External CSS style sheet. -->
<link rel="stylesheet" type="text/css" href="css/psd2css.css" media="screen" />

<!-- We use the jquery javascript library for DOM manipulation and
some javascript tricks.  We serve the script from Google because it's
faster than most ISPs.  Get more information and documentation
at http://jquery.com 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

<!-- All the javascript generated for your design is in this file -->
<script type="text/javascript" src="js/psd2css.js"></script>

<!--http://www.cssmenumaker.com/builder/menu_info.php?menu=057-->
<link type="text/css" rel="StyleSheet" href="menu/menu_style.css" />
<title>Theory - Virtual Lab in Image Processing</title>

</head>


<body>

  <!-- This is 'Backgound_bkgnd_center_jpg' -->
  <div id="Layer-1" class="Backgound_bkgnd_center_jpg"  >
    

    <!-- This is 'TopBar_jpg' -->
    <div id="Layer-3" class="TopBar_jpg"  >
      <img src="images/Layer-3.jpg" width="894" height="96" alt="TopBar" />
      <!-- This is 'IIIT' -->
      <div id="Layer-6" class="IIIT"  >
        <img src="images/iiit.png" width="100" height="70" alt="IIIT" class="pngimg" />
	</div>
	
			<div id="topMenu">
			<h1>VIRTUAL LAB in IMAGE PROCESSING</h1>
<div class="home">
<a href="dashboard.php">home</a>
</div>

			<div class="menu">
<ul>
<li><a href="objective.php?exp=<?php echo $exp; ?>" target="_self" >Objective</a>
</li>
<li><a href="intro.php?exp=<?php echo $exp; ?>" target="_self" >Introduction</a>
</li>
<li><sel><a href="theory.php?exp=<?php echo $exp; ?>" target="_self" >Theory</a></sel>
</li>
<li><a href="procedure.php?exp=<?php echo $exp; ?>" target="_self" >Procedure</a>
</li>
<li><a href="<?php echo $exp; ?>.php" target="_self" >Experiment</a>
</li>
<li><a href="#" target="_self" >Assessment</a>
				<ul>
					<li><a href="quiz.php?exp=<?php echo $exp; ?>">Quiz</a></li>
					<li><a href="assign.php?exp=<?php echo $exp; ?>">Assignment</a></li>
			   </ul>

</li><li><a href="references.php?exp=<?php echo $exp; ?>" target="_self" >References</a>
</li>
</ul>
</div>
</div>
<div class="experiment" style="text-indent: 20px; background-color: #FFFFFF;
color: white;" >
<?php 
include('./'.$_GET['exp'].'/theory.html');
?>
</div>
</body>
