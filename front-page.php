<?php get_header(); ?>

<div id="hero">
<img src="<?php bloginfo('template_directory'); ?>/images/bongz.jpg">
</div>

<!--displays content-->
  <div id="content">
<div id="widgets">
    <section class="widget-item">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
      <p>front-page.php</p>
    </section>   
    
    
</div>

</body>


<?php get_footer(); ?>