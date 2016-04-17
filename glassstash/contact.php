<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Glass Stash | Contact</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="finalstyles.css" />
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script src="script.js"></script>
</head>
  
<body>
<div id="header">
<h1 id="logo">
    <a href="http://dianeselvy.com/glassstash/index.html"><img src="images/GlassStashlogo.png" height="150px" /></a>
    </h1>
    
<div id="social">
  <ul>
    <li><a href="#">En Espanol</a> </li>
    <li><a href="http://edison.seattlecentral.edu/~dselvy01/web200/privacypolicy.html">Privacy Policy</a> </li>
    <li><a href="#">Log In</a></li>
  </ul>
  
<ul>
       <li><a href="#"><img src="images/fb.png"></a></li>
       <li><a href="#"><img src="images/twit.png"></a></li>
       <li><a href="#"><img src="images/insta.png"></a></li>
</ul>
  
<!--  begin search form -->
<form id="searchForm" method="post" >
    <fieldset>
        
             <input id="s" type="text" />
            
            <input type="submit" value="Submit" id="submitButton" />
            <div id="searchInContainer">
            <input type="radio" name="check" value="web" id="searchWeb" />
                <label for="searchWeb">Search The Web</label><br>
                <input type="radio" name="check" value="site" id="searchSite" checked />
                <label for="searchSite" id="siteNameLabel">Search</label>
            
      </div>          
        </fieldset>
    </form>

<div id="resultsDiv"></div>
<!-- end search form -->
    
</div>
</div>
    
    <nav class="navigation">
       <a href="#">Services</a>
      <a href="http://dianeselvy.com/glassstash/gallery.html">Gallery</a>
       <a href="#">Blog</a>
       <a href="#">Store</a>
       <a href="http://dianeselvy.com/glassstash/about.html">About</a>
       <a href="http://dianeselvy.com/glassstash/contact.php">Contact</a>
    </nav>
    
    
<div id="middlecontact">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2682.273146689923!2d-122.312716!3d47.756755999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54901053fbd3e487%3A0xc0df7ee129619505!2sThe+Glass+Stash!5e0!3m2!1sen!2sus!4v1439581742425" width="400" height="300" frameborder="0" style="border:0 " allowfullscreen></iframe>
<?php include 'contactform.php';?>
  
</div>
  
</body>

<div id="footer">
<a href="contact.php">Contact</a> | <a href="">Site Map</a>  |  <a href="">Log In</a>
<p>Copyright 2015 &copy; Website by Diane Selvy</p>
</div>
</html>