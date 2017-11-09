
<style type="text/css">


a{
 text-decoration: none;
  color: grey;
}
.a{
  text-decoration: none;
  color: rgba(0, 0, 0, 0.3);
}


.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
<?php
  
  include $theme.'top.php';

?>
    
   <br/><br/><br/><br/><br/><br/><br/><br/>   

<?php

  //include $theme.'slider.php';
function des_table(){
  global $style,$img,$post,$jump,$jump1,$dir,$step,$req;

   ?>
   <div class="col-3">
    <table><tbody style="border-collapse:collapse;border-spacing:0;min-width: 100%;max-width: 100%;min-height: 600px;max-height: 600px;overflow: hidden;background-color: white; ">
  <tr>
    <th >
        <div style="width: 100%;min-height: 300px;max-height: 300px;overflow: hidden;">
 <a href="index.php?dir=<?=$req;?>"><?=$img; ?></a>
        </div>
     </th>
  </tr>
  <tr>
    <td class="ts-b">
      <h2><a href="index.php?dir=<?=$req;?>"><h3><?=$post['titlos']; ?></h3>
    </td>
  </tr>
  <tr>
    <td class="ts-c">
       <p class="title"><?=$post['cat_name'];?></a></p>
        <div style="min-height: 200px;max-height: 200px;overflow: hidden;word-break: break-all;"><?=$post['keimeno']; ?></div>
    </td>
  </tr>
  <tr>
    <td style="float: right;">
     <?=date("d F Y H:i:s.", filectime($dir));  ?>  
     </td>
  </tr>
  <tr>
    <td class="ts-t">
     <a href="index.php?dir=<?=$req;?>"><button class="button">read more...</button></a>  
     </td>
  </tr>
 </tbody>
</table>
</div>
   



<?php
}

function des_widget(){
 global $q,$widget_active,$metra_widget;
?>   
   <div class="col-3" >
    <table><tbody style="border-collapse:collapse;border-spacing:0;min-width: 100%;max-width: 100%;min-height: 600px;max-height: 600px;overflow: hidden;">
  <tr>
    <th style="float: right;"><div align="right">
         <?php if (count($widget_active)>=$metra_widget) {echo $widget_active[$metra_widget];$metra_widget++;} ?>
                  </div>
     </th>
  </tr>
  </tbody></table>
  </div>

   



<?php
}



$metra_widget=0;
$m=1;
  for($q=1;$q<sizeof($post_active);$q++){
   
    $req=$post_active[$q]['dir_name'];
    $dir=$post_path.$post_active[$q]['dir_name'];
 
       $post=load_post($dir);
       $img_url=find_img($dir.'/');
   
       if($img_url!=null){
              if(isset($post['first_img_url'])){$img_u=$dir.'/'.$post['first_img_url'];}else{$img_u=$img_url[0];}
          
         $img= '<img src="'.$img_u.'"   style="width: 100%;height: NaN;">' ; 
       }else{  $img="";  }
      
                    
               if($m==1){echo '<div class="row" >';}             

                   des_table();$m++;


		if($m==4){ des_widget();$m=1;echo '</div>';}
					
                             
             
             
             unset($post);
             
}

?>

