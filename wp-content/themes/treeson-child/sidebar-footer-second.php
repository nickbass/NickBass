<?php
	/* SIDEBAR */
    if ( dynamic_sidebar( 'footer-second' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div class="widget widget_text">';
        echo '<h5>' . __( 'Address' , 'treeson' ) . '</h5>';
        echo '<div class="textwidget">' . sprintf( __( 'Long Beach, CA 90815 %s United States' , 'treeson' ) , '<br/>' , '<br/>' ) . '</div>';
        echo '</div>';
    }
?>