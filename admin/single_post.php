<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
session_start();
include("head.php"); 

include('inc/config.php');

$ry=mysql_query("select * from post where id=".$_REQUEST['pid']);
$post =  mysql_fetch_array($ry);

$userdata = "";
if($post['user_id']==0)
{
	$userdata="Admin";
}
else
{
	$userfq = mysql_query("select * from users where id=".$post['user_id']);
	$userfq=mysql_fetch_array($userfq);
	$userdata=$userfq['name'];
}
?>

<body id="top">
<?php include("menu.php");?>

<div class="wrapper col5">
  <div id="container">
    <div id="content">
	<b><?php echo $userdata; ?>: </b> | <i> Date : <?php echo $post['post_date']; ?> </i> </br>
      <h1><?php echo $post[1]; ?></h1>
	  
      <p><img src="../images/<?php echo $post['post_img'];?>" alt="" height="300" width="600"></p>
      <p><?php echo $post[2]; ?></p>
    <hr>

	 <div id="comments">
        <h2>Comments</h2>
        <ul class="commentlist">
          <li class="comment_odd">
		  <?php
		  $com = mysql_query("select * from comments where post_id=".$_REQUEST['pid']);
		  while($c = mysql_fetch_array($com))
		  {
		  ?>
            <div class="author"><span class="name"><a href="#">A <?php 
			
			if($c['user_id']==0)
{
	echo "Admin";
}
else
{
	$userfq =mysql_query("select * from users where id=".$c['user_id']);

	$userfq=mysql_fetch_array($userfq);
	echo $userfq['name'];
}
			
			?></a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#"><?php echo $c['date'];?></a></div>
            <p><?php echo $c['comment'];?></p>
        
		<?php } ?>

		 </li>
         
        </ul>
      </div>
	  <?php
	  if(isset($_SESSION['userid']))
	{
		?>
     
	  <?php
	} ?>
    </div>
    <div class="clear"></div>
  </div>
</div>

  <div class="wrapper col5">
 
    <br class="clear" />
  </div>
</div>
<?php include("foot.php");?>
</body>
</html>