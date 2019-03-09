
    <?php
    
     include("admin/db.php");
     @$email=$_POST['email'];

   if(isset($_POST['submit']))
   { 
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
     
       $sql = "INSERT INTO coaching (instituteName, instituteAddress, contactno, email, images, courses, description)
        VALUES ('".$_POST["instituteName"]."','".$_POST["instituteAddress"]."','".$_POST["contactNo"]."','".$_POST["email"]."', '$image','".$_POST["courses"]."','".$_POST["description"]."')";
        $res=mysqli_query($con,$sql);
     
     if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                  
                }   
            
        }
       
    }
        
    }
    else{
       echo 'Please select a file to upload.';
    }
    
    
   
   }

    ?>
    
