<?php get_header(); ?>

<!--WP loop -->
  <div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	
	<div id="page-content">
	<?php the_content(''); ?>
	
	<?php endwhile; endif; ?>
	</div>
	<div id="side-nav">
	<?php get_sidebar(); ?>
	</div>
  </div>

    <p>page.php</p>

</body>

<?php get_footer(); ?>