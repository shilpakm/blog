<script type="text/javascript">

function selectuniv(str)
{	
	window.location='add_new_post.php?id='+str;


function reg()
{
	//document.getElementById("college_name").innerHTML="";
	if(document.getElementById("title").value=="")
	{
		alert("Plz enter  name...");
		document.Reg.title.focus();
		return false;
	}
	if(document.getElementById("details").value=="")
	{
		alert("Plz enter email...");
		document.Reg.details.focus();
		return false;
	}
	
}
</script>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
session_start();
include("head.php"); 
include('inc/config.php');


?>

<body id="top">
<?php include("menu.php");?>

<div class="wrapper col5">
  <div id="container">
    <div id="content">
      <h2>Create Post</h2>
     <div id="respond">
	 <p style="color:red" ><?php if(isset($_REQUEST['err'])) echo $_REQUEST['err'];?> </p>
        <form action="process.php" method="post" enctype="multipart/form-data">
          <table>
		<tr>
		  <td><label name="cag">Category</label></td>
		  <td>
		<?php
					
					echo"<select name='cat_id' id='cat_id'>";
					echo"<option value='0'>--select--</option>";
					$sql="select * from category";
					$res=mysql_query($sql);
					while($a = mysql_fetch_array($res))
					{
						echo "<option value=".$a[0].">".$a['name']."</option>";					
					}
					echo "</select>";
					
		  ?>
		  </td>
		  </tr>
		  
		  <tr >
		  <td style="width:200px">Post Title</td>
		  <td><input name="title" id="title" value="" size="22" type="text" required/></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Post Image</label></td>
		  <td><input name="img" id="img" value="" size="22" type="file"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Post Details</label></td>
		  <td><textarea name="details" id="details" value="" size="22" type="text" required/></textarea></td>
		  </tr>
		  
		
		  
		  <tr>
		<td> -------------------------- </td>
		<td> -------------------------- </td>
		  </tr>
		  <tr>
		  
		  <td> <input name="addpost" id="submit" value="Add Post" type="submit"> </td>
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