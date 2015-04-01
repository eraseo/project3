<?php get_header();
/*
Template Name: hellskitchenclips Page
*/
?>

	<div class="minilogo">
		<a href="<?php bloginfo('url'); ?>" class="icecream3d">
			<img src="<?php bloginfo('template_directory'); ?>/_img/logo3d8.png" />
		</a>
		<!-- <a href="<?php bloginfo('url'); ?>"><h1 class="minicompanyname">WHY SO SERIOUS</h1></a> -->
	</div>
	<div class="uglybanner"></div>

<div class="container">
	
  	<div class="hk">
	  	<div class="homenav">
			<div class="active">
				<ul class="nav nav-pills">
					
					<!-- <li><a href="<?php bloginfo('url'); ?>/About">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Career">Career</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Contact">Contact</a></li> -->
				</ul>
			</div>
		</div>

		<div class="hknav">
			<div class="active">
				<ul class="nav nav-stacked">
					<li class="hkabout"><a href="<?php bloginfo('url'); ?>/hells-kitchen">About</a></li>
					<li class="hkwin"><a href="<?php bloginfo('url'); ?>/hells-kitchen-winners">Winners</a></li>
						<li class="hkclips"><a href="<?php bloginfo('url'); ?>/hells-kitchen-clips">Highlights</a></li>
					<li class="hketc"><a href="<?php bloginfo('url'); ?>/hells-kitchen-etc">Sound Clips</a></li>
				</ul>
			</div>
		</div>


	</div>
	<div class="voice"></div>


	<div id="hktitlerectangle"></div>
	<div id="hkbodyrectangle"></div>

	


	<div class="hkclippostpost">
		<div id="knife"></div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
		  <!-- <h1><?php the_title(); ?></h1>  -->
		  	<h1>HIGHLIGHTS</h1>
			<h6 class="hkclippostpostbox"><?php the_content(); ?></h6>
			

			


		  <?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>

	</div>



<?php get_footer(); ?>

