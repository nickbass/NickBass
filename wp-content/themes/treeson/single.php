<?php get_header(); ?>

    <div class="content">
        <div class="container">
            <div class="row">

            <?php
                global $post;

                /* GET LAYOUT DETAILS */
                $mythemes_layout = new mythemes_layout( 'post' );

                /* LEFT SIDEBAR */
                $mythemes_layout -> sidebar( 'left' );
            ?>
                <!-- CONTENT -->
                <section class="<?php echo $mythemes_layout -> classes(); ?>">

                <?php
                    /* LEFT WRAPPER */
                    echo $mythemes_layout -> wrapper( 'left' );

                    if( have_posts() ){
                        while( have_posts() ){
                            the_post();
                ?>
                            <article <?php post_class(); ?>>

                                <!-- TITLE -->
                                <h1 class="post-title"><?php the_title(); ?></h1>
                          
                                <!-- TOP META : AUTHOR / TIME / COMMENTS -->
                                <?php get_template_part( 'templates/meta/top' ); ?>

                                <?php
                                    $p_thumbnail = get_post( get_post_thumbnail_id( $post -> ID ) );

                                    if( has_post_thumbnail( $post -> ID ) && isset( $p_thumbnail -> ID ) ){
                                ?>
                                        <div class="post-thumbnail overflow-wrapper">
                                        <?php
                                            echo get_the_post_thumbnail( $post -> ID , 'mythemes-classic' , array(
                                                'alt' => mythemes_post::title( $post -> ID, true )
                                            ));

                                            $c_thumbnail = isset( $p_thumbnail -> post_excerpt ) ? esc_html( $p_thumbnail -> post_excerpt ) : null;

                                            if( !empty( $c_thumbnail ) ){
                                                echo '<div class="valign-bottom-cell-wrapper">';
                                                echo '<footer class="valign-cell">' . $c_thumbnail . '</footer>';
                                                echo '</div>';
                                            }
                                        ?>
                                        </div>
                                <?php
                                    }
                                ?>

                                <!-- CONTENT -->
                                <?php the_content(); ?>

                                <div class="clearfix"></div>

                                <?php
                                    wp_link_pages( array( 
                                        'before'        => '<div class="mythemes-paged-post"><span class="mythemes-pagination-title">' . __( 'Pages', 'treeson' ) . ': </span>',
                                        'after'         => '</div>',
                                        'link_before'   => '<span class="mythemes-pagination-item">',
                                        'link_after'    => '</span>'
                                    ));
                                ?>

                                <div class="clearfix"></div>

                                <?php get_template_part( 'templates/meta/bottom' ); ?>
                            </article>

                            <!-- COMMENTS -->
                            <?php comments_template(); ?>

                <?php
                        } /* END ARTICLE */
                    }
                ?>

                <?php
                    /* RIGHT WRAPPER */
                    echo $mythemes_layout -> wrapper( 'right' );
                ?>

                </section>

            <?php
                /* RIGHT SIDEBAR */
                $mythemes_layout -> sidebar( 'right' );
            ?>
            
            </div>
        </div>
    </div>

<?php get_footer(); ?>