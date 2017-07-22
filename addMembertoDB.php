<?php
    $con=mysql_connect('localhost','root','root','ieee');
    mysql_select_db("ieee",$con);
    
    $query="SELECT * FROM `execom`";
    $result=mysql_query($query,$con);
    $id=mysql_num_rows($result) + 1;
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $fburl=$_POST['fburl'];
    $liurl=$_POST['liurl'];

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

    if (!empty($_FILES["uploadedimage"]["name"])) {

	   $file_name=$_FILES["uploadedimage"]["name"];
	   $temp_name=$_FILES["uploadedimage"]["tmp_name"];
	   $imgtype=$_FILES["uploadedimage"]["type"];
	   $ext= GetImageExtension($imgtype);
       $imagename=$_FILES["uploadedimage"]["name"];
	   $target_path = "images/events/".$imagename;
	

        if(move_uploaded_file($temp_name, $target_path)) {
            
 	  $query_upload="INSERT INTO `execom` (`name`, `position`, `image`, `facebook_url`, `linkedin_url`, `id`) VALUES ('$name', '$designation','".$target_path."', '$fburl', '$liurl','$id')";
	   mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
            
        header('location:admin/html/success.php?status=success&id=member');
        }else{
            
    exit("Error While uploading image on the server");
        } 

    }   
    else{
        header('location:admin/html/success.php?status=not');
    }


?>