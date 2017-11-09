<?php

include "include/start.php";
include "config.php";

$img="";
     
if(isset($_REQUEST['del'])){ 
  if($_REQUEST['del']!=''){
   unlink($_REQUEST['del']);
    $_REQUEST['del']="";
    }
   
} 


if(isset($_POST['dir_name'])){	$dir=$base_path.$_POST['dir_name'].'/';
                              $_REQUEST['titlos']=$_POST['titlos'];
                             }else{$dir=$base_path.$_REQUEST['dir_name'].'/';}

     	$img_url = glob($dir."*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE) ;
       
/////load data
    $post=load_post($dir);


if (isset($_FILES['image'])) {
    
    function getExtension($str) {

         $im = strrpos($str,".");
         if (!$im) { return ""; } 
         $l = strlen($str) - $im;
         $ext = substr($str,$im+1,$l);
         return $ext;
 }
 $error='';
$total = count($_FILES['image']['name']);
$now_find=count($img_url);

if($total>$max_photo-$now_find) $total=$max_photo-$now_find;

// Loop  file
for($i=0; $i<=$total; $i++) {
  $image =$_FILES["image"]["name"][$i];
        $uploadedfile = $_FILES['image']['tmp_name'][$i];
        if($image){
            $filename = stripslashes($_FILES['image']['name'][$i]);
            $extension = strtolower(getExtension($filename));
            if (($extension == "jpg") || ($extension == "jpeg") || ($extension == "png") || ($extension == "gif")){
             
                $newname = neo_namef($filename); //"newphoto".($total+$i).".".$extension;
                $size=filesize($_FILES['image']['tmp_name'][$i]);
                
                if($extension=="jpg" || $extension=="jpeg" ){
                    $uploadedfile = $_FILES['image']['tmp_name'][$i];
                    $src = imagecreatefromjpeg($uploadedfile);
                }else if($extension=="png"){
                    $uploadedfile = $_FILES['image']['tmp_name'][$i];
                    $src = imagecreatefrompng($uploadedfile);
                }else{
                    $src = imagecreatefromgif($uploadedfile);
                }
                list($width,$height)=getimagesize($uploadedfile);

                $newwidth=$new_width_photo; //600;
                $newheight=($height/$width)*$newwidth;
                $tmp=imagecreatetruecolor($newwidth,$newheight);

                

                imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);

                
                $filename = $base_path.$_POST['dir_name'].'/'.$newname;
               
                imagejpeg($tmp,$filename,90); 
                imagedestroy($src);
                imagedestroy($tmp);
                
            } 

      }
}



$img_url = glob($dir."*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE) ;

}

if(isset($_POST['first'])){
   
   
   $post['first_img_url']=str_replace($dir,'',$_POST['first']);

   save_post($post,$base_path.$_POST['dir_name']);
   

}


include 'include/header.php';
?>
<h1>Upload image to post :</h1>
 <h2><?=$_REQUEST['titlos'] ?></h2>
<?php
       if($img_url!=null){
        echo '<table border="1">
              <form action="upload.php" method="post">
              <input type="hidden" name="dir_name" value="'.$_REQUEST['dir_name'].'" />
              <input type="hidden" name="titlos" value="'.$_REQUEST['titlos'].'" />';
          for($w=0;$w<count($img_url);$w++){
              
            if(str_replace($dir,'',$img_url[$w])==$post['first_img_url']) {$first='checked';}else{ $first='';}
           echo '<table border="1px"><td><a href="upload.php?del='.$img_url[$w].'&dir_name='.$_REQUEST['dir_name'].'">Delete photo X </a><img id="img'.$w.'" src="'.$img_url[$w].'" width="250px" height="NaN" align="left" style="'.$post[$q]['photo_efe'].'"  /></td>
  <th>Set first photo =<input type="radio" value="'.$img_url[$w].'" name="first" '.$first.'> </th></table>';
           
          }
        echo '<input type="submit" nane="set" value="update"></form></table>';
      }

if(count($img_url)<$max_photo){
?>
<br/><br/>
    <table border="1px"><tr><td>
     <form enctype="multipart/form-data" action="upload.php" method="post" name="Login_Form">
        <input type="hidden" name="titlos" value="<?=$_REQUEST['titlos'];?>" />
        <input type="hidden" name="dir_name" value="<?=$_REQUEST['dir_name'];?>" />
          <label>Add new photo   </label><input id="image" type="file"  name="image[]"  multiple>
            <p id='demo'><span onclick="image(0)">more</span></p>
        <input  type="submit" name="submit" value="Upload photo" class="Button3" />
     </form>
    </td></tr>
    </table>
<script>
   var metra=<?=count($img_url) ; ?>;
   var poso=<?=$max_photo; ?> ;
      function image(x){
  	metra=metra+1;
  	if(metra<=poso){
 	var ola=document.getElementById("demo").innerHTML;
 	ola=ola.replace('<span onclick="image(0)">more</span>','');
 	document.getElementById("demo").innerHTML = ola+'<input id="image" type="file"  name="image[]" "><br><br><span onclick="image(0)">more</span>';
  }
}
</script>
<?php
}


include "include/footer.php";
?>
