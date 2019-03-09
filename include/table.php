<table>
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
                    $id=$row['id'];
                    $name=$row['instituteName'];
                    $img=$row['images'];
                    if($i%3==1)
                    {
                    ?>
                        <tr>
                    <?php
                    }
                    ?>
            <td width=600dp>
                <div class="institutes">
                    <img src="<?php echo $img ?>" alt="genius" width=400dp height=300dp>
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