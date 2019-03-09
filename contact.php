
<!doctype html>
<head>
    <title>contact form</title>
    <link href="style/bootstrap.min.css" rel="stylesheet" />
    <link href="style/contact.css" rel="stylesheet" />
</head>
<body style="background:rgba(200, 241, 255, 0.514);">
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
    <div class="bg-img" style="padding:100px; color=whitesmoke;">
    
  <?php
  include("include/ownDetails.php")
  ?>
  </div>
    <footer>
            <p>All Rights Reserved by Coaching founder</p>
        </footer>
</body>