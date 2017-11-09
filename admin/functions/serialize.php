<?php
/*******************************
save data example to users data  ----->>>     savedata($users,"users"); 

load data example to users data  ------>>>  $users=loaddata("users");
	
*******************************/
function load_post($path){
   // load data
	$recoveredData = file_get_contents($path."/post.txt");

	// unserializing to  array
	$recoveredArray = unserialize($recoveredData); 

        return $recoveredArray;
}


function save_post($array,$path){
        
      $serializedData = serialize($array);
   
	// save serialized data in a text file
	file_put_contents($path."/post.txt", $serializedData);   

}



function loaddata($file){
  global $database_path;
	// load data
	$recoveredData = file_get_contents($database_path.$file.".txt");

	// unserializing to  array
	$recoveredArray = unserialize($recoveredData); 

        return $recoveredArray;
  
}

function savedata($array,$file){
  global $database_path;
  
  $serializedData = serialize($array);
   
	// save serialized data in a text file
	file_put_contents($database_path.$file.".txt", $serializedData);
   
} 

 

      
///ftiaxni to onoma -------------------------------------------
function  neo_name($string) { return strtr($string, array('~'=>'','}'=>'','{'=>'',']'=>'','['=>'','|'=>'','?'=>'',','=>'','/'=>'','»'=>'','«'=>'','>'=>'','<'=>'',':'=>'','\\'=>'','='=>'','-'=>'','+'=>'',')'=>'','('=>'','*'=>'','&'=>'','Ά'=>'A','Έ'=>'E','Ή'=>'H','Ί'=>'I','Ό'=>'O','Ύ'=>'Y','Ώ'=>'W',
'^'=>'','%'=>'','$'=>'','#'=>'','@'=>'','!'=>'',"'"=>'','"'=>'',','=>'','.'=>'',' '=>'_','Α' => 'A','Β' => 'V', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'I', 'Θ' => 'Th', 'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => 'Ks', 'Ο' => 'O', 'Π' => 'P', 'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'Ps', 'Ω' => 'O', 'α' => 'a', 'β' => 'v', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'i', 'θ' => 'th', 'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => 'ks', 'ο' => 'o', 'π' => 'p', 'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'o', 'ς' => 's', 'ά' => 'a', 'έ' => 'e', 'ή' => 'i', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ώ' => 'o', 'ϊ' => 'i', 'ϋ' => 'y', 'ΐ' => 'i', 'ΰ' => 'y',' '=>'_' )); 
} 

///ftiaxni to onoma  tis photo-------------------------------------------

function  neo_namef($string) { return strtr($string, array('~'=>'','}'=>'','{'=>'',']'=>'','['=>'','|'=>'','?'=>'',','=>'','/'=>'','»'=>'','«'=>'','>'=>'','<'=>'',':'=>'','\\'=>'','='=>'','-'=>'','+'=>'',')'=>'','('=>'','*'=>'','&'=>'','^'=>'','%'=>'','$'=>'','Ά'=>'A','Έ'=>'E','Ή'=>'H','Ί'=>'I','Ό'=>'O','Ύ'=>'Y','Ώ'=>'W',
'#'=>'','@'=>'','!'=>'',"'"=>'','"'=>'',','=>'',' '=>'_','Α' => 'A', 'Β' => 'V', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'I', 'Θ' => 'Th', 'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => 'Ks', 'Ο' => 'O', 'Π' => 'P', 'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'Ps', 'Ω' => 'O', 'α' => 'a', 'β' => 'v', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'i', 'θ' => 'th', 'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => 'ks', 'ο' => 'o', 'π' => 'p', 'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'o', 'ς' => 's', 'ά' => 'a', 'έ' => 'e', 'ή' => 'i', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ώ' => 'o', 'ϊ' => 'i', 'ϋ' => 'y', 'ΐ' => 'i', 'ΰ' => 'y',' '=>'_' )); 
} 

function remove($str){
    $str=strtr($str,array('<br/>'=>'&#013;'));
  return $str;
}


?>
