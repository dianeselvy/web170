<?php get_header(); ?>



<!--WP loop that displays content-->
<body <?php body_class(); ?>>
  <div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
</div>

    

</body>


<?php get_sidebar(); ?>
<?php get_footer(); ?>