<?php
include("admin/db.php");
@$get=$_GET['name'];
?>
<!doctype html>
<head>
  <title>institute profile</title>
  <link href="style/bootstrap.min.css" rel="stylesheet" />
  <link href="style/institutes.css" rel="stylesheet" />

</head>

<body>
    
    <div class="container-default"  >
            <style>

.bg-img {
  background-image: url("blur-child-classroom-256468.jpg");

  min-height: 380px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}
</style>
  <header>
    <img src="header-managerCoach.jpg" alt="Header" height=100dp width=100% />
  </header>
  <nav class="nav">
    <li class="nav-items offset-4">
      <a href="index.php">Home </a> |
      <a href="institutes.php">Top institutes </a>|
      <a href="contact.php">Contact us </a>|
      <a href="login.php">Login </a>|
      <a href="signup.php">Signup </a>
    </li>
  </nav>
<div class="bg-img" style="padding:100px;"   
<div class="jumbotron" style="min-height:600px">
<?php
         if($get)
         {
            $select="select * from coaching where instituteName like '%$get%'";
            $select_run=mysqli_query($con,$select);
            $count=mysqli_num_rows($select_run);
            if($count>0)
            {
            while($row=mysqli_fetch_array($select_run))
                   {
                    $id=$row['id'];
                    $name=$row['instituteName'];
                    $img=$row['images'];
                    $address=$row['instituteAddress'];
                    $description=$row['description'];
                    $contactNo=$row['contactNo'];
                    $email=$row['email'];
                    $sCourses=$row['secondryCourses'];
                    $hCourses=$row['higherSecondryCourses'];
                    $cCourses=$row['competitiveCourses'];
                    ?>
              <div  class="institutes">
    <img src="<?php echo $img ?>" alt="<?php echo $name ?>" width=200dp height=150dp>
    <div style="float:right">
    <p ><?php echo $name ?></p><br>
    <p ><?php echo $address ?></p><br>
    <a href="result.php" >read more</a>
</div>
</div>
  <?php 
         }
         }
         
         else
         {
             echo "<center>no post available</center>";
         }
         }
         ?>
         </div>
         </div>
         
  <footer>
    <p>All Rights Reserved by Coaching founder</p>
  </footer>
  </div>
  </body>
