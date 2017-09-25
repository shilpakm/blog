<script type="text/javascript">

function selectuniv(str)
{	
	window.location='register.php?id='+str;


function reg()
{
	//document.getElementById("college_name").innerHTML="";
	if(document.getElementById("name").value=="")
	{
		alert("Plz enter  name...");
		document.Reg.name.focus();
		return false;
	}
	if(document.getElementById("email").value=="")
	{
		alert("Plz enter email...");
		document.Reg.email.focus();
		return false;
	}
	if(document.getElementById("password").value=="")
	{
		alert("Plz enter password...");
		document.Reg.password.focus();
		return false;
	} 
	if(document.getElementById("passwordconf").value=="")
	{
		alert("Plz enter phone number...");
		document.Reg.passwordconf.focus();
		return false;
	} 	
	if(document.getElementById("city").value=="")
	{
		alert("Plz enter city...");
		document.Reg.city.focus();
		return false;
	}
	if(document.getElementById("contect").value=="")
	{
		alert("Plz enter contect...");
		document.Reg.contect.focus();
		return false;
	}	
}
</script>
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
        <form action="process.php" name="reg" method="post">
          <table>
		  <tr >
		  <td style="width:200px">Name</td>
		  <td><input name="name" id="name" value="" size="22" type="text" required/></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Email ID</label></td>
		  <td><input name="email" id="email" value="" size="22" type="text" required/></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Password</label></td>
		  <td><input name="password" id="password" value="" size="22" type="password" required/></td>
		  </tr>
		  
		  
		   <tr>
		  <td><label for="name">Confirm Password</label></td>
		  <td><input  name="passwordconf" id="passwordconf" value="" size="22" type="password" required/></td>
		  </tr>
		  
		   <tr>
		  <td><label for="name">City</label></td>
		  <td><input name="city" id="city" value="" size="22" type="text" required/></td>
		  </tr>
		   
		   
		   <tr>
		  <td><label for="name">Contect</label></td>
		  <td><input name="contect" id="contect" value="" size="22" type="text" required/></td>
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
