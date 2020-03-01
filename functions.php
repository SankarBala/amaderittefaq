<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
$defaults = array(
    'default-color' => '',
    'default-image' => '',
    'default-repeat' => 'repeat',
    'default-position-x' => 'left',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-attachment' => 'scroll',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => ''
);
add_theme_support('custom-background', $defaults);

add_theme_support('custom-logo');

register_nav_menus(array(
    'Navmenu' => __('Primary Menu', 'Amaderittefaq'),
    '2ndmenu' => __('Secondery Menu', 'Amaderittefaq'),
    '3rdmenu' => __('Social Menu', 'Amaderittefaq'),
));

function post_type() {

    function create_post_type($type_name, $pos, $dashicon) {

        $type_name = ucwords(str_replace("_", " ", $type_name));

        $args = array(
            'label' => __($type_name, 'amaderittefaq'),
            'description' => __($type_name . 'and reviews', 'amaderittefaq'),
            'labels' => array(
                'name' => _x($type_name, 'Post Type General Name', 'amaderittefaq'),
                'singular_name' => _x($type_name, 'Post Type Singular Name', 'amaderittefaq'),
                'menu_name' => __($type_name, 'amaderittefaq'),
                'parent_item_colon' => __('Parent ' . $type_name, 'amaderittefaq'),
                'all_items' => __('All ' . $type_name, 'amaderittefaq'),
                'view_item' => __('View ' . $type_name, 'amaderittefaq'),
                'add_new_item' => __('Add News about ' . $type_name, 'amaderittefaq'),
                'add_new' => __('Add news', 'amaderittefaq'),
                'edit_item' => __('Edit ' . $type_name, 'amaderittefaq'),
                'update_item' => __('Update ' . $type_name, 'amaderittefaq'),
                'search_items' => __('Search ' . $type_name, 'amaderittefaq'),
                'not_found' => __('Not Found', 'amaderittefaq'),
                'not_found_in_trash' => __('Not found in Trash', 'amaderittefaq'),),
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail',),
            'taxonomies' => array('category', 'post_tag', 'themes_categories'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'menu_position' => $pos,
            'menu_icon'     => $dashicon,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );

        register_post_type($type_name, $args);
    }

    create_post_type("news", 2, 'dashicons-welcome-view-site');
}

/* add_action('init', 'post_type', 0); */

function createCustomField() {
    $post_id = get_the_ID();

    if (get_post_type($post_id) != 'post') {
        return;
    }

    $value = get_post_meta($post_id, 'show_homepage', true);
    wp_nonce_field('my_custom_nonce_' . $post_id, 'my_custom_nonce');
    ?>
    <br>
    <div class="misc-pub-section misc-pub-section-last" style="background-color: #fff; border:4px double black">
        <label>
            <input type="checkbox" value="1" <?php checked($value, true, true); ?> name="show_homepage" />
            <?php _e('Show in the homepage', 'pmg'); ?>
        </label>

    </div>
    <?php
}

function savehome($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (
            !isset($_POST['my_custom_nonce']) ||
            !wp_verify_nonce($_POST['my_custom_nonce'], 'my_custom_nonce_' . $post_id)
    ) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['show_homepage'])) {
        update_post_meta($post_id, 'show_homepage', $_POST['show_homepage']);
    } else {
        delete_post_meta($post_id, 'show_homepage');
    }
}

add_action('post_submitbox_misc_actions', createCustomField);
add_action('save_post', savehome);



function amaderittefaq_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 1 - 1/3 Widget Area', 'amaderittefaq' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'amaderittefaq' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2 - 2/3 Widget Area', 'amaderittefaq' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'amaderittefaq' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 3 - 3/3 Widget Area', 'amaderittefaq' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'amaderittefaq' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
        register_sidebar( array(
		'name'          => esc_html__( 'Footer 1 - 1/3 Widget Area', 'amaderittefaq' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'amaderittefaq' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2 - 2/3 Widget Area', 'amaderittefaq' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'amaderittefaq' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3 - 3/3 Widget Area', 'amaderittefaq' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'amaderittefaq' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
        
        register_sidebar( array(
		'name'          => esc_html__( 'Banner Widget Area', 'amaderittefaq' ),
		'id'            => 'banner',
		'description'   => esc_html__( 'Add widgets here.', 'amaderittefaq' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );



}
add_action( 'widgets_init', 'amaderittefaq_widgets_init' );


function setPostViews($postID) {
	
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
		
		
    }
}







