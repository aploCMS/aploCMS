<?php


for($q=sizeof($post_active)-1;$q>=0;$q--){
 
  $post=load_post($post_path.$post_active[$q]['dir_name']);
  echo '
       <div border="0" style="min-height: 150px;max-height: 150px;width: 90%;overflow: hidden;background-color: white;">
        <h1>'.$post['titlos'].'</h1>
        '.$post['keimeno'].'<br/>
        
       </div> 

       ';

  unset($post);
}


?>
