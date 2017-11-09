<?php 

include "include/start.php";
include "config.php";


$post=loaddata('post');
$cat=loaddata('cat');

$error="";

// find active category
   $cat_active=array();
   for($q=0;$q<=$make_cat;$q++){
         if($cat[$q]['active']=='active' && trim($cat[$q]['name'])!="") $cat_active[]=$cat[$q]['name'];
    }
   if(sizeof($cat_active)==0) {$disable="disabled";$error.="Error not active category... <br/>not allow to save ..please edit category first";}


if ($_POST['save']=='Edit') {
    
    $titlos=neo_name(@trim($_POST['titlos']));
    if (strlen($titlos)>50) $titlos=substr($titlos,0,50);
     
          
     if($_POST['titlos']!=$_POST['old_titlos']){
     
        for($w=0;$w<=sizeof($post);$w++){

         if($_POST['titlos']==$post[$w]['titlos'] ) $error="Duplicate  title error";
         

        } 

       
     }else{
            for($w=0;$w<=sizeof($post);$w++){

         if($_POST['titlos']==$post[$w]['titlos'] ) $id=$w;
         

        } 
       }
          //make dirname
            
           
              $dir=neo_name(trim(@$_POST['cat_name']));
                 
                             
               $dir_post=$dir.'/'.$titlos;
             
    
  
       
         // make dir
      if ($error=='' && $id!=false){
              rename($base_path.$_POST['old_name'],$base_path.$dir_post);     
       
                
     // save mini post to database  
       
    
      $post[$id]['id']=$id;
      $post[$id]['dir_name']=$dir_post;
      $post[$id]['titlos']=$_POST['titlos'];
      $post[$id]['cat_name']=$_POST['cat_name'];
         savedata($post,'post');
    
     

    
    // add more data to save post path
    $post_=array();
    $post_['id']=$id;
    $post_['titlos']=$_POST['titlos'];
    $post_['cat_name']=$_POST['cat_name'];
    $post_['keimeno']=$_POST['keimeno'];
    $post_['mini_keimeno']=$_POST['mini_keimeno'];
    $post_['keyword']=$_POST['keyword'];
    $post_['grafias']=$_SESSION['UserData']['Username'];
    $post_['name']=$_SESSION['UserData']['Name'];
    //$post_['image']='no';
    $post_['dir_name']=$dir_post;
    //$post_['publish']='no';
    $post_['time']=date('H:i d-m-y');
    
    
    save_post($post_,$base_path.$dir_post);
    }
 header ('Location: post_show.php');
 die();
      

}


if ($_POST['save']=='Save') {

$titlos=neo_name(@trim($_POST['titlos']));
    if (strlen($titlos)>50) $titlos=substr($titlos,0,50);
    
      for($w=0;$w<=sizeof($post);$w++){

         if($_POST['titlos']==$post[$w]['titlos'] ) $error='Duplicate title';

       } 
          //make dirname
            
           
              $dir=neo_name(trim(@$_POST['cat_name']));
                 
                             
               $dir_post=$dir.'/'.$titlos;
             
    
  
       
         // make dir
      if ($error==''){
              mkdir($base_path.$dir_post, 0777, true);     
       
                
     // save mini post to database  
      $id=sizeof($post)+1;
    
      $post[$id]['id']=$id;
      $post[$id]['dir_name']=$dir_post;
      $post[$id]['titlos']=$_POST['titlos'];
      $post[$id]['cat_name']=$_POST['cat_name'];
      $post[$id]['grafias']=$_SESSION['UserData']['Username'];
         savedata($post,'post');
    
     

    
    // add more data to save post path
    $post_=array();
    $post_['id']=$id;
    $post_['titlos']=$_POST['titlos'];
    $post_['cat_name']=$_POST['cat_name'];
    $post_['keimeno']=$_POST['keimeno'];
    $post_['mini_keimeno']=$_POST['mini_keimeno'];
    $post_['keyword']=$_POST['keyword'];
    $post_['grafias']=$_SESSION['UserData']['Username'];
    $post_['name']=$_SESSION['UserData']['Name'];
    $post_['image']='no';
    $post_['dir_name']=$dir_post;
    $post_['publish']='no';
    $post_['time']=date('H:i d-m-y');
    
    
    save_post($post_,$base_path.$dir_post);
 header ('Location: post_show.php');
 die();
    }  
}        
   




include "include/header.php";


if(isset($error)) echo $error.PHP_EOL; 

if(isset($_REQUEST['q'])=='edit'){
     echo '<h1>Edit post :</h1>';
     $_POST=load_post($base_path.$_REQUEST['dir_name']);

    }else{echo '<h1>Add new post :</h1>';}

 ?>

<style>
  .cat_select{
   border: 0px;
   background-color: yellow;
  }
</style>
<form enctype="multipart/form-data" action="post.php" method="post" name="Login_Form">
   <input type="hidden" name="old_name" value="<?=$_REQUEST['dir_name']; ?>" />
  <table width="400" border="1" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php
      echo $msg;
    ?>
    <tr>
      <td align="right" valign="top">TITLOS </td>
      <td>
       <input id="titlos" name="old_titlos" type="hidden" value="<?=trim($_POST['titlos']); ?>" >
      <input id="titlos" name="titlos" type="text"  value="<?=trim($_POST['titlos']); ?>" class="Input" size="70" required></td> 
      <td>Category : <select class="cat_select" name="cat_name" value="">                                                      
          <?php
            for($q=0;$q<count($cat_active);$q++){
              if($_POST['cat_name']==$cat_active[$q]) {$selected="selected";}else{$selected="";}
              echo '<option value="'.$cat_active[$q].'" '.$selected.'>'.$cat_active[$q].'</option>';
            }
          ?>
      </select></td>
       </tr>
       <tr>
           <td align="right" valign="top"> Keimeno</td>
          <td><textarea id="keimeno" name="keimeno"  rows="16" cols="90" required><?=remove(strip_tags(trim($_POST['keimeno']),'<br><p><h><img><div>')) ;?>
               </textarea></td>
         <td></td>                                
       </tr>
       <tr>
           <td>Social mini  descr.</td>
           <td>
               <textarea id="mini_keimeno" name="mini_keimeno" rows="8" cols="50" required >  
               <?=remove(trim($_POST['mini_keimeno'])); ?>                                  
               </textarea><br/><br/>
                Keyword ->example(hi,good,bye):
                <input type="text" name="keyword" value="<?=trim($_POST['keyword']);  ?>" size="70" required/>                         
           </td>
           <td>
               
           </td>
       </tr>
       <tr>
           <td>&nbsp;</td>
           <td>
             <?php 
               echo $error;
               if(isset($_REQUEST['q'])=='edit')
               {echo '<input  type="submit" name="save" value="Edit" class="save" onclick="kane();"'.$disable.'>';}
                 else{ echo '<input  type="submit" name="save" value="Save" class="save" onclick="kane();" '.$disable.'>';}
             ?>
                      <script>
                        function vres(x,kl){
                         
                            var tt=x;
                           var tt=tt.substring(4);
                            var t='<a href="http://'+x+'" id="ok" target="blank_">';
                            var tt=tt+'</a>';
                            
                            return t+tt;
                        }
                        function kane(){
                         var k=document.getElementById('keimeno').value;
                         var m_k=document.getElementById('mini_keimeno').value;
                          k=k.trim();
                          m_k=m_k.trim();
                          // make url 
                                                    
                          k=k.replace(/http|https|www/gi, function myFunction(x){return x.toLowerCase();});
                          k=k.replace(/http:\/\/www.|https:\/\/www./gi, 'www.');
                          k = k.replace(/((www.)[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?)/gi, '<a href="http://$1" target="blank_">$1</a>');


                         // make enter 
                         k=k.replace(/\r?\n/g, '<br/>');  
                          m_k=m_k.replace(/\r?\n/g, '<br/>'); 
                         document.getElementById('keimeno').value=(k);
                         document.getElementById('mini_keimeno').value=(m_k);
                         }
                      </script>

                                                                                               </td>
       </tr>
   
  </table>
</form>




<?php





include 'include/footer.php';
?>
