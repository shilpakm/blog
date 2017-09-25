
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include("head.php"); 
include('inc/config.php');

$query="select * from users";
	//echo $query;
	$res=mysql_query($query,$con);
	
if(isset($_REQUEST['delete']))
{
	$q = mysql_query("delete from users where id=".$_REQUEST['delete']);
	header("location:manageuser.php");
	
}
?>

<body id="top">
<?php include("menu.php");?>

<div class="wrapper col5">
  <div id="container">
    <div id="content">
      <h2>Manage User</h2>
     <div id="respond">
        <form action="process.php" method="post">
          <table border="1">
		  <tr >
		  <td>id</td>
		  <td>name</td>
		  <td>emailid</td>
		  <td>password</td>
		  <td>city</td>
		  <td>contact</td>
		  <td>Date</td>
		  <td>Delete</td>
		  </tr>
		  <?php
		while($raw=mysql_fetch_array($res))
		{
			echo"<tr>
			
			<td>".$raw['id']."</td>
			<td>".$raw['name']."</td>
			
			<td>".$raw['emailid']."</td>
			<td>".$raw['password']."</td>
			<td>".$raw['city']."</td>
			<td>".$raw['contect']."</td>
			<td>".$raw['date']."</td>
			
			 <td><a href='manageuser.php?delete=".$raw['id']."'>Delete</a></td>
			</tr>";
		}
			mysql_close($con);
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