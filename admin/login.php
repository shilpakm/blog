<?php 


include("head.php"); ?>

<body id="top">
<?php include("menu.php");


if(isset($_REQUEST['logout']))
{
		session_destroy();
		header("location:login.php");
}?>

<div class="wrapper col6">
<div id="container">
    <div id="content">
    
     
    <div id="column">

    
      <h2>Administrator Login</h2>
      <div id="respond">
        <form action="process.php" method="post">
          <table>
		  <tbody> 
		  
		  
		   <tr>
		  <td><label for="name">Usre ID</label></td>
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
		  
		  <td> <input name="loginadmin" id="submit" value="Login" type="submit"> </td>
		  
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
