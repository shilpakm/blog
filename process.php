<?php
session_start();

	include('inc/config.php');

$r= $_REQUEST;

if(isset($r['registeruser']))
{
	
	$name = $r['name'];	
	$email = $r['email'];
	$password = $r['password'];
	$passwordconf = $r['passwordconf'];
	$city = $r['city'];
	$contect = $r['contect'];
	$date = date('d-m-Y');	
	$q = "INSERT INTO `users` (`name`, `emailid`, `password`, `city`, `contect`, `date`) VALUES ('$name', '$email', '$password', '$city', '$contect', '$date');";
	mysql_query($q);
	header('location:index.php');
}


if(isset($r['loginuser']))
{
	
	$user = $r['username'];
	$pass = $r['password'];
	
	$q = "select * from users where emailid='$user' AND password='$pass'";
	
	$query = mysql_query($q);	
	$query= mysql_fetch_array($query);
	
	if($query['id']>0)
	{
		$_SESSION['userid']=$query['id'];
		header('location:index.php');		
	}
	else
	{
		header('location:index.php');
	}
	
}


if(isset($r['docomment']))
{
	$com = $r['comment'];
	$user = $_SESSION['userid'];
	$date = date("d-m-Y");
	$postid = $_REQUEST['postid'];
	$sql=mysql_query("insert into comments (post_id,user_id,comment,date) values($postid,$user,'$com','$date');");
	header("location:single_post.php?pid=".$postid);

	
	
}
if(isset($r['addpost']))
{
	echo "dadaas";
	$postname = $r['title'];
	$post_detail =  $r['details'];
	$post_date = date("d-m-Y");
	$post_cat = $r['cat_id'];
	$post_usr = "0";
	$fileName = $_FILES["img"]["name"];
	
	
$err ="";
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
      
        $uploadOk = 1;
    } else {
        $err = "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
     $err = "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img"]["size"] > 500000) {
    $err ="Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $err = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error

if($uploadOk==0)
{
	header("location:add_new_post.php?err=".$err);
}

    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
     			
	$sql = "INSERT INTO `simpleblog`.`post` (`id`, `post_name`, `post_desc`, `post_img`, `post_date`, `user_id`, `cat_id`)	VALUES (NULL, '$postname', '$post_detail', '$fileName', '$post_date', '$post_usr', '$post_cat');";
	
	if(mysql_query($sql))
	{
		header("location:add_new_post.php?err=File Uploaded Successfully");
	}
	
    } else {
         $err = "Sorry, there was an error uploading your file.";
		 header("location:add_new_post.php?err=".$err);
    }
	


	
	
}



if(isset($r['']))
{
	
	
}


if(isset($r['']))
{
	
	
}


if(isset($r['']))
{
	
	
}


if(isset($r['']))
{
	
	
}



?>