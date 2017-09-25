<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("head.php");
	include('inc/config.php');
 ?>
<body id="top">
<?php include("menu.php");?>
<div style="height:600px">
<div class="wrapper col4">
  
  <div id="container">
    <div id="content">
  <div id="services">
  <h1>Latest Posts </h1>
   <ul>
	<?php
	$q = mysql_query("SELECT * from post LIMIT 6");	
	while($a = mysql_fetch_array($q))
	{
	?>
	
      <li>
        <div class="fl_left"><img src="images/<?php echo $a['post_img'];?>" width="100px" height="180px" alt="" /></div>
        <div class="fl_right">
          <h2><?php echo $a[1];?></h2>
          <p><?php echo $a['post_desc'];?></p>
          <p class="readmore"><a href="single_post.php?pid=<?php echo $a[0];?>">Continue Reading &raquo;</a></p>
        </div>
      </li>
	  
	<?php
	}
	?>
	 </ul>   
   

   <br class="clear" />
  </div>
</div>
</div>
  
  
  </div>
  
<div class="wrapper col5">
 
    <br class="clear" />
  </div>

  <div class="wrapper col3">
  <div id="container">
    <div id="content">
      
    </div>
    
    <br class="clear">
  </div>
</div>

<?php include("foot.php");?>
</body>
</html>