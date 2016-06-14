<!DOCTYPE html>
<html lang="en">
  
<head>
  <?php wp_head(); ?> 

 

  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
  <title><?php get_title(); ?><!--<?php bloginfo('description'); ?> | <?php bloginfo('name'); ?>--> Seattle, WA</title>
  <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>


</head>

<body <?php body_class(); ?>>
    
    
<div id="header">
<h1 id="logo">
    <a href="http://dianeselvy.com/web170/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/GlassStashlogo.png"></a>
    </h1>
<div id="social">
  <ul>
    <li><a href="#">En Espanol</a> </li>
    <li><a href="http://edison.seattlecentral.edu/~dselvy01/web200/privacypolicy.html">Privacy Policy</a> </li>
    <li><a href="#">Log In</a></li>
  </ul>
<ul>
       <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/fb.png"></a></li>
       <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twit.png"></a></li>
       <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/insta.png"></a></li>
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
    
    <!-- begin content -->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'navigation',)) ?>