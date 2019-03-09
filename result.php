<?php
include("admin/db.php");
@$get=$_GET['id'];
$sql="select email from coaching where id='$get';";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$email=$row['email'];
?>
<!doctype html>
<head>
  <title>institute profile</title>
  <link href="style/bootstrap.min.css" rel="stylesheet" />
  <link href="style/result.css" rel="stylesheet" />

</head>

<body style="background:rgba(200, 241, 255, 0.514);">
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
   

  <img class="mySlides offset-3" width=60% height=600px src="img1.jpeg">
  <img class="mySlides offset-3" width=60% height=600px src="img2.jpeg">
  <img class="mySlides offset-3" width=60% height=600px src="img3.jpg">

  <script>
    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) { slideIndex = 1 }
      x[slideIndex - 1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
  </script>
  <!-- The scrollable area -->
  <div data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav style="background: lightgray" class="navbar navbar-inverse navbar-fixed-top" height="20px">
      <div class="container-fluid">
        <div class="navbar-header">



          <ul>
            <button><a href="#section1">ABOUT</a></button>
            <button><a href="#section2">COURSES AVAILABLE</a></button>
            <button><a href="#section3">PHOTOS</a></button>
            <button><a href="#section4">CONTACT US</a></button>

          </ul>




        </div>

      </div>
    </nav>
<?php
         if($get)
         {
            $select="select * from coaching where id=$get";
            $select_run=mysqli_query($con,$select);
            $count=mysqli_num_rows($select_run);
            if($count>0)
            {
            while($row=mysqli_fetch_array($select_run))
                   {
                    $name=$row['instituteName'];
                    $img=$row['images'];
                    
                    $img2=$row['path'];
                    $address=$row['instituteAddress'];
                    $description=$row['description'];
                    $contactNo=$row['contactNo'];
                    $email=$row['email'];
                    $courses=$row['courses'];
                   
                    ?>
    <div id="section1" class="container-fluid">


      <p><?php echo $description ?></p>
    </div>
    <div id="section2" class="container-fluid">
      <table width=100%>
       
        <tr>
          <td>
            <div class="secondry">
                <?php
                 $array=explode(" ",$courses);
                 foreach($array as $element)
                 {
                     ?>
                     <a href="courseResult.html"><?php echo $element ?></a><br> 
                 <?php
                 }
                    ?>
             
            </div>

          </td>
        
        </tr>
      </table>
    </div>
    <div id="section3" class="container-fluid" style="min-height:500px">
        <?php 
        $sql="select * from images where email='$email';";
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($res)){
        $img=$row['images'];
        $img2=$row['path'];
        ?>
      
         <img width=200px height=200px src=<?php echo $img2 ?> alt="img ">
         
       <?php
        }
        ?>
        </div>
    <div id="section4" class="container-fluid">

  <h2><?php echo $name ?></h2>
  <h2><?php echo $address ?></h2>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      <h3><?php echo $contactNo ?></h3>
      <h3><?php echo $email ?></h3>
    </div>


  </div>
  <?php 
         }
         }
         }
         else
         {
             echo "no post available";
         }
         ?>
  <footer>
    <p>All Rights Reserved by Coaching founder</p>
  </footer>
</body>