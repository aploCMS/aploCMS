<style>
.post{
  margin-top: 50px;
    margin-bottom: 50px;
    margin-right: 80px;
    margin-left: 80px;
  }

.edit{
  word-spacing: 30px;
  float: right;
 vertical-align:-50px;
  } 

.titlos{
  float: left;
  font-size: large;
  padding-top: 0px;
  }
.category{
float: left;
}
.username{
 float: right;
 }

</style>

<?php

include "include/start.php";
include "config.php";


$post=loaddata('post');
$cat=loaddata('cat');

 


if($_REQUEST['public']=='publish'){
     for($q=sizeof($post);$q>0;$q=$q-1){

	    if($post[$q]['dir_name']==$_REQUEST['dir_name']  )    {
               $mini_post=load_post($base_path.$_REQUEST['dir_name']);
               $mini_post['publish']='yes';
               save_post($mini_post,$base_path.$_REQUEST['dir_name']);
              unset($mini_post);
               
               $post[$q]['publish']='yes';
              savedata($post,'post');
             
            }
     }
}

if(isset($_REQUEST['del'])=='del'){

////  php net  manual function to del dir-subdir/////
  function rrmdir($src) {
     
    $dir = opendir($src);
    while(false !== ( $file = readdir($dir)) ) {
           if($file=='') exit;
        if (( $file != '.' ) && ( $file != '..' )) {
            $full = $src . '/' . $file;
            if ( is_dir($full) ) {
                rrmdir($full);
            }
            else {
                unlink($full);
            }
        }
    }
    closedir($dir);
    rmdir($src);
  }
//////// end php ///////////////////
     
	for($q=sizeof($post);$q>0;$q=$q-1){

	    if($post[$q]['dir_name']==$_REQUEST['dir_name']  )    {
               
                   rrmdir($base_path.$post[$q]['dir_name']);
                
                 unset($post[$q]);
             }
         
        
         
        }
     savedata($post,'post');
}
?>

  
<?php
function show_post(){
  global $cat,$post,$q,$base_path; 
      if($post[$q]['titlos']!=''){
     $img="";
      

     	$dir=$base_path.$post[$q]['dir_name'].'/';
     	$img_url = glob($dir."*.{jpg,gif,png,jpeg}", GLOB_BRACE) ;
        if($img_url!=null){
        $img='<img id="img" src="'.$img_url[0].'" width="50px" height="NaN" align="left" style="'.$post[$q]['photo_efe'].'"  />';
        }
        //load data
           $post_=load_post($base_path.$dir);
    
     ?><table width="80%">
          <tr>
            <th colspan="4"><div id="post<?=$q ?>"  class="post">
             
		<div class="titlos">Titlos : <?=$post_['titlos'] ?><br/> 
                Category : <?=$post[$q]['cat_name'] ?></div>
                   
                <label class="nickname">Edit by : <?=$post_['name'] ?>
             </th>
           </tr>
          <td rowspan="2"><?=$img ?></td>
            <td></td>
    <td colspan="2"></td>
  </tr>
            <tr>
    <td colspan="2">    <label class="mini_keimeno">-> <?=$post_['keimeno'] ?> </label>  </td>
      <td>      
         <div class="edit">
            <a href="upload.php?dir_name=<?=$post_['dir_name']; ?>&titlos=<?=$post_['titlos'] ?>">Photos</a>
           <a href="post.php?q=edit&dir_name=<?=$post_['dir_name']?>">Edit</a>&nbsp; 
          
            <?php if($post_['publish']=='yes') $yes='->yes'; ?>
           <a href="post_show.php?public=publish&dir_name=<?=$post_['dir_name'] ?>">Publish<?=$yes; ?></a>
           

	 </div> 
     </td>
 </tr><tr><td> <a href="post_show.php?del=del&dir_name=<?=$post_['dir_name'] ?>" style="float: left;"> Delete </a></div></td>
             </tr>
       </table>
         <hr width="80%" align="center">
    <?php
      unset($post_); 
     }
}
 

include "include/header.php";
  
  
 
    for($q=sizeof($post);$q>=0;$q--){
     if ($_SESSION['UserData']['rolos']=="admin"){
        show_post();
       }
     if ($_SESSION['UserData']['rolos']=="author" && $post[$q]['grafias']==$_SESSION['UserData']['Username'] ){
        show_post();
       }
 }



?>
