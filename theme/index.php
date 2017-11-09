<?php
/////load system data 


 include 'system/system.php';

/////////////////////////////

include $theme.'header.php';

             if(isset($_REQUEST['dir'])){ 

                        include $theme.'page.php';
                        }else{
                         include $theme.'head.php';
                         include $theme.'body.php';
                   }
include $theme.'footer.php';



?>
