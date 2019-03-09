<?php
   include("admin/db.php");
   
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT email FROM signup WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['username']= "$myusername";
         $_SESSION['login_user'] = $myusername;
         $email=$row['email'];
         header("location: adminpanel.php?email=$email");
      }else {
          
          header("location: abc.php");
      }
   }
?>
<!doctype html>
<head>
    <title>login form</title>
    <link href="style/bootstrap.min.css" rel="stylesheet" />
    <link href="style/login.css" rel="stylesheet" />
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
        
    
         <div class="jumbotron" style="padding-left:55px;padding-right:130px;padding-top:155px;padding-bottom:155px;margin-left: 150px;margin-right: 150px; ">
       
            <form action="" method="post">
                    <fieldset class="form-group">
		<label for="username1">User Name :</label><br>
		<input type="text" class="form-control" name="username" id="username1" placeholder="User Name" required><br>
		<label for="password">Password :</label><br>
		<input type="password" class="form-control" name="password" id="password1" placeholder="Enter password" required><br>
		
		<label for="message1">Your Message</label><br>
		<textarea class="form-control" id="message1" rows="3"></textarea><br>
	<button type="submit" name="submit" style="color: white; background-color:rgb(127, 127, 245)" class="form-control">Submit</button>
    </fieldset>
                
                
            </form>
        </div>

</div>
    <footer>
            <p>All Rights Reserved by Coaching founder</p>
        </footer>
</body>