<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">


        <meta name="description" content="" />

    	<title>Fresno Business</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">



	
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    	<?php wp_head(); ?>


		
      

    </head>





    <nav class="navbar navbar-default">
                    <div class="navbar navbar-static-top navbar-custom">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-7 main-img">
                                    <a href="<?php echo home_url(); ?>" class="main-logo">
                                        
                                        <div class="logo">
                                            
                                            <!-- <div><h1 class="main-name">Fresno Business <span></span></h1></div> -->
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" />
                                            
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="row">
                                         <div class="col-xs-12 col-md-12">
                                            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse navHeaderCollapse">
                                            <div class="col-xs-12 main-nav">
                                                <?php /* Primary navigation */
                                                    wp_nav_menu( array(
                                                    'menu' => 'primary',
                                                    'theme-location' => 'primary',
                                                    'depth' => 2,
                                                    // 'items_wrap' => my_nav_wrap(),
                                                    'menu_class' => 'nav navbar-nav ',
                                                    'fallback-cb' => 'wp_bootstrap_navwalker::fallback',
                                                    //Process nav menu using our custom nav walker
                                                    'walker' => new wp_bootstrap_navwalker())
                                                    );

                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end div class collapse navbar-collapse navHeaderCollapse -->
                            </div>
                        </div><!--end div class container-fluid-->
                    </div><!--end div class navbar  navbar-static-top navbar-custom-->
                </nav>

      <header class="<?php if (is_front_page()){echo 'home';} else { echo "page"; }?>">
            

          </header>
