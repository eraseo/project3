<?php get_header(); 
/*
Template Name: Home Page
*/
?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>
	


	<div class="homepage">
      <h2>
      	<a href="<?php the_permalink() ?>">
      		<?php the_title(); ?>
      	</a>
      </h2>
	</div>



<?php endwhile; endif; ?>

<?php get_footer(); ?>