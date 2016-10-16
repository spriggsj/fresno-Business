		
               
           
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<nav class="secondary-nav">
		            	<div class="container">
		           
		                <?php /* sub_nav navigation */
		                    wp_nav_menu( array(
		                    'menu' => 'sub_nav',
		                    'theme-location' => 'sub-nav',
		                    ));
		                ?>
		            	</div>
		           
		        	</nav>
   				</div>
			   		  <div class="col-md-2 posts">
				        <ul>

					    

					  		<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>


					  		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


					  		<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
							<?php
					  			endwhile;
					 			 wp_reset_postdata();
					  			?>
				  		</ul>

			  		</div>
					
					<div class="col-md-3 socialFeeds">
						<h2>Social Feeds</h2>
					</div>
					<div class="col-md-3 socialFeeds">
						<h2>Social Feeds</h2>
					</div>
					<div class="col-md-2">
						<aside class="social-links">
							<h2 id="socialContact">Contact Us</h2>
							<ul>
								<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
								<li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></li>
								<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a></li>
							</ul>
						</aside>
					</div>
			</div>

		

				<div class="copyright">
					<p>Copyright &copy; 2016 Fresno Business &reg;</p>
				</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	</body>
</html>