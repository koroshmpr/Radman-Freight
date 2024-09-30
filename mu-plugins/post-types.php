<?php


function radman_post_types()
{
    //    news post type
    register_post_type('news', array(
        'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        'rewrite' => array('slug' => 'news'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'تازه ترین‌ها',
            'add_new' => 'افزودن تازه ترین‌ها',
            'add_new_item' => 'افزودن تازه ترین‌ها',
            'edit_item' => 'ویرایش تازه ترین‌ها',
            'all_items' => 'همه ی تازه ترین‌ها',
            'singular_name' => 'تازه ترین‌ها'
        ),
        'menu_icon' => 'dashicons-paperclip'
    ));
    register_taxonomy(
        'news_categories',
        'news',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی تازه ترین‌ها', // display name
            'query_var' => true,
        )
    );
    //    Projects post type
    register_post_type('c-satisfaction', array(
        'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        'rewrite' => array('slug' => 'c-satisfaction'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'رضایت مشتری',
            'add_new' => 'افزودن رضایت مشتری',
            'add_new_item' => 'افزودن رضایت مشتری',
            'edit_item' => 'ویرایش رضایت مشتری',
            'all_items' => 'همه ی رضایت مشتری',
            'singular_name' => 'رضایت مشتری'
        ),
        'menu_icon' => 'dashicons-groups'
    ));
    register_taxonomy(
        'c-satisfaction_categories',
        'c-satisfaction',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی رضایت مشتری', // display name
            'query_var' => true,
        )
    );
    // services post-type
    register_post_type('services', array(
        'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'خدمات ما',
            'add_new' => 'افزودن خدمات',
            'add_new_item' => 'افزودن خدمات جدید',
            'edit_item' => 'ویرایش خدمات',
            'all_items' => 'همه ی خدمات',
            'singular_name' => 'خدمات'
        ),
        'menu_icon' => 'dashicons-excerpt-view'
    ));
    register_taxonomy(
        'services_categories',
        'services',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی خدمات', // display name
            'query_var' => true,
        )
    );
    $labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tags' ),
        'popular_items' => __( 'Popular Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tag' ),
        'update_item' => __( 'Update Tag' ),
        'add_new_item' => __( 'Add New Tag' ),
        'new_item_name' => __( 'New Tag Name' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items' => __( 'Add or remove tags' ),
        'choose_from_most_used' => __( 'Choose from the most used tags' ),
        'menu_name' => __( 'Tags' ),
    );

    register_taxonomy('service_tag','services',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tag-services' ),
    ));
}

add_action('init', 'radman_post_types');