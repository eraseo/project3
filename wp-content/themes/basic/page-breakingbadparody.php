<?php get_header();
/*
Template Name: breakingbadparody Page
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
	
  	<div class="bb">
	  	<div class="homenav">
			<div class="active">
				<ul class="nav nav-pills">
					
					<!-- <li><a href="<?php bloginfo('url'); ?>/About">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Career">Career</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Contact">Contact</a></li> -->
				</ul>
			</div>
		</div>

		<div class="bbnav">
			<div class="active">
				<ul class="nav nav-stacked">
					<li class="bbabout"><a href="<?php bloginfo('url'); ?>/breaking-bad">About</a></li>
					<li class="bbawards"><a href="<?php bloginfo('url'); ?>/breaking-bad-awards">Awards</a></li>
					<li class="bbclips"><a href="<?php bloginfo('url'); ?>/breaking-bad-clips">Clips</a></li>
					<li class="bbparody"><a href="<?php bloginfo('url'); ?>/breaking-bad-parody">Parody</a></li>
				</ul>
			</div>
		</div>


	</div>

	<div id="titlerectangle"></div>
	<div id="bodyrectangle"></div>

	<div class="parodypostpost">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
		  <!-- <h1><?php the_title(); ?></h1>  -->
		  	<h1>PARODY</h1>
			<h6 class="parodypostpostbox"><?php the_content(); ?><h6>



		  <?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>

	</div>




<?php get_footer(); ?>

