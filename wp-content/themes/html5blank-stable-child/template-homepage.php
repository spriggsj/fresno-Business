<?php /* Template Name: Home Page Template */ get_header(); ?>

	
		<div class="jumbotron">
			
  			<h1 class="centerText">Fresno Business</h1>
  			<h3 class="centerText">Supporting Tag Line ....</h3>
  			<p class="centerText"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>

	<section id="contactForm">
		<div class="container-fluid">
  			<div class="row">
    			<div class="col-md-8">
    				<h3 class="centerText">Content Offer</h3>
    				<h4 class="centerText">More information to promote conversions</h4>
    				
    			</div>
    			<div class="col-md-4">
    				<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');?>
    			</div>
  			</div>
  			
    	
  		</div>
	</section>

	<section id="threeCol">
		<div class="container-fluid">
  			<div class="row">
    			<div id="learn" class="col-md-4">
    				<a href="#">
    					<h1>Learn</h1>
    					<h3>Supporting Text</h3>
    				</a>
    			</div>
    			<div id="grow" class="col-md-4">
    				<a href="#">
    					<h1>Grow</h1>
    					<h3>Supporting Text</h3>
    				</a>
    			</div>
    			<div id="succeed" class="col-md-4">
    				<a href="#">
    					<h1>Succeed</h1>
    					<h3>Supporting Text</h3>
    				</a>
    			</div>
    		</div>
		</div>
		
	</section>
		
	<section id="connect">
		<div class="container-fluid">
  			<div class="row">
    			<div id="connection" class="col-md-12">
    				<a href="#">
    					<h1>Connect with the Fresno Community</h1>
    					<h3>Supporting Text</h3>
    				</a>
    			
    			</div>
		</div>
		
	</section>

	<section id="fourCol">
		<div class="container-fluid">
  			<div class="row">
    			<div id="learn" class="col-md-3">
    				<!-- <a href="#"> -->
    					<h1>Recent Post</h1>
    					<ul>

					    
					  		<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>


					  		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


					  		<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
							<?php
					  			endwhile;
					 			 wp_reset_postdata();
					  			?>
				  		</ul>
    				<!-- </a> -->
    			</div>
    			<div id="grow" class="col-md-3">
    				<!-- <a href="#"> -->
    					<h1>Highest Traffic</h1>
    					<?php
    					// The Query
							query_posts( array(
							    'category_name'  => 'popular',
							    'posts_per_page' => 1
							) );
							 
							// The Loop
							while ( have_posts() ) : the_post(); ?>
							    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
							<?php
							 
							
							endwhile;
							 
							// Reset Query
							wp_reset_query();
							    	?>			
				<!-- </a> -->
    			</div>
    			<div id="succeed" class="col-md-3">
    				<a href="#">
    					<h1>Highest Page</h1>
    					<h3>Supporting Text</h3>
    				</a>
    			</div>
    			<div id="grow" class="col-md-3">
    				<a href="#">
    					<h1>Content Offer</h1>
    					<h3>Supporting Text</h3>
    				</a>
    			</div>
    		</div>
		</div>
		
	</section>

	<section id="search">
		<div class="container-fluid">
  			<div class="row">
    			<div id="connection" class="col-md-12">
    				
    					<h1>Some Catchy Tagline</h1>
    					<?php get_search_form(true) ?>
    				
    			
    			</div>
		</div>
		
	</section>
	

<?php get_footer(); ?>
