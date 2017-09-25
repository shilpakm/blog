<?php 
include('inc/config.php'); 
?>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Public Blog CMS</a></h1>
      <p><strong>a simple blogging CMS</strong></p>
    </div>
    <div id="newsletter">
	<?php

	if(isset($_SESSION['userid']))
	{
	$userid = $_SESSION['userid'];	
	$query = mysql_query("select * from users where id=$userid");
	$q = mysql_fetch_array($query);

	?>
      <p>Welcome ! <?php echo $q['name'];?> | <a href="profile.php">Profile</a> | <a href="register.php?logout">Logout</a> | </p>
     
	<?php
	
	}	
	else
	{
	?>
	   <p>Welcome ! Guest | <a href="register.php">Login</a> | <a href="register.php">Sign-up</a> | </p>
   
	
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
        
		  <li><a href="archive.php">Archive</a></li>
		
		   <li><a href="#">Category</a>
          <ul>
		  <?php
		  $q = mysql_query("select * from category"); 
		  while($w = mysql_fetch_array($q))
		  {
			  ?>
		  
            <li><a href="post_by_cat.php?id=<?php echo $w[0];?>"><?php echo $w[1];?></a></li>
			
			<?php
		  }
			?>
           
          </ul>
        </li>
        
        
		<li><a href="contactus.php">Contact Us</a></li>
		
		<?php
		if(isset($_SESSION['userid']))
		{
			?>
			
			<li><a href="add_new_post.php">Add New Post</a></li>
		
			
			<?php
		}
		
		?>
     
       
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>