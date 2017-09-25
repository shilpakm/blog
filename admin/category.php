
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include("head.php"); 
include('inc/config.php');

if(isset($_REQUEST['sub']))
{
	
$cat=$_REQUEST['cat'];

		
$que="INSERT INTO category
		values(null,'$cat')";
			echo $que;	
			
			mysql_query($que);
}
if(isset($_REQUEST['delete']))
{
	$q = mysql_query("delete from category where id=".$_REQUEST['delete']);
	header("location:category.php");
	
}

?>

<body id="top">
<?php include("menu.php");?>

<div class="wrapper col5">
  <div id="container">
    <div id="content">
  
	  <div class="wrapper col3">
  <div id="container">
    <div id="content">
        <h2>Manage Category</h2>	  
		 
		 <table cellpadding="0" cellspacing="0" border="1" width="100%" style="text-align:center">
		 <tr height="50px">
		 <th>ID</th>
		 <th>Name</th>
		 <th>Manage</th>
		 </tr>
		 
		 <?php
		 $cat = mysql_query("select * from category");
		 $i=1;
		 while($c = mysql_fetch_array($cat))
		 { ?>
			 <tr>
		 <td><?php echo $i; ?></td>
		 <td><?php echo $c[1]; ?></td>
		 
		 <td><a href="category.php?delete=<?php echo $c[0];?>">Delete</a></td>
		 </tr>
		 
		 <?php
		 $i++;
		 } ?>
		 
		 </table>

	  
	  
    </div>
    <div id="column">
	
	<form action="" method="post" >
	
      <div class="holder">
        <h2>Add Category</h2>
        <table cellpadding="0" cellspacing="0">
		
		<tr>
		<td>Category Name :</td>
		<td><input type="text" name="cat"  /></td>
		</tr>
		<tr height="10px">
		</tr>
		<tr>
		<td> </td>
		<td><input type="submit" name="sub" value="Add Category" /></td>
		</tr>
		
		
		</table>
      </div>
	  </form>
	  
    </div>
    <br class="clear">
  </div>
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