
    <?php
    
     include("admin/db.php");
$instituteName=$_POST['instituteName'];
$instituteAddress=$_POST['instituteAddress'];
$contactNo=$_POST['contactNo'];
$email=$_POST['email'];
$courses=$_POST['courses'];
$description=$_POST['description'];
   if(isset($_POST['submit']))
   {
      $select="select * from coaching where email='$email';";
      $select_run=mysqli_query($con,$select);
      $count=mysqli_num_rows($select_run);
      if($count)
      {
      $sql="UPDATE coaching 
            SET contactNo = '$contactNo',instituteName = '$instituteName',instituteAddress = '$instituteAddress',courses = '$courses',description = '$description' WHERE email = '$email';";
        $res=mysqli_query($con,$sql);
       if($res)
       {
           echo "updated successfully<br>";
       }
       else{
           echo "sorry,something went wrong";
       }
   // File upload configuration
    $targetDir = "./images/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
 
    if(!empty(array_filter($_FILES['image']['name']))){
        foreach($_FILES['image']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['image']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                $image=$key;
                
           
             
              
                  
                $sql="insert into images(email,images,path) values('$email','$image','$targetFilePath');";
                $res=mysqli_query($con,$sql);
                if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                }   
            
        }
       
    }
    }
    
 
    echo "<script> location.href='index.php'; </script>";
        exit;
      }
      else
      { // File upload configuration
    $targetDir = "./images/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
 
    if(!empty(array_filter($_FILES['image']['name']))){
        foreach($_FILES['image']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['image']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                $image=$key;
                
           
             
              
                  
                $sql="insert into images(email,images,path) values('$email','$image','$targetFilePath);";
                $res=mysqli_query($con,$sql);
     
       $sql = "INSERT INTO coaching (instituteName, instituteAddress, contactno, email, images, courses, description)
        VALUES ('".$_POST["instituteName"]."','".$_POST["instituteAddress"]."','".$_POST["contactNo"]."','".$_POST["email"]."', '$image', '".$_POST["courses"]."','".$_POST["description"]."')";
        $res=mysqli_query($con,$sql);
     
     if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                }   
            
        }
       
    }
        
    }
   
        echo "<script> location.href='index.php'; </script>";
        exit;
   }
   }  
    ?>
    
