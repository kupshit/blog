<?php if ( get_theme_mod('social-share-style', 'choice-2') == 'choice-1' ) { ?>

<ul>
	<li class="twitter-btn">
	    <a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-show-count="false">Tweet</a>
	</li>
	<li class="facebook-btn">
		<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;src=sdkpreparse">Share</a></div>
	</li>
	<li class="google-plus-btn">
		<div class="g-plus" data-action="share"></div>
	</li>
</ul>

<?php } else { ?>

<div class="social-share-icons">

	<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( esc_attr( get_the_title( get_the_ID() ) ) ); ?>&amp;url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitter.png" alt=""/></a>

	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-facebook.png" alt=""/></a>

	<a href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-google-plus.png" alt=""/></a>

	<a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>&amp;media=<?php echo urlencode( wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-pinterest.png" alt=""/></a>

</div>

<?php } ?>