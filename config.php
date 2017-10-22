<?php

$secret_path='admin_secret_path/'; // rename this




include  $secret_path.'config.php';

$post_path=str_replace("../",'',$base_path);



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


$cat=loaddata('cat');
$post=loaddata('post');
$setting=loaddata('setting');

// find active category
   $cat_active=array();
   for($q=0;$q<=$make_cat;$q++){
         if($cat[$q]['active']=='active' && trim($cat[$q]['name'])!="") $cat_active[]=$cat[$q]['name'];
    }
 unset($cat);

//find publish 
 $post_active=array();$metra=0;
 for($q=sizeof($post);$q>=0;$q--){
   if($post[$q]['publish']=='yes') $post_active[$metra]['dir_name']=$post[$q]['dir_name'];$metra++;
 }
 unset($post);




?>
