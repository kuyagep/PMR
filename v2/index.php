<!doctype html>
<html class="no-js" lang="">
<!-- 
                RED HAT SINGLE SIGN ON FORM         
                    `.``     .-..`                          
                   ://///:--///////:-.`                     
                  ://///////////////////:-`                 
                 ./////////////////////////:                
                `///////////////////////////-               
                :////////////////////////////`              
                /////////////////////////////-              
       `..-::/: `:////////////////////////////              
     `:////////   `-//////////////////////////.             
    `//////////:`    `-://////////////////////-`            
    `////////////-`      `.-:////////////////-`//-`         
     ://///////////:.          ``...----...`   :////.       
      -///////////////:-.`                    -//////:      
       `://////////////////:--.           .-://///////:     
         `-////////////////////////////////////////////`    
            `-/////////////////////////////////////////`    
               `.:////////////////////////////////////.     
                   `.-://///////////////////////////:`      
                        ``.-:////////////////////:.`        
                                ```-://///////```             
-->
<head>
  <meta charset="utf-8">
  <title>Red Hat Sign-In</title>
  <meta name="description" content="sign-in page for Red Hat employees">
  <meta name="viewport"    content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#cc0000">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

</head>
<body>
 
<svg xmlns="http://www.w3.org/2000/svg" class="logo" viewBox="0 0 850 240">
  <path id="brim" d="M230.2 110.6c.1-1.6-.1-3.1-.4-4.5l-9.6-41.5c-2.2-9.2-4.2-13.3-20.1-21.4-12.5-6.3-39.6-16.8-47.6-16.8-7.5 0-9.6 9.5-18.6 9.5-9 0-14.9-7-23.1-7-8.1 0-12.7 5.2-16.5 15.9 0 0-10.8 30.4-12.2 34.9a10 10 0 0 0-.3 2.5c0 11.8 45.8 50.7 109 50.7 16 0 39.4-3.2 39.4-22.3zm2.4 7.5a72 72 0 0 1 2.2 13c0 18-20.2 28-46.8 28-60 0-112.4-35.1-112.4-58.4 0-3.3.7-6.5 2-9.6C56.2 92.5 28 96.5 28 121c0 40.4 95.6 90.2 171.5 90.2 58 0 72.7-26.3 72.7-47.1 0-16.3-14-34.8-39.5-45.9"/>
  <path id="band" d="M232.7 118.2a58 58 0 0 1 2.2 13c0 18-20.2 28-46.8 28-60 0-112.5-35.1-112.5-58.4 0-3.3.6-6.5 2-9.6l4.6-11.4-.3 2.4c0 12 46.6 50.7 109 50.7 15.9 0 39.3-4.1 39.3-22.3 0-1.6-.1-3.1-.4-4.5z"/>
  <path id="type" d="M771.2 144.7c0 15.3 9.2 22.8 26 22.8a68 68 0 0 0 15.3-2.2v-17.7a31.8 31.8 0 0 1-9.9 1.5c-6.9 0-9.4-2.2-9.4-8.7v-27.2h20V95h-20V71.9l-22 4.7V95h-14.4v18.2h14.4v31.5zm-61.8 23c7.7 0 13.9-1.6 19.7-5.5v4.3h21.6v-45.8c0-17.5-11.7-27-31.3-27a79 79 0 0 0-33.4 7.8l7.8 16.1a57 57 0 0 1 21.7-5.7c9 0 13.6 3.5 13.6 10.7v3.5a61 61 0 0 0-16.2-2c-18.4 0-29.5 7.7-29.5 21.5 0 12.5 10 22.1 26 22.1zm-5.2-22.6c0-4.7 4.8-7 11.9-7 4.8 0 9.1.7 13 1.6v9.2c-4 2.3-8.8 3.4-13.6 3.4-7.1 0-11.3-2.7-11.3-7.2zm-112.4 21.4h23.3v-37H654v37h23.3V71.9H654v36.3h-38.9V71.9h-23.3v94.6zm-54.8 0h21.6V67.1L536.7 72v26.9a36.2 36.2 0 0 0-18.2-4.8 36.6 36.6 0 0 0-37.2 36.7 36.4 36.4 0 0 0 36.5 36.8 32 32 0 0 0 19.2-6.3v5.3zm-34.2-35.8a18 18 0 0 1 18.8-18.1c5.9 0 11.3 2 15.1 5.5v25c-3.9 3.8-9 5.7-15.1 5.7a18.1 18.1 0 0 1-18.8-18.1zm-101.3.1c0 20.8 17 37.1 38.9 37.1 12.1 0 20.8-3.3 29.9-10.9l-14.5-12.8a19.1 19.1 0 0 1-14.3 5.4c-8.1 0-14.7-4.5-17.6-11.3h51v-5.5c0-22.7-15.3-39-36.1-39-21 0-37.3 16.2-37.3 37zm36.9-19.2c6.9 0 12.7 4.5 15 11.4h-29.9c2.2-7.2 7.6-11.4 14.9-11.4zm-121 54.9h23.3V132h17.7l17.8 34.5h26l-20.7-37.8a29 29 0 0 0 17.7-26.7c0-17-13.4-30.1-33.4-30.1h-48.4v94.6zm46.3-74.8c7.7 0 12 5 12 10.7 0 5.8-4.3 10.7-12 10.7h-23V91.7h23z"/>
</svg>

  
<form 
id="login_form" 
name="login_form" 
autocomplete="off"
method="post"
enctype="application/x-www-form-urlencoded" 
onsubmit="javascript:stripspaces(this)" >
        
  
  
  
<input type="text"  
id="username" 
class="username"
name="username" 
size="20" 
autocapitalize="off"
autocorrect="off" 
autocomplete="on"  
autofocus="on"
required />


<label for="username">Username</label> <small>DEPED ID</small>  <svg viewbox="0 0 10 10" ><use xlink:href="#user" /> <use xlink:href="#fed" class="fedora" /> <use xlink:href="#burst" class="flash"  /></svg>


<input 
   id="password" 
 type="password" 
 name="password"
autocorrect="off" 
autocomplete="off"  
autocomplete="new-password"
value=""  
size="20"
required>
 
<label for="password">Password</label> <small>PASS KEY</small> <svg viewbox="0 0 10 10"><use xlink:href="#pad" /><use class="flash" xlink:href="#burst" /><use class="lock" xlink:href="#lock" />
</svg>


  <button id="submit" type="submit" name="submit"  >Log In</button>
 
   
<span class="note" id="note">NOTE: You must close your browser or clear your cookies to completely log out.</span>
  
  
  <svg xmlns="http://www.w3.org/2000/svg" 
       class="hbox" viewBox="0 0 200 40">
      <rect  x=".5" y=".5" ry="3" rx="3" width="199" height="42" />
  </svg>
</form>



<svg class="hide">
  
    <defs>
   
   
 
      

  <g id="padlock"> <path id="pad" d="m 3,5.5 5,0 0,4 -5,0 z" /> <path id="lock" d="m 3,5.5 0,-2 c 0,-3 4,-3 4,-0.25 L 7,4 "/>  </g>
    
  <path id="fed" d="M7.8 3.8c-.7.6-3.5.6-4.4-.1-.3-.2 4.8-.2 4.4.1zM7 3.5c-.4-.7-.3-2-1.5-1.5-1-.5-1 .7-1.5 1.5"  />
      
  <path id="user" d="M5.5 5.8c-2 0-2-3 0-3 2.3 0 2 3 0 3zm.8-.3c1.2 0 2.2 1 2.2 2.3v1.7h-6V7.7c0-1.2 1-2.2 2.3-2.2"  />
  <path id="burst" d="m 5.47,0 v 2.19 m 4.38,2.19 h -2.2 m -6.55,0 H 3.28 M 2.38,1.28 3.92,2.83 M 8.56,1.28 7.02,2.83" />
    

  </defs>
</svg>

  


</body> 
<script>
</script>


