<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'skeleton' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'skeleton' ); ?></p>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'skeleton' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="post-link">
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
        <div class="date">
          <?php skeleton_posted_on(); ?>
        </div><!-- .date -->
        
        <div class="post-excerpt">
          <h3><?php the_title(); ?></h3>
    
          <div class="entry-summary">
            <?php the_excerpt(); ?>
          </div><!-- .entry-summary -->
        </div>
  
      </div><!-- #post-## -->
    </a>

		<?php comments_template( '', true ); ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
          	<div class="previous"><?php previous_posts_link( __( 'Previous', 'skeleton' ) ); ?></div>
						<div class="next"><?php next_posts_link( __( 'Next', 'skeleton' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
