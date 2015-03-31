


<?php get_header();
/*
Template Name: Home Page
*/
?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	
 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

<div class="container">
	

	<a href="<?php bloginfo('url'); ?>" class="icecream"></a>
  	<a href="<?php bloginfo('url'); ?>"><h1 class="companyname">WHY SO SERIOUS</h1></a>
	<h1 class="companyline">Network for your badass TV shows</h1>

	


  	<div class="homeheader">
	  	<div class="homenav">
			<div class="active">
				<ul class="nav nav-pills">
					
					<li><a href="<?php bloginfo('url'); ?>/About">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Career">Career</a></li>
					<li><a href="<?php bloginfo('url'); ?>/Contact">Contact</a></li>
				</ul>
			</div>
		</div>


		
		<!-- TESTING DO NOT DELETE-->

		<!-- <div class="shownav">
			<div class="active">
				<ul class="nav nav-pills">
					<li class="bb"><a href="<?php bloginfo('url'); ?>/breaking-bad">Breaking Bad</a></li>
					<li class="hoc"><a href="<?php bloginfo('url'); ?>/house-of-cards">House of Cards</a></li>
					<li class="got"><a href="<?php bloginfo('url'); ?>/game-of-thrones">Game of Thrones</a></li>
					<li class="hk"><a href="<?php bloginfo('url'); ?>/hells-kitchen">Hells Kitchen</a></li>
				</ul>
			</div>
		</div> -->
	</div>






<?php get_footer(); ?>

