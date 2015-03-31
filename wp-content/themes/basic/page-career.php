<?php get_header();
/*
Template Name: Career Page
*/
?>


<div class="container">
	

  	
	<a href="<?php bloginfo('url'); ?>" class="icecream"></a>
  	<a href="<?php bloginfo('url'); ?>"><h1 class="companyname">WHY SO SERIOUS</h1></a>
	<h1 class="companyline">Network for your badass TV shows</h1>

	


  	<div class="header">
	  	<div class="homenav">
			<div class="active">
				<ul class="nav nav-pills">
					
					<li><a href="<?php bloginfo('url'); ?>/About">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Career">Career</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Contact">Contact</a></li>
				</ul>
			</div>
		</div>


		
		
	</div>

	<div class="pointdown">
		<img src="<?php bloginfo('template_directory'); ?>/_img/pointdown1.png" />
	</div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>



<?php get_footer(); ?>

