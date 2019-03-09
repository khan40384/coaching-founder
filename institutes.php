<?php
include("admin/db.php");
?>
<!doctype html>

<head>
    <title>top institutes</title>
    <link href="style/bootstrap.min.css" rel="stylesheet" />
    <link href="style/institutes.css" rel="stylesheet" />
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
    <div class="bg-img" style="padding:100px;"
    <div class="jumbotron">
   

 <?php
            $select="select * from coaching order by id Asc";
            $select_run=mysqli_query($con,$select);
            $count=mysqli_num_rows($select_run);
             if($count>0)
             {  
                 
                 $i=1;
                while($row=mysqli_fetch_array($select_run))
                {
                    $name=$row['instituteName'];
                    $img=$row['images'];
                    $address=$row['instituteAddress'];
                    if($i<=6)
                    {
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
$i++;
}
}
}
else
{
    echo "sorry, no post available";
}
?>
</div>
</div>
   
<footer>
    <p>All Rights Reserved by Coaching founder</p>
</footer>
</body>