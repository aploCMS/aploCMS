
<style>
.skia{
-moz-box-shadow: 0px 6px 5px #000; -webkit-box-shadow: 0px 6px 5px #000; box-shadow: 0px 6px 5px #000;

}
.photo1{
border-radius: 15% 15% 15% 15%;
    -moz-border-radius: 15% 15% 15% 15%;
    -webkit-border-radius: 15% 15% 15% 15%;


     height: NaN;
    
    padding: 1px;
}

.photo2{
 border-radius: 138% 138% 138% 138%;
    -moz-border-radius: 138% 138% 138% 138%;
    -webkit-border-radius: 138% 138% 138% 138%;


    height: NaN;
    
    padding: 1px;
}
.photo3{
border-radius: 15% 15% 138% 138%;
    -moz-border-radius: 15% 15% 138% 138%;
    -webkit-border-radius: 15% 15% 138% 138%;


     height: NaN;
    
    padding: 1px;

}

.photo4{
 border-radius: 138% 138% 14% 13%;
    -moz-border-radius: 138% 138% 14% 13%;
    -webkit-border-radius: 138% 138% 14% 13%;


    height: NaN;
    
    padding: 1px;
}

.animated { 
   -webkit-animation-duration: 1s; 
   animation-duration: 1s; 
   -webkit-animation-fill-mode: both; 
   animation-fill-mode: both; 
}

@-webkit-keyframes bounceIn { 
    0% { 
        opacity: 0; 
        -webkit-transform: scale(.3); 
    } 

    50% { 
        opacity: 1; 
        -webkit-transform: scale(1.05); 
    } 

    70% { 
        -webkit-transform: scale(.9); 
    } 

    100% { 
         -webkit-transform: scale(1); 
    } 
} 

@keyframes bounceIn { 
    0% { 
        opacity: 0; 
        transform: scale(.3); 
    } 

    50% { 
        opacity: 1; 
        transform: scale(1.05); 
    } 

    70% { 
        transform: scale(.9); 
    } 

    100% { 
        transform: scale(1); 
    } 
} 

.bounceIn { 
    -webkit-animation-name: bounceIn; 
    animation-name: bounceIn; 
}



@-webkit-keyframes bounceInLeft { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(-2000px); 
    } 
    60% { 
        opacity: 1; 
        -webkit-transform: translateX(30px); 
    } 
    80% { 
        -webkit-transform: translateX(-10px); 
    } 
    100% { 
        -webkit-transform: translateX(0); 
    } 
} 

@keyframes bounceInLeft { 
    0% { 
        opacity: 0; 
        transform: translateX(-2000px); 
    } 
    60% { 
        opacity: 1; 
        transform: translateX(30px); 
    } 
    80% { 
        transform: translateX(-10px); 
    } 
    100% { 
        transform: translateX(0); 
    } 
} 
.bounceInLeft { 
    -webkit-animation-name: bounceInLeft; 
    animation-name: bounceInLeft; 
}


@-webkit-keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(2000px); 
    } 
    60% { 
        opacity: 1; 
        -webkit-transform: translateX(-30px); 
    } 
    80% { 
        -webkit-transform: translateX(10px); 
    } 
    100% { 
        -webkit-transform: translateX(0); 
    } 
} 

@keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        transform: translateX(2000px); 
    } 
    60% { 
        opacity: 1; 
        transform: translateX(-30px); 
    } 
    80% { 
        transform: translateX(10px); 
    } 
    100% { 
        transform: translateX(0); 
    } 
} 

.bounceInRight { 
    -webkit-animation-name: bounceInRight; 
    animation-name: bounceInRight; 
} 
.border1{
 box-shadow: 
    0 0 0 10px hsl(0, 0%, 50%),
    0 0 0 15px hsl(0, 0%, 60%),
    0 0 0 20px hsl(0, 0%, 70%),
    0 0 0 25px hsl(0, 0%, 80%),
    0 0 0 30px hsl(0, 0%, 90%);
}
.border2{
border-top: 20px solid #3ACFD5;
  border-bottom: 20px solid #3a4ed5;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background-position: 0 0, 100% 0;
  background-repeat: no-repeat;
  -webkit-background-size: 20px 100%;
  -moz-background-size: 20px 100%;
  background-size: 20px 100%;
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9Imxlc3NoYXQtZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMzYWNmZDUiIHN0b3Atb3BhY2l0eT0iMSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzNhNGVkNSIgc3RvcC1vcGFjaXR5PSIxIi8+PC9saW5lYXJHcmFkaWVudD48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=),url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9Imxlc3NoYXQtZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMzYWNmZDUiIHN0b3Atb3BhY2l0eT0iMSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzNhNGVkNSIgc3RvcC1vcGFjaXR5PSIxIi8+PC9saW5lYXJHcmFkaWVudD48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
  background-image: -webkit-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%), -webkit-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%);
  background-image: -moz-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%), -moz-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%);
  background-image: -o-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%), -o-linear-gradient(top, #3acfd5 0%, #3a4ed5 100%);
  background-image: linear-gradient(to bottom, #3acfd5 0%, #3a4ed5 100%), linear-gradient(to bottom, #3acfd5 0%, #3a4ed5 100%);
}


.border3{background-image: linear-gradient(bottom, #F24D55 56%, #FF924F 57%, #FFC164 74%, #62C374 74%, #F24D55 34%, #00AEDA 33%);
background-image: -o-linear-gradient(bottom, #F24D55 56%, #FF924F 57%, #FFC164 74%, #62C374 74%, #F24D55 34%, #00AEDA 33%);
background-image: -moz-linear-gradient(bottom, #F24D55 56%, #FF924F 57%, #FFC164 74%, #62C374 74%, #F24D55 34%, #00AEDA 33%);
background-image: -webkit-linear-gradient(bottom, #F24D55 56%, #FF924F 57%, #FFC164 74%, #62C374 74%, #F24D55 34%, #00AEDA 33%);
background-image: -ms-linear-gradient(bottom, #F24D55 56%, #FF924F 57%, #FFC164 74%, #62C374 74%, #F24D55 34%, #00AEDA 33%);
background-image: -webkit-gradient(
 linear,
 left bottom,
 left top,
 color-stop(0.56, #F24D55),
 color-stop(0.57, #FF924F),
 color-stop(0.74, #FFC164),
 color-stop(0.74, #62C374),
 color-stop(0.34, #F24D55),
 color-stop(0.33, #00AEDA)
);
}

.none{

}
.photo0{

}
div.polaroid {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.container {
  padding: 10px;
}

</style>

