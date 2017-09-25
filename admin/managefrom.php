

<?php 
include('db.php');

if(isset($_REQUEST['delete']))
{
	$q = mysql_query("delete from student where id=".$_REQUEST['delete']);
	header("location:managefrom.php");
	
}
?>
<body id="top">

<div class="wrapper col5">
  <div id="container">
    <div id="">
      <h2>Manage from</h2>
     <div id="">
        <form action="insert1.php" method="post">
          <table border="1" width="100%">
		  <tr >
		  <td>id</td>
		  <td>Name</td>
		  <td>Address</td>
		  		  <td>city</td>
		  <td>contact</td
		  

		  <td> Image</td>
		  
		  
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