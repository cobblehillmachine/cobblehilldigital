<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php if ( in_category(11) || in_category(12) || in_category(13) || in_category(14) || in_category(15) || in_category(16) )  { ?>
        	<div class="header-image-wrap clear-block">
            <div class="header-image">
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <img src="<?php echo $image[0]; ?>" />
              <img src="<?php bloginfo( 'template_directory' ); ?>/images/elephant-semi-circle.png" class="elephant">
            </div><!-- header-image -->
          </div><!-- header-image-wrap -->

          <div id="wrapper" class="hfeed">
            <div id="main" class="clear-block">
              <div class="single-content">
                <h2 class="entry-title"><?php the_title(); ?></h2>
                <h4>Services</h4>
								<div class="clear-block" style="padding-bottom: 15px;">
									<?php echo get_the_category_list(); ?>
                </div>
                <?php the_content(); ?>
                
               <a href="<?php the_field('website_link'); ?>" class="button">View the Site</a>                
                
              </div><!-- .single-content -->
              <div class="work-slides">
              
            <?php the_field('vimeo-embed'); ?>
            <?php if( get_field('sidebar_image') ):
							?><img src="<?php the_field('sidebar_image'); ?>" alt="" /><?php
						endif; ?>
            <?php if( get_field('sidebar_image2') ):
							?><img src="<?php the_field('sidebar_image2'); ?>" alt="" /><?php
						endif; ?>
            <?php if( get_field('sidebar_image3') ):
							?><img src="<?php the_field('sidebar_image3'); ?>" alt="" /><?php
						endif; ?>
            <?php if( get_field('sidebar_image4') ):
							?><img src="<?php the_field('sidebar_image4'); ?>" alt="" /><?php
						endif; ?>
            <?php if( get_field('sidebar_image5') ):
							?><img src="<?php the_field('sidebar_image5'); ?>" alt="" /><?php
						endif; ?>
            <?php if( get_field('sidebar_image6') ):
							?><img src="<?php the_field('sidebar_image6'); ?>" alt="" /><?php
						endif; ?>
            <?php if( get_field('sidebar_image7') ):
							?><img src="<?php the_field('sidebar_image7'); ?>" alt="" /><?php
						endif; ?>
            <?php if( get_field('sidebar_image8') ):
							?><img src="<?php the_field('sidebar_image8'); ?>" alt="" /><?php
						endif; ?>
          </div><!-- work slide -->
          
        <?php } else { ?>	

          <div class="header-image blog" style="background: url(<?php bloginfo( 'template_directory' ); ?>/images/blog-repeat.gif);">
            <div class="blog-header">
              <img src="<?php bloginfo( 'template_directory' ); ?>/images/blog-header.gif">
            </div>
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/elephant-semi-circle.png" class="elephant">
          </div>

          <div id="wrapper" class="hfeed">
            <div id="main" class="blog clear-block">
          
              <div class="left">
                <p class="date"><?php skeleton_posted_on(); ?></p>
                <h2><?php the_title(); ?></h2>
                <div class="entry-content">
                  <?php the_content(); ?>
                  
									<div class="mobile-post-images">
										<?php
                    $args = array(
                       'post_type' => 'attachment',
                       'numberposts' => -1,
                       'post_status' => null,
                       'post_parent' => $post->ID
                      );
                    
                      $attachments = get_posts( $args );
                         if ( $attachments ) {
                            foreach ( $attachments as $attachment ) {
                               echo '<img src="';
                               echo wp_get_attachment_url( $attachment->ID );
                               echo '" /><br />';
                              }
                         } ?>
                     </div><!-- mobile post images -->
                </div><!-- .entry-content -->
                <?php comments_template( '', true ); ?>
              </div><!-- left -->
              <div class="right">
                <?php
                $args = array(
                   'post_type' => 'attachment',
                   'numberposts' => -1,
                   'post_status' => null,
                   'post_parent' => $post->ID
                  );
                
                  $attachments = get_posts( $args );
                     if ( $attachments ) {
                        foreach ( $attachments as $attachment ) {
													 echo '<img src="';
                           echo wp_get_attachment_url( $attachment->ID );
                           echo '" /><br />';
                          }
                     } ?>
              </div><!-- right -->
        <?php } ?>	

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
