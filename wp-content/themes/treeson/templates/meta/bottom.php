<?php
    if( (bool)mythemes_mod( 'bottom-meta' , true ) ){

	    if( has_tag() ){
?>
	        <div class="post-meta-terms">
	            <div class="post-meta-tags">
	                <span class="btn"><i class="mythemes-icon-tags"></i></span>
	                <?php the_tags( '' , '' , '' ); ?>
	                <div class="clear clearfix"></div>
	            </div>
	        </div>
<?php
	    }
	}
?>