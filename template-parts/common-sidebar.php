<aside class="col-sm-4">
    <div class="">
       
        <?php
        if (is_active_sidebar('sidebar-1')) {
            dynamic_sidebar('sidebar-1');
        }
        ?>

    </div>
    <div class="right_content">

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish'
        ));

      

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
			'meta_key' => 'post_views_count',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'posts_per_page' => 12,
			'post__not_in' => array(get_the_ID())
            
        ));


        if ($isPost->have_posts()) :
            ?>

            <div class="single_sidebar">
                <h2><span> জনপ্রিয় খবর </span></h2>
                <?php wp_reset_postdata(); ?>


                <ul class="">
                    <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
					

                 <a class="short-list" href="<?php the_permalink(); ?>">
                                     <li>
                                           	<div class="">
			<?php if ( has_post_thumbnail() ) { ?>										
<span class="media-left"> 
  <img style="margin: 5px 5px 0 0;" class="pull-left img-bordered" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                   <?php } ?>     
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 30, $more = " ..."); ?></small></p>
</span>
      </div>
                  
                 </li></a>

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

    <div class="">

        <?php
        if (is_active_sidebar('sidebar-2')) {
            dynamic_sidebar('sidebar-2');
        }
        ?>

		
    </div>
	
    <div class="">



    </div>
    <div class="">

        <?php
        if (is_active_sidebar('sidebar-3')) {
            dynamic_sidebar('sidebar-3');
        }
        ?>

    </div>
</aside>
