<?php
 error_reporting(0);
 include_once("database.php");
 $query="select * from projectsubmission";
 $result=mysqli_query($con,$query);
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
    <title>Project submited list</title>
  </head>
   <body>
    <div class="table-responsive">
     <table class ="reg register"align="center" border="1px" style="width: 1000px; line-height 500px;">
      <tr>
        <th colspan="9"><h1>List of Project submitted</h1></th>
      </tr>
       <tr>
        <th> #</th>
        <th>Name</th>
        <th>Enroll No</th>
        <th>Email</th>
        <th>Title</th>
        <th>Project Introduction</th>
        <th>PPT</th>
        <th>Word</th>
        <th>URL</th>
      </tr>
       <?php
        while($rows=mysqli_fetch_assoc($result))
        {
       ?>
       <tr>
       <td><?php echo $rows['no'] ?></td>
       <td><?php echo $rows['name'] ?></td>
       <td><?php echo $rows['enroll_no'] ?></td>
       <td><?php echo $rows['email'] ?></td>
       <td><?php echo $rows['title'] ?></td>
       <td><?php echo $rows['introduction'] ?></td>
       <td><a href="uploads/<?php echo $rows['ppt'] ?>"><?php echo $rows['ppt'] ?></a></td>
       <td><a href="uploads/<?php echo $rows['word'] ?>"><?php echo $rows['word'] ?></a></td>
       <td><a href="<?php echo $rows['url'] ?>"><?php echo $rows['url'] ?></a></td>
       </tr>
        <?php
        }
        ?>
     </table>
    </div>
  </body>
 </html>