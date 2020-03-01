<?php get_header(); ?>

search
<main class="col-sm-8">


    <div class="left_content">


        <?php if (have_posts()) : ?>


            <h3 class="page-title"><span>
                    <?php
                    printf(esc_html__('&nbsp;&nbsp;Search Results for - %s', 'amaderittefaq'), '<span>' . get_search_query() . '</span>');
                    ?>							
                </span></h3>


            <?php while (have_posts()) : the_post(); ?>


                <li>
                    <div class=""> <a href="<?php the_permalink(); ?>" class="media-left"> 
                            <img alt="" src="<?php the_post_thumbnail_url(); ?>"> </a>
                        <div class="media-body">
                            <a class="small" href="<?php the_permalink(); ?>" class="catg_title"><strong><?php the_title(); ?></strong></a>
                            <p class="small"> <?php echo wp_trim_words(get_the_content(), $num_words = 32, $more = " ..."); ?></p>

                        </div>
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

                    <?php
                    printf(esc_html__('Nothing found about - %s', 'amaderittefaq'), '<span>' . get_search_query() . '</span>');
                    ?>							
                </span></h3>
        <?php
        endif;
        ?>

    </div>

</main>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
