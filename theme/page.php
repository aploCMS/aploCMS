<style>
html {
  box-sizing: border-box;
}

a{
  text-decoration: none;
  color: #004e80;

}
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 80%;
  margin-bottom: 16px;
  padding: 0 8px;
}


@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>

<?php
  
  

  

    if(file_exists($post_path.$_REQUEST['dir'])) {
       $post=load_post($post_path.$_REQUEST['dir']);
       }else{include $theme.'footer.php'; die();}


    $dir=$post_path.$_REQUEST['dir'];
    $img_url=find_img($dir.'/');

        if($img_url!=null){
         for($q=0;$q<count($img_url);$q++){
             //echo '<img src="'.$img_url[$q].'" class="img" style="ablolute">   ';
           }
        }else{$img_url='';}
if($img_url!=null){
              if(isset($post['first_img_url'])){$img_u=$dir.'/'.$post['first_img_url'];}else{$img_u=$img_url[0];}
}

   include $theme.'head_page.php';


    include $theme.'top.php';


?>
<div class="row" >
 <div class="column" >
    <div class="card" style="">
       <div style="background-color: #f2f2f2;max-width:50%;"><h1><?=$post['titlos']; ?></h1></div>
      <?php include $theme.'/slider.php';?>
      <div class="container" style="background-color: white;">
        
        <p class="title"><?=$post['cat_name'];?></a></p>
        <p style="min-height: 600px;font-size:large;"><?=$post['keimeno']; ?></p>
        <p><span style="float: right;font-size: small;">edit by:<?=$post['name'];?>
        <br/><?=date("d F Y H:i:s.", filectime($dir));  ?></span></p>
        <p></p>
        <p>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://www-peritheatrou-net.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
<script id="dsq-count-scr" src="//wwwperitheatrounet.disqus.com/count.js" async></script></p>
      </div>
    </div>
 



<style>
.column_mini {
   float: right;
  width: 20%;
  margin-bottom: 16px;
  padding: 0 8px;
}
</style>
  <div class="column_mini" >
  
    <div class="card" style="min-height: 670px;max-height: 1600px;">
       <div class="container">
        <?php for($q=0;$q<sizeof($widget_active);$q++) echo $widget_active[$q];?>
      </div>
    </div>
  </div>
	    
  

</div>       
