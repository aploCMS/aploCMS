<?php


include 'config.php';
include 'functions/serialize.php';


///// first time set users

   
  $q=1;
  $users[$q]['username']='admin';
  $users[$q]['active']='active';
  $users[$q]['password']='admin';
  $users[$q]['rolos']='admin';
  $users[$q]['name']='administrator';
     
    for($q=2;$q<=$make_users;$q++){

         $users[$q]['username']='new_user'.$q;
         $users[$q]['active']='';
         $users[$q]['password']=$q;
         $users[$q]['rolos']='author';
         $users[$q]['name']='nickname';
     
   }
    savedata($users,'users');
    

///end set users //////////////////////////////////////////////////////////

///// make category

 for($q=1;$q<=$make_cat;$q++){

         $cat[$q]['name']='cat_name'.$q;
         $cat[$q]['active']='';
         $cat[$q]['seira']=$q;
         $cat[$q]['empty']='yes';
     mkdir($base_path.$cat[$q]['name'], 0777, true);
   }
    savedata($cat,'cat');
    
//////

 /// make post

 $post=array(array());
 
  savedata($post,'post');

// make setting
  $setting=array();

   savedata($setting,'setting');

 echo "install ok";

 sleep(3);
 
 header('Location: index.php');
?> 

