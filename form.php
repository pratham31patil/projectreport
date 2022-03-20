<?php
include('database.php');
<<<<<<< HEAD
$msg="";
=======

>>>>>>> b13ec8220db868164d3542c8eeb8d849733dc314
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$members=$_POST['members'];
$filename = $_FILES["ppt"]["name"];
    $tempname = $_FILES["ppt"]["tmp_name"];    
        $folder = "uploads/".$filename;
 $filename1 = $_FILES["word"]["name"];
  $tempname1 = $_FILES["word"]["tmp_name"];    
         $folder1 = "uploads/".$filename1;


$url=$_POST['url'];
<<<<<<< HEAD
  $query1="INSERT INTO `projectsubmission`(`title`, `members`, `ppt`, `word`, `url`) VALUES ('$title','$members','$filename','$filename1','$url')";
  $msg="Thanks,Your response has been submitted ";
=======
  $query1="INSERT INTO `projectsubmission`(`title`, `members`, `ppt`, `word`, `url`) VALUES ('$title','$members','$folder','$folder1','$url')";
>>>>>>> b13ec8220db868164d3542c8eeb8d849733dc314
  $run=mysqli_query($con,$query1); 
   move_uploaded_file($tempname, $folder);
    
move_uploaded_file($tempname1, $folder1);
  
 

	 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css"> 
    <title>Form</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row register">
            <h1>Project Submission Form</h1>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 reg">
                <form class="form-horizontal hr" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="title">Project Title :</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="title" name="title" placeholder="Enter project title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="title" >Project Members :</label>
                    <div class="col-sm-8"><textarea placeholder="Group members ID-Name" class="form-control" id="members" name="members" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="title">Project Ppt :</label>
                    <div class="col-sm-8"><input type="file" name="ppt"  class="form-control" id="ppt"required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="title">Project Report :</label>
                    <div class="col-sm-8"><input type="file" name="word"  class="form-control" id="word"required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="title">Project Github URL :</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="url" name="url" placeholder="Enter Github URL">
                    </div>
                </div>    
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8"><button type="submit" name="submit" class="btn btn-success">Submit</button>
                    <span style="color:green;"><?php echo $msg?></span>
                </div>
                
                 </form>
                 <script>
	  if(window.history.replaceState){
		  window.history.replaceState(null,null,window.location.href);
	  }
	  </script>
</div>
</div>
</div>
</body>
</html>