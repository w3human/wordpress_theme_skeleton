<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		
		<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
		<p class="author"><?php _e( 'Published by', 'custom' ); ?> <?php the_author_posts_link(); ?></p>
		<p class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'custom' ), __( '1 Comment', 'custom' ), __( '% Comments', 'custom' )); ?></p>
		
		<?php the_excerpt(); // Build your custom callback length in functions.php ?>
		
		<?php // edit_post_link(); ?>
		
	</article>
	
<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'custom' ); ?></h2>
	</article>

<?php endif; ?>