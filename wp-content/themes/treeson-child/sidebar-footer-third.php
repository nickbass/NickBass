<?php
    /* SIDEBAR */
    if ( dynamic_sidebar( 'footer-third' ) ){
        /* IF NOT EMPTY */    
    }

    else if( (bool)mythemes_mod( 'default-content', true ) ){
        echo '<div id="text-4" class="widget widget_text">';
        echo '<h5>' . __( 'Contact' , 'treeson' ) . '</h5>';
        echo '<div class="textwidget">';
        echo sprintf( __( 'facebook: %s' , 'treeson' ) , ' <a href="https://www.facebook.com/nick.bass.524">facebook.com/nick.bass.524</a>' ) . '<br>';
        echo sprintf( __( 'direct: %s' , 'treeson' ) , ' <a href="nickbass.me">nickbass.me</a>' ) . '<br>';
        echo sprintf( __( 'e-mail: %s' , 'treeson' ) ,  ' ' . antispambot( 'support@mythem.es' ) );
        echo '</div>';
        echo '</div>';
    }
?>