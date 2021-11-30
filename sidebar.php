<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenburg-practice
 */
?>
<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="categories" class="widget"> 
	        <h3 class="widget-title titleborder"><span><?php esc_html_e( 'Category', 'skt-minimal' ); ?></span></h3>
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside id="archives" class="widget">      
        	<h3 class="widget-title titleborder"><span><?php esc_html_e( 'Archives', 'skt-minimal' ); ?></span></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
         <aside id="meta" class="widget">    
         	<h3 class="widget-title titleborder"><span><?php esc_html_e( 'Meta', 'skt-minimal' ); ?></span></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>	
</div><!-- sidebar -->