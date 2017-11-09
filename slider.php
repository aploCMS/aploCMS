<form name="slide_images_myslide" id="slideShow_myslide">
<div class="slide_images">
<div class="slide_box">
  <!--<div class="slide_box_head">My Slide Show title</div>-->
  <div class="slide_box_image">
    <a id="img_link_myslide" href="photo1" target="_blank">
    <img src="photo1" name="show" width="400" height="300">
   </a>

  </div>
  <div class="slide_box-name">
  
 <div class="slide_box-cntrl">
 
   <input type="button" onclick="rotate_myslide(x_myslide-1);" value="&lt;&lt;" title="Last Picture">
   <input type="button" name="s_s_btn" onclick="this.value=((this.value=='Stop')?'Start':'Stop');auto_play_myslide();" value="Start" title="Autoplay" style="width:75px;">
   <input type="button" onclick="rotate_myslide(x_myslide+1);" value="&gt;&gt;" title="Next Picture">
   
  </div>
  </div>
  </div>
</form>

<style>
.slide_images{
   border: solid 1px #8AFFFD;
   box-shadow: 0px 0px 0px 1px #AAAAAA;
   display: inline-block;
   border-radius: 5px;
 }
.slide_box {
   border: solid 5px #57D6D4;
   text-align: center;
   border-radius: 5px;
   border-top: 0;
}
.slide_box_head {
  background-color: #57D6D4;
    padding: 7px 5px;
   font-weight: bold;
   font-size: 15px;
   border-bottom: solid 1px #aaa;
   font-family: 'Proxima', Helvetica, sans-serif;
}
.slide_box_image {
    padding: 5px 5px;
    text-align: center;
    background-color: #fff;
    border-bottom: solid 1px #aaa;
    position: relative;
}
.slide_box-name {
   padding: 5px 5px;
   border-bottom: solid 1px #aaa;
}
.slide_box-cntrl {
   padding: 5px 5px;
   border-bottom: solid 1px #aaa;
   background-color: #E8E8E8;
}
div#slidecount_myslide {
   float: left;
}
div#image_name_myslide {
   position: absolute;
   padding: 5px 1px;
   background-color: rgba(255, 255, 255, 0.50);
   left: 6px;
   right: 6px;
   bottom: 6px;
   border: solid 1px #FFF;
   font-family: 'Proxima', Helvetica, sans-serif;
   font-weight: bold;
   color: #565656;
 }
</style>

<script>
  var x_myslide = 0;
   function rotate_myslide(num){
      a = document.slide_images_myslide.slide_myslide;
      x_myslide = num % a.length;
      if( x_myslide < 0) x_myslide = a.length-1;
      document.slide_images_myslide.show.src = a.options[x_myslide].value;
      b = a.options[x_myslide].getAttribute("data-href");
      if(b === null){b = "#";}
      document.getElementById("img_link_myslide").href = b;
      a.selectedIndex = x_myslide;
      document.getElementById("slidecount_myslide").innerHTML= 'Image '+(x_myslide+1)+' of '+a.length;
      document.getElementById("image_name_myslide").innerHTML= a.options[x_myslide].innerHTML;
    }

    function auto_play_myslide() {
       if(document.slide_images_myslide.s_s_btn.value == "Stop"){
          rotate_myslide(++x_myslide);
          setTimeout("auto_play_myslide()", 2000);
       }
     }

    function load_images_myslide() {
        var a = document.slide_images_myslide.slide_myslide;
        b = a.options;
        div = document.createElement('div');
        div.setAttribute('style','width:0px;height:0px');
      for(var i = 0; i < a.length; i++){
        img = document.createElement('img');
        img.setAttribute('src',b[i].value);
        img.setAttribute('style','width:0px;height:0px');
        div.appendChild(img);
       }
        document.getElementsByTagName('body').item(0).appendChild(div);
    }
    window.onload = load_images_myslide();
</script>



