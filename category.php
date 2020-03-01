<?php get_header(); ?>

<main class="col-sm-8">


    <div class="left_content">
		 

<?php
    
	$catTitle =  single_cat_title('', false);
    
  $category = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>15,
			'category_name' => $catTitle
        ));


     if ($category-> have_posts()) : ?>

	<center>
		<h2>	
          <?php
           echo $catTitle
          ?>
		</h2>
		<hr />
    </center>

        <?php while ($category-> have_posts()) : $category-> the_post(); ?>
	
                <li>
                    <div class="">
						<a href="<?php the_permalink(); ?>" class="media-left"> 
							<div class="col-xs-3">
                            <img class="img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
						
							</div>
							<div class="col-xs-9">
                        <div class="media-body">
                         <strong><?php the_title(); ?></strong>
                            <p class=""> <?php echo wp_trim_words(get_the_content(), $num_words = 32, $more = " ..."); ?></p>

                        </div>
					</div>
						</a>
                    </div>
                    <br>
                </li>


                <?php
            endwhile;
            ?>
            <span class="text-center center-block" style="font-size:22px; padding: 2px 15px;">
                <?php
                global $wp_query;
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => __('Prev', 'amaderittefaq'),
                    'next_text' => __('Next', 'amaderittefaq'),
                ));
                ?>
            </span>

            <?php
        else :
            ?>
            <h3 class="page-title"><span>

                  <h2 class="text-center">
					  Nothing found
				</h2>						
                </span></h3>
        <?php
        endif;
        ?>




    </div>

</main>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
