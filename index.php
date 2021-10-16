<?php



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/png" href="images/icon.png">
		<link rel="stylesheet" herf="css/main.css" >
		<link rel="stylesheet" href="css/style.css">

<style>
	#app{
		margin-left:300px;
	}
		.logo img
		{
			width: 100px;
			height: auto;
			float: left;
			margin: 10px;
		}
		.post,
		.createpost {
			
			box-shadow: 0 0 5px #4267b2;
			margin: auto;
			width: 650px;
			padding: 10px 16px;
			overflow: auto;
		}
		i:hover{
			color:blue;
		}
		li a:hover{
			color: red;
		}
		.none{
			
			background-color: #99ccff;
			background-image: url("images/b1.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		
		}
		.rex{
			background: transparent;
		}
    .box{
        margin-top:-600px;
       margin-left:350px;
        width :575px;
        height: 575px;
        padding:30px;
        background: rgba(0,0,0,.8);
        -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
      box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        border-radius: 10px; 
    }
		</style>

	</head>
	<body class="none">
	
  <header>
        <div class="row">
        <center> <a href="index.php"><h1 style="color:red;">Sketch Recognition for Image Classification and Retrieval</h1></a> </center>
            
         </div>
            </header>
		<div id="app">		
		

			<div class="app-content">
				
    
						
			
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="rex">
							<div class="container-fluid " style="margin-top:80px;">
              <center><h2 style="margin-left:-300px; "> Select the Processing Method </h2></center>
							<div class="row">
								<div class="col-sm-4" style=" background: rgba(0,0,0,.5);">
									<div style="margin-top:20px; " class="panel  no-radius text-center">
										<div  class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fas fa-layer-group fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">1.Using KNN Method</h2>
											
											<p style="font-size: 25px;font-weight: bold;" class="links cl-effect-1">
											<a href="knn/index.php">
											KNN
	
												</a>
											</p>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4" style="margin-left:30px; background: rgba(0,0,0,.5);">
									<div style="margin-top:20px;" class="panel  no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fab fa-bandcamp fa-stack-1x fa-inverse""></i></span>
											<h2 class="StepTitle">2. Using Sift Method</h2>
											
											<p style="font-size: 25px; font-weight:bold;" class="links cl-effect-1">
									
													<a href="sift/index.php">
											
											SIFT
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
			
					
					
						
						
					</div>
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	
			<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
