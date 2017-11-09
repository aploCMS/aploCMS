<?php

include "include/start.php";
include "config.php";




$widget=loaddata('widget');

if($_POST['Update']=='Update'){
 
 
   
   for($q=0;$q<=$make_widget;$q++){
 
       $widget[$q]['html']=trim(@$_POST['html'.$q]);
       $widget[$q]['active']=trim(@$_POST['active'.$q]);
       $widget[$q]['seira']=trim(@$_POST['seira'.$q]);
       $widget[$q]['onoma']=trim(@$_POST['onoma'.$q]);
       
   }

 // bale me  seira
foreach ( $widget as $key => $row ) { 
   $name [ $key ] = $row [ 'name' ]; 
   $active [ $key ] = $row [ 'active' ]; 
   $seira [$key]= $row [ 'seira' ];
} 


   array_multisort (  $active , SORT_ASC , $seira , SORT_ASC , $widget ); 
   savedata($widget,'widget');

}

 



 function showget(){
  global $widget,$q; 
     
    if($widget[$q]['active']=="active"){ $active="selected";$stop="";$class="active";}else{$active="";$stop="selected";$class="stop";}
    
    echo '<tr><td align="right" valign="top">
          <th><select id="s'.$q.'" name="active'.$q.'" class="'.$class.'" >
          <option value="active" '.$active.'>Active</option>
          <option value="stop" '.$stop.'>STOP</option>
          </select></th> 
          
          <th><textarea id="u'.$q.'"   name="html'.$q.'"   >'.$widget[$q]['html'].'</textarea></th> 
          <th><input id="p'.$q.'" type="number"  name="seira'.$q.'"  value="'.$widget[$q]['seira'].'" size="5" ></th> 
          <th><input type="text" name="onoma'.$q.'" value="'.$widget[$q]['onoma'].'" ></th>
          </td></tr>';
  $disable='';
  }
 include "include/header.php";

?>

 <form id="form" action="widget.php" method="post" >
        <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <tr><td><h1>Widget</h1></td></tr>
        <tr><td><th>Active</th><th>Widget html</th>  <th>Sequense</th><th>Name</th> </td></tr>
        <?php
            
            
            for ($q=0;$q<=$make_widget;$q=$q+1){
             
               
              if($widget[$q]['name']!='') {}
          showget(); 
            
           }
        ?>
        <tr><td><th>
        <?php if ($_SESSION['UserData']['rolos']=="admin"){$disable='';}else{$disable='disabled';}?>
        </th><th colspan="4"><input id="update" type="submit" name="Update" value="Update"  <?=$disable;?> ></th>
          </td></tr>
         
        </table>
        </form>
<?php

include 'include/footer.php';
?>
