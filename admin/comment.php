
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include("head.php"); 
include('inc/config.php');

if(isset($_REQUEST['addpost']))
{
	
$p_productname=$_POST['title'];
$p_description=$_POST['detail'];
		
$que="INSERT INTO post
		values('$p_productname','$p_description')";
			echo $que;	
}

?>

<body id="top">
<?php include("menu.php");?>

<div class="wrapper col5">
  <div id="container">
    <div id="content">
      <h2>Manage Comment</h2>
     <div id="respond">
        <form action="process.php" method="post">
          <table>
		  <tr >
		  <td style="width:200px">cid</td>
		  <td><input name="id" id="id" value="" size="22" type="text"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">pid</label></td>
		  <td><input name="pid" id="pid" value="" size="22" type="text"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">uid</label></td>
		  <td><input name="uid" id="uid" value="" size="22" type="text"></td>
		  </tr>
		  
		   <tr>
		  <td><label for="name">comment</label></td>
		  <td><textarea name="comment" id="comment" value="" size="22" type="text"></textarea></td>
		  </tr>
		  
		  <tr>
		<td> -------------------------- </td>
		<td> -------------------------- </td>
		  </tr>
		  <tr>
		  
		  <td> <input name="post" id="submit" value="addcomment" type="submit"> </td>
		   <td><input name="reset" id="submit" value="Reset" type="reset"> </td>
		  </tr>
		  </table>
        </form>
      </div>
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