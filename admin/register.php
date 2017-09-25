<?php 
session_start();
if(isset($_REQUEST['logout']))
{
		session_destroy();
		header("location:register.php");
}

if(isset($_SESSION['userid']))
{
	header('location:index.php');
	exit;
}

include("head.php"); ?>

<body id="top">
<?php include("menu.php");?>

<div class="wrapper col6">
<div id="container">
    <div id="content">
    
      <h2>Register User</h2>
      <div id="respond">
        <form action="process.php" method="post">
          <table>
		  <tr >
		  <td style="width:200px">Name</td>
		  <td><input name="name" id="name" value="" size="22" type="text"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Email ID</label></td>
		  <td><input name="email" id="name" value="" size="22" type="text"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Password</label></td>
		  <td><input name="password" id="name" value="" size="22" type="password"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Confirm Password</label></td>
		  <td><input  name="passwordconf" value="" size="22" type="password"></td>
		  </tr>
		  
		   <tr>
		  <td><label for="name">City</label></td>
		  <td><input name="city" id="name" value="" size="22" type="text"></td>
		  </tr>
		   
		   
		   <tr>
		  <td><label for="name">Contect</label></td>
		  <td><input name="contect" id="name" value="" size="22" type="text"></td>
		  </tr>
		  
		  <tr>
		  <td><label for="name">Date</label></td>
		  <td><input name="city" id="name" value="" size="22" type="text"></td>
		  </tr>
		  
		  <tr>
		<td> -------------------------- </td>
		<td> -------------------------- </td>
		  </tr>
		  <tr>
		  
		  <td> <input name="registeruser" id="submit" value="Signup" type="submit"> </td>
		   <td><input name="reset" id="submit" value="Reset" type="reset"> </td>
		  </tr>
		  </table>
        </form>
      </div>
    </div>
    <div id="column">

    
      <h2>Login</h2>
      <div id="respond">
        <form action="process.php" method="post">
          <table>
		  <tbody> 
		  
		  
		   <tr>
		  <td><label for="name">Email ID</label></td>
		  <td><input name="username" id="name" value="" size="22" type="text"></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Password</label></td>
		  <td><input name="password" value="" size="22" type="text"></td>
		  </tr>
		  
		  
		  	  
		  <tr>
		<td> -------------------------- </td>
		<td> -------------------------- </td>
		  </tr>
		  <tr>
		  
		  <td> <input name="loginuser" id="submit" value="Login" type="submit"> </td>
		   <td><input name="reset" id="submit" value="Forgot Password" type="reset"> </td>
		  </tr>
		  </tbody></table>
        </form>
      </div>
  
	</div>
    <div class="clear"></div>
  </div>
</div>
  <div class="clear"></div>
  
  
<?php include("foot.php");?>
</body>
