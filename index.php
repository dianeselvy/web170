<?php get_header(); ?>



<!--WP loop that displays content-->
<body <?php body_class(); ?>>
  <div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
    <h2><a href="<?php the_permalink(); //link to the page or posting ?>"><?php the_title(); //get page or posting title ?></a></h2>
<?php the_content(''); //get page or posting or written content ?>
<?php endwhile; endif; //end the loop ?>
</div>

    

</body>


<?php get_sidebar(); ?>
<?php get_footer(); ?>