<?php
$result = exec("python trail_knn.py C:\xampp\htdocs\sketch\knn\trail_knn.py");
$result_array = json_decode($result);

function array_flatten($array = null) {
    $result = array();

    if (!is_array($array)) {
        $array = func_get_args();
    }

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        } else {
            $result = array_merge($result, array($key => $value));
        }
    }

    return $result;
}
$arr = array_flatten($result_array);
$neb = [];
foreach($arr as $key => $value){
    $neb [$key] = $value;
}
$var1 = $neb[2];
$var2 = $neb[5];
$var3 = $neb[8];
// print $var1;
// print $var2;
// print $var3;
#spliting string to extract image name
$arr_var = explode("_",$var1);
$var11 = $arr_var[0];
$arr_var1 = explode("_",$var2);
$var12 = $arr_var1[0];
$arr_var2 = explode("_",$var3);
$var13 = $arr_var2[0];
$all_res = array($var11,$var12,$var13);

$apple = 0; 
$banana = 0;
$grapes = 0 ;
$bulb = 0;
$clock = 0;
foreach($all_res as $key => $value){
    if($value == "apple"){
        $apple ++;
    }elseif($value == "grape"){
        $grapes ++;
    }elseif($value == "banana"){
        $banana ++;
    }elseif($value == "bulb"){
        $bulb ++;
    }elseif($value == "clock"){
        $clock ++;
    }
    
}
if($apple > 1){
    $cat = 'apple';
}elseif($grapes > 1){
    $cat = 'grape';
}elseif($banana > 1){
    $cat = 'banana';
}elseif($bulb > 1){
    $cat = 'bulb';
}elseif($clock > 1){
    $cat = 'clock';
}else{
    $cat = 'UNDIFINED';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		
  <style>
        .form-container[type ="button"]
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
 .form-container[type ="button"]:hover{
    background: #2ecc71;
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
        .bg{
    background: url('images/sunset.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center fixed; 
    
   
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
  </style>
</head>
<body>


<div class="container-fluid">
  <div class="row content">
    <div class="col-lg-4 ">
      <div class="upload">
    <?php
          echo '<div class="fixed">';
          echo '<div class="col-sm-4"></div>
          <div class="col col-lg-4" style="position: fixed-top; background-color: #ffffff; height: 575px; width:300px;  margin-top: 30px; border-radius: 5px; border-top: 5px solid; border-top-color: red; border-bottom: 10px solid; border-bottom-color: #5352ed; box-shadow: 1px 1px 10px; ">';
          echo '<br>';
          echo '<center>';
          /** echo "hello";*/
          // Name and Nickname
          // Profile Info & View
          echo '<form method="post" action=""  enctype="multipart/form-data">
                
                <h1> Input Image </h1>
                <br>
                <div class="form-group">
                <center><br><img src="data/original.jpg" id="preview" height="200px" width="200px"></center>
                </div>
                <a href="index.php"><input class="form-container" type="button" name="submit" value ="home" style="position: fixed-left; color: black; font-size:18px">
                </a>
                  <br><br>
                </form>';
          $width = '168px';
          $height = '168px';
          echo '</center>'; 
          
          echo '</div>';
          echo '</div>';
          
          
          ?>
          
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
            </div>
    </div>
    
    <div class="col-sm-8">
      <div class="well well-lg">
      
         <div class="row">
         <center><h1> CLASS : <?php print($cat);?></h1></center>
         <center>
         <?php 

            $res = "dataset/" . $var1;
            #echo $res;
              echo '
              <img src="'. $res . '" id="preview" height="200px" width="200px">
              
              ';
         ?></center>
         <br>
         </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="well1">
                <?php 
                    $res = "dataset/" . $var2;
                    #echo $res;
                     echo '
                    <img src="'. $res . '" id="preview" height="200px" width="200px">
              
                    ';
                ?>
                </div>
            </div>
             <div class="col-sm-6">
                <div class="well1">
                <?php 
                 $res = "dataset/" . $var3;
                #echo $res;
                 echo '
                <img src="'. $res . '" id="preview" height="200px" width="200px">
              
                ';
                ?>
                </div>
             </div>
        </div>
      </div>
     
        
</div>
</div>
</div>
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
    </script>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if (isset($_POST['post']))
        {
        $filename = basename($_FILES["fileUpload"]["name"]);
        $filetype = pathinfo($filename, PATHINFO_EXTENSION); // get file extension and check its type.
        if($filetype != "png" && $filetype != "jpg" && $filetype!= "jpeg" && $filetype != "gif"){
            echo 'Only JPG, JPEG, PNG & GIF formats are allowed.';
        }
        if(exif_imagetype($_FILES["fileUpload"]["tmp_name"])){ // Check if the file is actually an image.
            
                $filepath = "input/original.jpg" ;
                if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $filepath)){
                    echo '<script>'.'alert("Successfully Registered. You can login now");'.'</script>';
                }else{
                  echo '<script>'.'alert("failed");'.'</script>';
                }
        }
    }
}
?>
*/