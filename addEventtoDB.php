<?php
    $con=mysql_connect('localhost','root','root','ieee');
    mysql_select_db("ieee",$con);
    
    $query="SELECT * FROM `events`";
    $result=mysql_query($query,$con);
    $id=mysql_num_rows($result) + 1;
    $name=$_POST['name'];
    $description=$_POST['description'];
    $tag=$_POST['tag'];
    $date=$_POST['date'];
    
    function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }

     }

    if (!empty($_FILES["uploadedimage"]["name"])) 
    {
       $file_name=$_FILES["uploadedimage"]["name"];
	   $temp_name=$_FILES["uploadedimage"]["tmp_name"];
	   $imgtype=$_FILES["uploadedimage"]["type"];
	   $ext= GetImageExtension($imgtype);
       $imagename=$_FILES["uploadedimage"]["name"];
	   $target_path = "images/events/".$imagename;
	

        if(move_uploaded_file($temp_name, $target_path)) 
        {
          $query_upload="INSERT INTO `events` (`event_id`, `event_name`, `description`, `image`, `tag`, `date`) VALUES ('$id', '$name', '$description','".$target_path."', '$tag', '$date')";
	       mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
        }
        else
        {
            echo("Error While uploading image on the server");
        } 
        
        $imgfiles=$_FILES["uploadedimage1"]["name"];
        $imgcount=count($imgfiles);
        $i=0;
        
        while($i<$imgcount)
        {
            if(!empty($_FILES["uploadedimage1"]["name"][$i]))
            {  
                echo $_FILES["uploadedimage1"]["name"][$i];
                
                $file_name1[$i]=$_FILES["uploadedimage1"]["name"][$i];
                $temp_name1[$i]=$_FILES["uploadedimage1"]["tmp_name"][$i];
                $imgtype1[$i]=$_FILES["uploadedimage1"]["type"][$i];
                $ext1[$i]= GetImageExtension($imgtype1[$i]);
                $imagename1[$i]=$_FILES["uploadedimage1"]["name"][$i];
                $target_path1[$i] = "images/events/".$imagename1[$i];
                
                if(move_uploaded_file($temp_name1[$i],$target_path1[$i]))
                {
                    $query_image1[$i]="INSERT INTO `image_table` (`event_id`,`image`) VALUES ('$id','".$target_path1[$i]."')";
                    mysql_query($query_image1[$i]) or die ("error in $query_image1[$i] ==>".mysql_error());
                }
                else
                {
                    echo("Error While uploading image on the server");
                } 
            }
            $i=$i+1;
        }
        header('location:admin/html/success.php?status=success&id=event');
    }
    else
    {
        header('location:admin/html/success.php?status=not&id=event');
    }


?>