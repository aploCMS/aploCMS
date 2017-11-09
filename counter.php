<?php
function getrealip()
{
 if (isset($_SERVER)){
if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
if(strpos($ip,",")){
$exp_ip = explode(",",$ip);
$ip = $exp_ip[0];
}
}else if(isset($_SERVER["HTTP_CLIENT_IP"])){
$ip = $_SERVER["HTTP_CLIENT_IP"];
}else{
$ip = $_SERVER["REMOTE_ADDR"];
}
}else{
if(getenv('HTTP_X_FORWARDED_FOR')){
$ip = getenv('HTTP_X_FORWARDED_FOR');
if(strpos($ip,",")){
$exp_ip=explode(",",$ip);
$ip = $exp_ip[0];
}
}else if(getenv('HTTP_CLIENT_IP')){
$ip = getenv('HTTP_CLIENT_IP');
}else {
$ip = getenv('REMOTE_ADDR');
}
}
return $ip; 
}

$analisi=loaddata('analytics');
$q=count($analisi);
$analisi['ip'][$q]=getrealip();
$analisi['eide'][$q]= $_SERVER['REQUEST_URI'];
$analisi['time'][$q]=date('Y-m-d H:i:s');

function savedata($array,$file){
  global $secret_path,$database_path;
  
  $serializedData = serialize($array);
   
	// save serialized data in a text file
	file_put_contents($secret_path.$database_path.$file.".txt", $serializedData);
   
} 
savedata($analisi,'analytics');
?>
