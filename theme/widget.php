<style>
.bb{
    width: 200px;
    height: 150px;
    background-color: #FFFFFF;
    box-shadow: 5px 5px 10px 1px #BFBFBF;
  padding: 10px;

}
</style>
<?php
  
  include $theme.'top.php';

  include $theme.'slider.php';

function des_post(){
 global $style,$img,$post,$jump,$jump1,$dir,$step,$req;
?>
     
        
       <div class="col-<?=$step;?> bb" border="0" style="min-height: 150px;max-height: 150px;overflow: hidden;background-color: white;">
        <a href="index.php?dir=<?=$req;?>"><?=$img; ?></a>
        <a href="index.php?dir=<?=$req;?>"><h1><?=$post['titlos']; ?></h1></a>
         <?=$post['keimeno']; ?>
         
         <span style="float: right;font-size: small;">edit by:<?=$post['name'];?>
        <br/><?=date("d F Y H:i:s.", filectime($dir));  ?></span>
       </div> 
        
        
<?php
}


$m=0;
  for($q=sizeof($post_active)-1;$q>=0;$q--){
    
    $req=$post_active[$q]['dir_name'];
    $dir=$post_path.$post_active[$q]['dir_name'];
 
       $post=load_post($dir);
       $img_url=find_img($dir.'/');
   
       if($img_url!=null){
              if(isset($post['first_img_url'])){$img_u=$dir.'/'.$post['first_img_url'];}else{$img_u=$img_url[0];}
          
         $img= '<img src="'.$img_u.'"   style="max-height: 150px;float: left;">' ; 
       }else{  $img="";  }
      

     $step=4;
     if($m==3) {$m=1;echo '<div class="col-12" style="min-height: 10px;"></div>';}


             des_post();
             $m++;
             unset($post);
             
}



    

?>
