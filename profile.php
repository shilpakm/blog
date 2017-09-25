<?php 
session_start();
if(isset($_REQUEST['logout']))
{
		session_destroy();
		header("location:register.php");
}

if(!isset($_SESSION['userid']))
{
	header('location:index.php');
	exit;
}

include("head.php"); ?>

<body id="top">
<?php include("menu.php");

$p = mysql_query("select * from users where id=".$_SESSION['userid']);
$p = mysql_fetch_array($p);


?>

<div class="wrapper col6">
<div id="container">
    <div id="content">
    
      <h2>User Profile</h2>
      <div id="respond">
        <form action="process.php" method="post">
          <table>
		  
		  <tr>
		  <td style="width:200px">Name</td>
		  <td><input name="name" id="name" value="<?php echo $p['name'];?>" size="22" type="text"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Email ID</label></td>
		  <td><input name="email" id="name" value="<?php echo $p['emailid'];?>" size="22" type="text"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Password</label></td>
		  <td><input name="password" id="name" value="<?php echo $p['password'];?>" size="22" type="password"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Confirm Password</label></td>
		  <td><input  name="passwordconf" value="<?php echo $p['password'];?>" size="22" type="password"></td>
		  </tr>
		  
		   <tr>
		  <td><label for="name">City</label></td>
		  <td><input name="city" id="name" value="<?php echo $p['city'];?>" size="22" type="text"></td>
		  </tr>
		   
		   
		   <tr>
		  <td><label for="name">Contect</label></td>
		  <td><input name="contect" id="name" value="<?php echo $p['contect'];?>" size="22" type="text"></td>
		  </tr>
		  
		  <tr>
		  <td><label for="name">Date</label></td>
		  <td><input name="city" id="name" value="<?php echo $p['date'];?>" size="22" type="text"></td>
		  </tr>
		  
		  <tr>
		<td> -------------------------- </td>
		<td> -------------------------- </td>
		  </tr>
		  <tr>
		  
		  <td> <input name="registeruser" id="submit" value="Update" type="submit"> </td>

		  </tr>
		  </table>
        </form>
      </div>
    </div>
  
    <div class="clear"></div>
  </div>
</div>
  <div class="clear"></div>
  
  
<?php include("foot.php");?>
</body>
