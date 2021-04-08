<?php

//stylesheet css calling
function our_style(){

    wp_enqueue_style('main_css', get_stylesheet_uri(),'','1.0.1');
    wp_enqueue_style('slider_default', get_template_directory_uri().'/themes/default/default.css','', '1.0.2');
    wp_enqueue_style('slider_light', get_template_directory_uri().'/themes/light/light.css','', '1.0.2');
    wp_enqueue_style('slider_dark', get_template_directory_uri().'/themes/dark/dark.css','', '1.0.2');
    wp_enqueue_style('slider_bar', get_template_directory_uri().'/themes/bar/bar.css','', '1.0.2');
    wp_enqueue_style('slider_main', get_template_directory_uri().'/nivo-slider.css','', '1.0.2');

    // calling js file

    wp_enqueue_script('slider_jquery',get_template_directory_uri().'/scripts/jquery-1.9.0.min.js');
    wp_enqueue_script('slider_nivo',get_template_directory_uri().'/jquery.nivo.slider.js');


}
add_action('wp_enqueue_scripts','our_style');


//theme setup

function our_theme_setup(){

    //register menu

    register_nav_menus(
        array(

            'Header menu' => 'Primary menu'
        )
    );

    //for feature image

    add_theme_support('post-thumbnails');

    // register our slider

    register_post_type('our_slider',array(


        'labels' => array(
            'name' => 'Our Slider',
            'add_new' => 'Add Slide',
            'add_new_item' => 'Add New Slide',
        ),

        'public' => true,

        'supports' => array(

            'title', 'thumbnail',
        )


    ));





}
add_action('after_setup_theme','our_theme_setup');

function side_bar(){

    //sidebar calling
    register_sidebar(

        array(

            'name' => 'Right_sidebar',
            'before_widget' => '<div class="sidebar-element">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            

        )
    );

    //footer calling

    register_sidebar(

        array(

            'name' => 'Footer_one',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            

        )
    );

    register_sidebar(

        array(

            'name' => 'Footer_two',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            

        )
    );

    register_sidebar(

        array(

            'name' => 'Footer_three',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            

        )
    );


}
add_action('widgets_init', 'side_bar');