<?php
 include("admin/db.php");
 include("session.php");
 @$get=$_GET['email'];
  $sql = "SELECT * FROM coaching WHERE email='$get'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);
     
          $instituteName=$row['instituteName'];
          $instituteAddress=$row['instituteAddress'];
          $contactNo=$row['contactNo'];
          $email=$row['email'];
          $images=$row['images'];
          $courses=$row['courses'];
          $about=$row['description'];
      
 ?>
<!doctype html>
<head>
    <title>Admin panel</title>
    <link href="style/bootstrap.min.css" rel="stylesheet" />
    <link href="style/adminpanel.css" rel="stylesheet" />
</head>


<body>
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
    <div class="bg-img" style="padding:100px;">
        <h1><center>Welcome <?php echo $login_session; ?></center></h1>
        <div class="jumbotron" style="padding-left:55px;padding-right:130px;padding-top:155px;padding-bottom:155px;margin:60px;margin-left: 150px;margin-right: 150px; ">
            <form action="insert3.php" method="post" enctype="multipart/form-data">
                    <fieldset class="form-group">
		<label for="nameofinstitute">Name Of Institute :</label><br>
		<input type="text" class="form-control" name="instituteName" id="nameofinstitute" placeholder="Name Of Institute" value='<?php echo $instituteName ?>' required><br>
        
		<label for="address1">Address :</label><br>
		<textarea class="form-control"  name="instituteAddress" id="address1" placeholder="enter address" rows="3"><?php echo $instituteAddress ?></textarea><br>
        
        <label for="number">Contact No. :</label><br>
		<input type="number" class="form-control"  name="contactNo" id="number" placeholder="Contact No." value='<?php echo $contactNo ?>' required><br>

        <label for="email">Email :</label><br>
		<input type="email" class="form-control"  name="email"  id="email"   data-type="control_email" value='<?php echo $_GET['email'] ?>' readonly><br>
		
        
        <label for="photos">Please Specify a file,or set of files :</label><br>                
        <input type="file" name="image[]" size="40" class="form-control" id="photos" multiple><br>
                        
        <label for="courses">Courses :</label><br>
		<input type="text" class="form-control"  name="courses" id="courses" placeholder="Enter courses seprated by space"  value='<?php echo $courses ?>' required><br>  
                        
        <label for="about">About :</label><br>
		<textarea class="form-control"  name="description"  id="about"  rows="3"><?php echo $about ?></textarea><br>
                        
        <button type="submit"  name="submit" style="color: white; background-color:rgb(127, 127, 245)" class="form-control">Submit</button>                
       
    </fieldset>
                
                
            </form>
            
        </div>
         <h2><a href = "logout.php">Sign Out</a></h2>
    </div>

    <footer>
            <p>All Rights Reserved by Coaching founder</p>
        </footer>
</body>