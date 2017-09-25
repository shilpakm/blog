
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include("head.php"); 
include('inc/config.php');

if(isset($_REQUEST['delete']))
{
	$q = mysql_query("delete from post where id=".$_REQUEST['delete']);
	header("location:managepost.php");
	
}
?>
<body id="top">
<?php include("menu.php");?>

<div class="wrapper col5">
  <div id="container">
    <div id="">
      <h2>Manage post</h2>
     <div id="">
        <form action="process.php" method="post">
          <table border="1" width="100%">
		  <tr >
		  <td>id</td>
		  <td>Post Name</td>
		  <td>Post Description</td>
		  <td>Post Image</td>
		  <td>Post Date</td>
		  
		  <td>Delete</td>
		  </tr>
		  <?php
		  $sql = mysql_query("select * from post");
		  while($s = mysql_fetch_array($sql))
		  {
			  echo "<tr>";
			  echo "<td>$s[0]</td>";
			  echo "<td>$s[1]</td>";
			  echo "<td>$s[2]</td>";
			  echo "<td>$s[3]</td>";
			  echo "<td>$s[4]</td>";
			   echo "<td>$s[5]</td>";
			  echo" <td><a href='managepost.php?delete=".$s['id']."'>Delete</a></td>";
			 
			  echo "</tr>";
			  
		  }
		  ?>
		  
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