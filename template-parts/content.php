<article id="post-<?php the_ID(); ?>" <?php post_class( array('list-article', 'clearfix') ); ?>>

	<div class="list-article-thumb">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php
			if ( has_post_thumbnail( ) ) {
				the_post_thumbnail( 'onepress-blog-small' );
			} else {
				echo '<img alt="" src="'. get_template_directory_uri() . '/assets/images/placholder2.png' .'">';
			}
			?>
		</a>
	</div>

	<div class="list-article-content">
		<header class="entry-header">
			<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() )), 			'</a></h2>'); ?>
		</header><!-- .entry-header -->
		<div class="entry-excerpt">
			<?php
				echo('<h6>El Resumen: </h6>');
				the_excerpt();
				
				echo('<br><h6>El contenido: </h6>');
				the_content();
			
				echo('<a href="'. esc_url(get_permalink()) .'"> Leer más...</a>');
			
				
			?>
		</div><!-- .entry-content -->
	</div>
	
	<h6>Posted on <?php the_time('F j, Y'); ?> by <?php the_author() ?> </h6>	
	
</article><!-- #post-## -->
