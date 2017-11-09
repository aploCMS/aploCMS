<?php




include "include/start.php";
include "config.php";



$users=loaddata('users');



if($_POST['Update']=='Update'){

      
       for($q=1;$q<=$make_users;$q++){

 	$users[$q]['username']=trim(@$_POST['username'.$q]);
 	$users[$q]['password']=trim(@$_POST['password'.$q]);
 	$users[$q]['active']=trim(@$_POST['active'.$q]);
 	$users[$q]['rolos']=trim(@$_POST['rolos'.$q]);
 	$users[$q]['name']=trim(@$_POST['name'.$q]);
         
       }
 //set admin standar
 $users[1]['active']='active'; $users[1]['rolos']='admin';
  
 savedata($users,'users');

}





include "include/header.php";

  if(isset($error)) echo $error;
     ?>


 <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
 <tr><td></td></tr>
<tr><td><th>Active</th><th>Username</th>  <th>Pass</th> <th>Type</th> <th>Nickname</th><th>Last login</th></td></tr>
<?php





function showusers($kolpo,$dis){
  global $users,$q,$color; 
    
    if($users[$q]['active']=="active"){ $active="selected";$stop="";$class="active";}else{$active="";$stop="selected";$class="stop";}
    if($users[$q]['rolos']=="admin"){ $admin="selected";$author="";}else{$admin="";$author="selected";}
    echo '<tbody style="background-color: '.$color.';" id="body">
          <tr><td align="right" valign="top" >
          <th><select id="s'.$q.'" name="active'.$q.'" class="'.$class.'" '.$kolpo.'  >
          <option value="active" '.$active.'>Active</option>
          <option value="stop" '.$stop.'>STOP</option>
          </select></th> 
          <th><input id="u'.$q.'" type="text"  name="username'.$q.'"  value="'.$users[$q]['username'].'" '.$kolpo.'   required></th> 
          <th><input id="p'.$q.'" type="password"  name="password'.$q.'"  value="'.$users[$q]['password'].'" required '.$dis.'></th> 
          <th><select id="s'.$q.'" name="rolos'.$q.'" style="color: blue;" '.$kolpo.' '.$dis.' >
          <option value="admin" '.$admin.'>Admin</option>
          <option value="author" '.$author.'>Author</option>
          </select></th> 
          <th>
              <input type="text" name="name'.$q.'" value="'.$users[$q]['name'].'" required '.$dis.'></th>
          <th>'.$users[$q]['last_login'].'</th>
          </td></tr>
          </tbody> ';
  $disable='';$color="";
}
?>
  <h1>Edit users</h1>
  <form id="form" action="users.php" method="post" >

<?php
  for ($q=1;$q<=$make_users;$q++){
 
     if ($_SESSION['UserData']['rolos']=="admin" ){
        showusers('','');
       }
     if ($_SESSION['UserData']['rolos']=="author"){
              if( $users[$q]['username']==$_SESSION['UserData']['Username'] ) {$disable="";$color='green';}else{$disable="readonly";$color='';}
                  showusers('readonly',$disable); 
       }
    } 
     ?>
            <tr><td><th>
        
           </th><th colspan="4"><input id="update" type="submit" name="Update" value="Update" ></th>
          </td></tr>
         </form>

 
       </table>'
<?php
include 'include/footer.php';
?>
