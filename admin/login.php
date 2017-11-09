<?php 


session_start();
include ("config.php");
include "functions/serialize.php";
include 'include/header.php';	
	/*  Login  */	
	if(isset($_POST['login'])){
		
		$users = loaddata('users'); 
                
		    $user = trim(@$_POST['user']);
		    $pass = trim(@$_POST['pass']);
		$Username = isset($_POST['Username']) ? trim(@$_POST['Username']) : '';
		$Password = isset($_POST['Password']) ? trim(@$_POST['Password']) : '';
			
               for ($q=1;$q<=$make_users;$q++){
                  	
		  if ( $users[$q]['username'] == $Username && $users[$q]['password']==$Password && $users[$q]['active']=='active' 
                      && $Username!='' && $Username!=''){
                        
			$_SESSION['UserData']['Username']=$users[$q]['username'];
                        $_SESSION['UserData']['rolos']=$users[$q]['rolos'];
                        $_SESSION['UserData']['Name']=$users[$q]['name'];
			header("location:index.php");
			exit;
		   } 
			
		}
                 
	     $error="<span style='color: red;'>Invalid Login </span>";
	}
?>

<body>

<br>
<form enctype="multipart/form-data" action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $error.PHP_EOL.$title;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input" required></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input" required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="login" type="submit" value="Login" class="Button_login"></td>
    </tr>
  </table>
</form>
<?php

include 'include/footer.php';
?>
