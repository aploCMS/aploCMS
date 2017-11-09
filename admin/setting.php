<?php 


include "include/start.php";
include "config.php";

$setting=loaddata('setting');

if ($_POST['Save']=='Save'){

   if(isset($_FILES['logo']) ){  
      $filename = $_FILES['logo']['tmp_name'];
      $img='logo';
       
     
                 if ($_FILES[$img]["error"] > 0){
                     $error="Error upload file: " . $_FILES[$img]["error"];
                    }else{

                           $temp = explode(".", $_FILES["logo"]["name"]);
                           $newfilename = 'logo.'. end($temp);
            		if (move_uploaded_file($_FILES['logo']['tmp_name'], '../'.$newfilename)) {
                           $setting['logo']=$newfilename;
            		} else {
                 	$error="Upload failed";
			}
               
                 }
        
   }
   
   
  
  
  $setting['site_name']=$_POST['site_name'];
  $setting['site_desc']=$_POST['site_desc'];
  $setting['site_key']=$_POST['site_key'];
  savedata($setting,'setting');
 
}
include 'include/header.php';
?>



    <h1>Settings </h1>
		<form id="setting" class="setting" enctype="multipart/form-data" method="post" action="" >
					<div class="form_description">
			<h2></h2>
			<p></p>
		</div>						
			<ul >
			
						<li>
		<label class="description" >Favicon icon</label>
		<div>
			<img src="../favicon.ico" alt="NO find favicon ico please upload one" />
		</div>  
		</li>		<li>
		<label class="description" >Logo image </label>
		<div>
                        <img src="../<?=$setting['logo'];?>" alt="LOGO" width="50px" height="NaN">
			<input id="logo" name="logo" class="element file" type="file"/> 
		</div>  
		</li>		<li id="">
		<label class="description" >Site name </label>
		<div>
			<input id="site_name" name="site_name" class="element text medium" type="text" maxlength="255" value="<?=$setting['site_name']; ?>"/> 
		</div> 
		</li>				<li>
		<label class="description" >Site description </label>
		<div>
			<textarea id="site_desc" name="site_desc" class="element textarea medium" cols="50" rows="3"><?=$setting['site_desc']; ?></textarea> 
		</div> 
		</li>         <li>
		<label class="description" >Site keyword (by ,) </label>
		<div>
			<textarea id="site_key" name="site_key" class="element textarea medium" cols="80"><?=$setting['site_key']; ?></textarea> 
		</div> 
		</li>
			
					<li class="buttons">
		<?php if ($_SESSION['UserData']['rolos']=="admin"){$disable='';}else{$disable='disabled';}?>	    			    
				<input id="saveForm" class="Save" type="submit" name="Save" value="Save" <?=$disable?>/>
		</li>
			</ul>
		</form>	

<?php
include 'include/footer.php';
?>
