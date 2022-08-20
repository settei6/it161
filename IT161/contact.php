
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Kyoka Miyamura's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
     <h1>Kyoka Miyamura's IT161 Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="https://docs.google.com/document/d/10GIVa3_P3c1d-KLOi8uQm9XrK-cU-UxbAwXjxGoFOeI/edit?usp=sharing">Flowchart</a>
       <a href="final.php">Final Project</a>
       <a href="contact.php">Contact Kyoka</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Japan" />
       
     <img class="tablet" src="images/tablet.jpg" alt="tennis" />
       
     <img class="phone" src="images/phone.jpg" alt="Photos" />
       
       <h2 class="subheader">A little about me!</h2>
       
       <p>I am from Japan.</p>
       <p>Hobby : Photos</p>       
       <p>Sport : Tennis</p>    
       
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "kyoka.miyamura@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Vivian"; //place your client's name here
        $website = "Vivian's portfolio";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2021 by 
          <a href="contact.php">Kyoka Miyamura</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>