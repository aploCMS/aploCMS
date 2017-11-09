<?php

function find_img($path){

  $img_url = glob($path."*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE) ;
 return $img_url;
}


function load_post($path){
   // load data
 
	$recoveredData = file_get_contents($path."/post.txt");

	// unserializing to  array
	$recoveredArray = unserialize($recoveredData); 

        return $recoveredArray;
}

function loaddata($file){
  global $secret_path,$database_path;
	// load data
	$recoveredData = file_get_contents($secret_path.$database_path.$file.".txt");

	// unserializing to  array
	$recoveredArray = unserialize($recoveredData); 

        return $recoveredArray;
  
}

/////// load system data 

$cat=loaddata('cat');
$post=loaddata('post');
$setting=loaddata('setting');
$widget=loaddata('widget');

// find active category 
   $cat_active=array();
   for($q=0;$q<=$make_cat;$q++){
         if($cat[$q]['active']=='active' && trim($cat[$q]['name'])!="") $cat_active[]=$cat[$q]['name'];

    }
 unset($cat);

//find publish 
 $post_active=array(array());$metra=1;
 for($q=sizeof($post);$q>=0;$q--){
   if($post[$q]['publish']=='yes') {$post_active[$metra]['dir_name']=$post[$q]['dir_name'];$metra++;}
 }
 unset($post);


//find widget                 --- prosoxi widget === cat   for now
$widget_active=array();
for($q=0;$q<=$make_cat;$q++){
         if($widget[$q]['active']=='active' && trim($widget[$q]['html'])!="") $widget_active[]=$widget[$q]['html'];

    }
unset($widget);


?>
