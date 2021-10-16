<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if (isset($_POST['post']))
        {
        $filename = basename($_FILES["fileUpload"]["name"]);
        $filetype = pathinfo($filename, PATHINFO_EXTENSION); // get file extension and check its type.
        if($filetype != "png" && $filetype != "jpg" && $filetype!= "jpeg" && $filetype != "gif"){
            echo '<script>'.'alert("Only JPG, JPEG, PNG & GIF formats are allowed.");'.'</script>';
        }
        if(exif_imagetype($_FILES["fileUpload"]["tmp_name"])){ // Check if the file is actually an image.
            
                $filepath = "data/original.jpg" ;
                if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $filepath)){
                  $result = exec("python input_query.py C:\xampp\htdocs\sketch\colored_img\input_query.py");
                  $result_array = json_decode($result);
                  if($result_array){
                    header("location:home.php");
                  }else{
                    echo '<script>'.'alert("failed: close all cvs file");'.'</script>';
                  }
                }else{
                  echo '<script>'.'alert("failed");'.'</script>';
                }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sketch </title>
       <link rel="stylesheet" href="css/style.css">
         <link rel="shortcut icon" type="image/png" href="images/icon.png">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxedn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        
  <style>

		.logo img
		{
			width: 100px;
			height: auto;
			float: left;
			margin: 10px;
		}
		.post,
		.createpost {
			background-color: white;
			box-shadow: 0 0 5px #4267b2;
			margin: auto;
			width: 650px;
			padding: 10px 16px;
			overflow: auto;
        }
        i:hover{
			color:blue;
		}
        .ab{
            margin-top:30px;
            margin-left: 100px;
            padding-top: 10px;
        }
       
        #imagefile
        {
            display: none;
        }
   
}
     </style>

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
    .upload{
      margin: 5px;
      padding: 20px;
      height: 575px;
      float: left;
    }
    .well{
        float: right;
        height: 575px;
        width: 950px;
        background-color: aqua;
    }
    .well1{
        height: 200px;
        
    }
    .well2{
        height: 600px;
        width:200px;
        border-block-start-color: black;        
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
    .box1{
      border: 1px solid #000;
      -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
      box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
    }
    .form-container[type ="submit"]
  {
    border:0;
    background: none;
    display: block;
    text-align: center;
    padding: 14px 40px;
    margin: 20px auto;
    border: 2px solid #2ecc71;
    width: 200px;
    height: 50px;
    outline: none;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
    color: white;
  }
 .form-container[type ="submit"]:hover{
    background: #2ecc71;
  }

    .bg{
    background: url('images/user2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center fixed; 
    }
  </style>
</head>
<body>


<div class="container-fluid">
            <div class="bg"></div>
            <div class="row">
               
                <div class="col-md-8 col-sm-8 col sm-8">
    <?php
          /** echo "hello";*/
          // Name and Nickname
          // Profile Info & View
          echo '<center><form class ="box" method="post" action=""  enctype="multipart/form-data">
                
                <h1 style="color:white;"> INSERT IMAGE </h1>
                <br>
                <div class="form-group">
                <center><img src="" id="preview" height="300" width="300" style="display:none;"></center>
                </div>
                <div class="form-group">
    
                        <label for="imagefile" class="btn btn-primary"><i class="fas fa-image fa-lg"> browse image </i></label><input type="file" name="fileUpload" id="imagefile" required> 
                        
                </div>
               <br>
                   <center> <input class="form-container" type="submit" style="position: fixed-left; font-color: white;font-size:18px" class="btn btn-success" value="SEARCH" name="post"></center>
            </form>';
         
          
          
          ?>
          </div>
  </div>
  </div>
          
            <style type="text/css">
              .list ul li {
                display: inline-block;
                      margin:10px;
                      
                
              }
                  .fixed {
                          position: fixed;
                          margin-top:-50px;
                          
                          
                  }
              
            </style>
   

<script src="resources/js/jquery.js"></script>
    <script>
        // Invoke preview when an image file is choosen.
        $(document).ready(function(){
            $('#imagefile').change(function(){
                preview(this);
            });
        });
        // Preview function
        function preview(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (event){
                    $('#preview').attr('src', event.target.result);
                    $('#preview').css('display', 'initial');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
      
    </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
</body>
</html>
