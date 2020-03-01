<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
			<?php
			$posttags = get_the_tags();
			if ($posttags) {
				echo '<meta name="Keywords" content="';
			  foreach($posttags as $tag) {
				echo $tag->name.','; 
			  }
				echo 'news"/>';
			}
			?>
			
	    <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css" />

        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/font.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/li-scroller.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/theme.css">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <style type="text/css">

        <?php 
            include("style.php");
        ?>

        </style>


        <!--[if lt IE 9]>
          <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/html5shiv.min.js"></script>
          <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/respond.min.js"></script>
          <![endif]-->
		
		
     
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>




        <a class="scrollToTop" href="#"><i class="fa fa-arrow-up"></i></a>


        <div class="container-fluid">

            <header>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="header_top">
                            <div class="header_top_left col-sm-4">

                                <button> <?php echo date("l d M Y"); ?></button>



                            </div>
                            <div class="header_top_right col-sm-4 pull-right">
 <div style="margin-top:5px;" class="hidden-xs"><?php get_search_form(); ?></div>
                            </div>
                        </div>
                    </div>


                    <div class="">

                        <div class="pull-left col-sm-4 logo">
                            <?php the_custom_logo(); ?>
                        </div>
                        <div class="pull-right col-sm-8 col-md-8 col-lg-8">
                        <?php
                            if (is_active_sidebar('banner')) {
                                dynamic_sidebar('banner');
                            }
                        ?>
                         </div>

                    </div>



                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">





                        <div id="navHolder">
                            <nav class="navbar navbar-inverse" role="navigation">
                                <div class="navbar-header hidden-sm hidden-md hidden-lg hidden-xl" style="padding:0px; margin: 12px 4px;">

                                    <button id="toggle-button" type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                    <div id="sml-search">
                                        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">

                                            <div class="input-group row" id="search">
                                                <input type="text" name="s" id="s" placeholder="&nbsp;Search here" class="form-control input-sm" />
                                                <span class="input-group-btn">
                                                    <button id="searchsubmit" type="submit" class="btn btn-default btn-sm btn-search"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>

                                        </form>

                                    </div>


                                </div>
                                <div id="navbar" class="navbar-collapse collapse">



                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'Navmenu',
                                        'menu_class' => 'nav navbar-nav main_nav',
                                        'depth' => 2,
                                        'link_before' => '<span class="">',
                                        'link_after' => '</span>',
                                    ));
                                    ?>



                                </div>
                            </nav>
                        </div>


                    </div>
                </div>



                <section id="newsSection3">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <?php
                            $firstPost = new WP_Query(
                                    array(
                                'post_type' => 'news',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => 10,
                            ));



                            if ($firstPost->have_posts()) :
                                ?>

                                <div class="latest_newsarea" style="background-color:brown;"> <span class="hidden-xs" style="background-color:brown">Latest News</span>
                                    <?php wp_reset_postdata(); ?>

                                    <ul id="ticker01" class="news_sticker">
                                        <?php while ($firstPost->have_posts()) : $firstPost->the_post(); ?> 

                                            <li><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""><?php the_title(); ?></a></li>

                                            <?php
                                        endwhile;
                                        wp_reset_postdata();
                                        ?> 

                                    </ul>
                                </div>

                                <?php
                            endif;
                            ?>



                        </div>
                    </div>
                </section>

            </header>

            <div class="row">
				<div class="col-md-12">
					

				
				</div>
				