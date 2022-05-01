<?php
  include('database.php');
  $msg="";
  if(isset($_POST['submit']))
   {
    $name=$_POST['name'];
    $enroll=$_POST['enroll'];
    $email=$_POST['email'];
    $title=$_POST['title'];
    $introduction=$_POST['introduction'];
    $filename = $_FILES["ppt"]["name"];
    $tempname = $_FILES["ppt"]["tmp_name"];    
    $folder = "uploads/".$filename;
    $filename1 = $_FILES["word"]["name"];
    $tempname1 = $_FILES["word"]["tmp_name"];    
    $folder1 = "uploads/".$filename1;
    $url=$_POST['url'];
    $query1="INSERT INTO `projectsubmission`(`name`, `enroll_no`, `email`, `title`, `introduction`, `ppt`, `word`, `url`) VALUES ('$name',' $enroll','$email','$title','$introduction','$filename','$filename1','$url')";
    $run=mysqli_query($con,$query1);
    if($run){
        $msg="Thanks,Your response has been submitted ";
    }

     
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
                    <label class="control-label col-sm-4 required"  >Name</label>
                    <div class="col-sm-8"><input type="text" placeholder="Full Name" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" >Enrollment No</label>
                    <div class="col-sm-8"><input type="text"placeholder="Enroll number" class="form-control" name="enroll" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required"  >Email</label>
                    <div class="col-sm-8"><input type="Email"placeholder="Email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" >Project Title</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="title" placeholder="Enter project title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4"  >Brief Introduction About Project</label>
                    <div class="col-sm-8"><textarea  class="form-control" name="introduction" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" >Project Ppt</label>
                    <div class="col-sm-8"><input type="file" name="ppt"  class="form-control" id="ppt"required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4  required" >Project Report</label>
                    <div class="col-sm-8"><input type="file" name="word"  class="form-control" id="word"required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required" > Github URL</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="url" placeholder="Enter Github URL" required>
                    </div>
                </div>    
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8"><button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
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