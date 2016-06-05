<?php get_header(); ?>



<!--WP loop that displays content-->
<body <?php body_class(); ?>>
  <div id="content">
  <div id="page-content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post-excerpt">
	<h2><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?></a></h2>
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', ') ?></small>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
	<?php the_excerpt(); ?>
	</article>
	
	<?php endwhile; endif; ?>
	</div>
	<small>index.php</small>
	
	<div id="side-nav">
	<?php get_sidebar(); ?>
	</div>
	
</div>

    

</body>


<?php get_footer(); ?>