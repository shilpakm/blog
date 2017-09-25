<?php 	session_start();
include('inc/config.php'); 
?>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Public Blog CMS Admin Panel</a></h1>
      
    </div>
    <div id="newsletter">
	<?php

	if(isset($_SESSION['admin']))
	{
	$userid = $_SESSION['admin'];	
	$query = mysql_query("select * from users where id=$userid");
	$q = mysql_fetch_array($query);

	?>
      <a href="login.php?logout">Logout</a> | </p>
     
	<?php
	
	}	
	else
	{
	?>
	  <p> <a href="login.php">Login</a> </p>  
	
	<?php
	}
	?>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        
		<?php

	if(isset($_SESSION['admin']))
	{

	?>
		   <li><a href="category.php">Category</a>
          
        </li>
        
        
	
		<li><a href="managepost.php">Manage Post</a></li>
		<li><a href="manageuser.php">ManageUser</a></li>
		
		
			<li><a href="add_new_post.php">Add New Post</a></li>
		
	<?php } ?>
     
       
      </ul>
    </div>
   
    <br class="clear" />
  </div>
</div>