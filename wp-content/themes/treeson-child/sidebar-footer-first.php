<?php
	/* SIDEBAR */
    if ( dynamic_sidebar( 'footer-first' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_blog_details">';
        echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_option( 'blogname' ) . ' - ' . get_option( 'blogdescription' )  ) . '">' . __( 'treeson' , 'treeson' ) . '</a></h1>';
        echo '<p>' . sprintf( __( 'This site is a personal project for my CECS 300 site.' , 'treeson' ) , '<br/>' ) . '</p>';
        echo '</div>';
    }
?>