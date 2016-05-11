<?php get_header(); ?>

<div id="hero">
<img src="<?php bloginfo('template_directory'); ?>/images/bongz.jpg">
</div>
<!--WP loop that displays content-->
  <div id="content">
<div id="widgets">
    <section class="widget-item">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
<h2><?php the_title(); //get page or posting title ?></h2>
<?php the_content(''); //get page or posting or written content ?>
<?php endwhile; endif; //end the loop ?>
      <p>front-page.php</p>
    </section>   
    
    
</div>

</body>


<?php get_footer(); ?>