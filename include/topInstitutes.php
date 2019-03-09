<?php
include("admin/db.php");
?>
<div class="a">
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
<div class="institutes">
    <img src="<?php echo $img ?>" alt="<?php echo $name ?>" width=200dp height=150dp>
    <p><?php echo $name,$address ?><a href="result.php" >read more</a></p>
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