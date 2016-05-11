<?php get_header(); ?>

<!--WP loop that displays content-->
  <div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
<h2><?php the_title(); //get page or posting title ?></h2>
<?php the_content(''); //get page or posting or written content ?>
<?php endwhile; endif; //end the loop ?>
      <p>page.php</p>
</div>

    

</body>

<?php get_sidebar(); ?>
<?php get_footer(); ?>