<?php
 include("admin/db.php");
 ?>
<!doctype html>
<head>
    <title>sign up form</title>
    <link href="style/bootstrap.min.css" rel="stylesheet" />
    <link href="style/signup.css" rel="stylesheet" />
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
                
                <div class="jumbotron" style="margin:60px;margin-left: 150px;margin-right: 150px; ">
                        
                      <form action="insert.php" method="get">
                   <div class="form-group" style="padding:100px;">
                     <label for="uname">User Name :</label>
                     <input type="text" id="uname" name="uname" class="form-control" placeholder="user name" required><br>
                     <label for="email">Email :</label>
                     <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                     <small id="helpId" class="text-muted">we will never share your email</small><br><br>
                     <label for="number">Contact no. :</label>
                     <input type="number" id="number" name="contactno" class="form-control" placeholder="Contact no." required>
                     <small id="helpId" class="text-muted">we will never share your contact no.</small><br><br>
                     <label for="password"> Set Password :</label>
                     <input type="password" id="password" name="password" class="form-control" placeholder="password" required><br>
                     <label for="password">Confirm Password :</label>
                     <input type="password" id="confirm_password" name="password" class="form-control" placeholder="password" required><br>
                     <script>
                     var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
                     <button type="submit" name="submit" style="color: white; background-color:rgb(127, 127, 245)" class="form-control" value="sign up">Sign Up</button>
                     
                   </div>
                   
                   </form>
             
                </div>
               
    </div>
    </div>
    <footer>
            <p>All Rights Reserved by Coaching founder</p>
        </footer>
</body>