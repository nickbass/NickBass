<?php get_header('Merit Badge List',''); ?>

    <?php
        if( (bool)mythemes_mod( 'breadcrumbs', true ) ){
    ?>
            <div class="mythemes-page-header">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-8 col-md-9 col-lg-9">
                            <nav class="mythemes-nav-inline">
                                <ul class="mythemes-menu">
                                    <?php echo mythemes_breadcrumbs::home(); ?>

                                    <?php
                                        
                                        if ( is_day() ){
                                            $day    = get_the_date( );
                                            $m      = get_the_date( 'm' );
                                            $d      = get_the_date( 'd' );

                                            $month  = get_the_date( 'F' );
                                            $year   = get_the_date( 'Y' );
                                            $FY     = get_the_date( 'F Y' );

                                            echo '<li><a href="' . esc_url( get_year_link( $year ) ) . '" title="' . sprintf( __( 'Yearly Vault - %s' , 'treeson' ), esc_attr( $year ) ) . '">'  . esc_html( $year ) . '</a></li>';
                                            echo '<li><a href="' . esc_url( get_month_link( $year, $m ) ) . '" title="' . sprintf( __( 'Monthly Vault - %s' , 'treeson' ), esc_attr( $FY ) ) . '">'  . esc_html( $month ) . '</a></li>';
                                            echo '<li><time datetime="' . esc_attr( get_the_date( 'Y-m-d' ) ) . '">' . esc_html( $d ) . '</time></li>';

                                            $title  = __( 'Daily Vault' , 'treeson' );

                                        }else if ( is_month() ){
                                            $month  = get_the_date( 'F' );
                                            $year   = get_the_date( 'Y' );

                                            echo '<li><a href="' . esc_url( get_year_link( $year ) ) . '" title="' . sprintf( __( 'Yearly Vault - %s' , 'treeson' ), esc_attr( $year ) ) . '">'  . esc_html( $year ) . '</a></li>';
                                            echo '<li><time datetime="' . esc_attr( get_the_date( 'Y-m-d' ) ) . '">' . esc_html( $month ) . '</time></li>';
                                            
                                            $title  = __( 'Monthly Vault' , 'treeson' );

                                        }else if ( is_year() ){
                                            $year   = get_the_date( 'Y' );
                                            echo '<li><time datetime="' . esc_attr( get_the_date( 'Y-m-d' ) ) . '">'  . esc_html( $year ) . '</time></li>';

                                            $title  = __( 'Yearly Vault' , 'treeson' );

                                        }else{
                                            $year   = __( 'Vault' , 'treeson' );
                                            echo '<li>' . esc_html( $year ) . '</li>';
                                            $title  = $year;
                                        }
                                    ?>
                                    <li></li>
                                </ul>
                            </nav>
                            <h1><?php echo esc_html( $title ); ?></h1>
                        </div>

                        <div class="col-sm-4 col-md-3 col-lg-3 mythemes-posts-found">
                            <div class="found-details">
                                <?php echo mythemes_breadcrumbs::count( $wp_query ); ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    <?php
        }
    ?>

    <div class="content">
        <div class="container">
            <div class="row">

                <?php get_template_part( 'templates/loop' ); ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>