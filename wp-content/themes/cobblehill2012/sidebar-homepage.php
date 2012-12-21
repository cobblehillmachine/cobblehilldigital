<?php
/**
 * The Home Page widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
	/* The Home Page widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-homepage-widget-area'  )
		&& ! is_active_sidebar( 'third-homepage-widget-area'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

			<div id="homepage-widget-area" class="about-desktop" role="complementary">

<?php if ( is_active_sidebar( 'first-homepage-widget-area' ) ) : ?>
				<div id="first" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'first-homepage-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
<?php endif; ?>

				<div id="second" class="widget-area">
          <h3>From the Blog</h3>
          	<div id="blog-widget-wrap">
              <!-- <div class="widget-fade"></div> -->
                <ul>
                <?php
                  $args = array( 'numberposts' => '4','category' => '17');
                  $recent_posts = wp_get_recent_posts( $args );
                  foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                  }
                ?>
                </ul>
            </div><!-- blog-widget-wrap -->
          <a href="category/blog" class="button">View Blog</a>
				</div><!-- #second .widget-area -->

<?php if ( is_active_sidebar( 'third-homepage-widget-area' ) ) : ?>
				<div id="third" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'third-homepage-widget-area' ); ?>
					</ul>
				</div><!-- #third .widget-area -->
<?php endif; ?>
			</div><!-- #homepage-widget-area -->
