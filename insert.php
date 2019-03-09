
    <?php
    
     include("admin/db.php");

   if(isset($_GET['submit']))
   {
        $sql = "INSERT INTO signup (username, email, contactno, password)
        VALUES ('".$_GET["uname"]."','".$_GET["email"]."','".$_GET["contactno"]."','".$_GET["password"]."')";
        $res=mysqli_query($con,$sql);
        $email=$_GET['email'];
        
       
        echo "<script> location.href='adminpanel2.php?email=$email'; </script>";
        exit;
   }
    

    ?>
    
