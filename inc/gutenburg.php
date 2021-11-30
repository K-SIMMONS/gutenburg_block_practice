<?php

/**
 * Custom Gutenburg Block
 * Author: Kurt Simmons
 * Version: 0.001
 */

 function myGutenburgFont() {
     add_theme_support(
         'editor-color-palette',
        array(
            array(
                'name' => 'White',
                'slug' => 'white',
                'color' => '#ffffff'
            ),

            array(
                'name' => 'Black',
                'slug' => 'black',
                'color' => '#000000'
            ),

            array(
                'name' => 'Pink',
                'slug' => 'pink',
                'color' => '#ff4444'
            ),

            array(
                'name' => 'Blue',
                'slug' => 'blue',
                'color' => '#0000ff'
            ),

            array(
                'name' => 'Green',
                'slug' => 'green',
                'color' => '#00FF00'
            )


     )
    );

    add_theme_support(
        'editor-font-sizes',

        array(
            array(
                'name' => 'Normal Size',
                'slug' => 'normal',
                'size' => 20,
            ),

            array(
                'name' => 'Large Size',
                'slug' => 'large',
                'size' => 40,
            )
        )
            );
 }

 add_action('init', 'myGutenburgFont');




 function adding_gutenburg_blocks(){

    wp_register_script( 'custom-guten-js', get_template_directory_uri() . '/build/index.js', array( 'wp-blocks' , 'wp-block-editor' , 'wp-components' ));

    register_block_type( 'customblock/my-custom-block', 
    array(
            'editor_script' => 'custom-guten-js'
     ));
 }

 add_action( 'init', 'adding_gutenburg_blocks' );