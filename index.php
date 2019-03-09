<?php
include("admin/db.php");
?>

<!doctype html>

<head>
    <title> Welcome to Coaching founder</title>
    <link href="style/bootstrap.min.css" rel="stylesheet" />
    <link href="style/coaching.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background:rgb(73, 73, 165);
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background:rgb(73, 73, 165);
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
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
<div class="bg-img" style="padding:100px;">
<div class="jumbotron" style="padding-bottom:40px" >
<form class="example" action="search.php" method="GET">
      <div class="form-group">
  <input type="text" placeholder="Search.." name="name" class="form-control" maxlength="100"/ required>
  <button type="submit" class="form-control" onclick="window.open('search.php?text=<?php echo $_GET['name']?>')"><i class="fa fa-search"></i></button>
  </div>
</form>
<div class="table-responsive">
  <table >
            <?php
            $select="select * from coaching order by id Desc";
            $select_run=mysqli_query($con,$select);
            $count=mysqli_num_rows($select_run);
             if($count>0)
             {  
                 $max="select MAX(id) from coaching";
                 $i=1;
                while($row=mysqli_fetch_array($select_run))
                {
                    $email=$row['email'];
                    $id=$row['id'];
                    $name=$row['instituteName'];
                    $sql="SELECT * FROM `images` WHERE email='$email' ORDER BY id DESC LIMIT 1";
                   
                    $res=mysqli_query($con,$sql);
                     
                    $row2=mysqli_fetch_array($res);
                   
                    $img=$row2['images'];
                    $img2=$row2['path'];
                   
                    if($i%3==1)
                    {
                    ?>
                        <tr>
                    <?php
                    }
                    ?>
            <td >
                <div class="institutes" style="width:400px">
                    <img src="<?php echo $img2 ?>" alt="<?php echo $name ?>" width=340dp height=300dp>
                    <p><?php echo $name ?> <a href="result.php?id=<?php echo $id ?>" >read more</a></p>
                </div>
            </td>
            <?php
             if($i%3==0 || $i==$max)
             {
              ?>
              </tr>
              <?php
             }
                $i++;
                }
             }
             else
             {
              echo "no post available";
             }
            ?>
    </table>
    </div>
    </div>
    </div>
    <footer>
            <p>All Rights Reserved by Coaching founder</p>
        </footer>
        
</body>
