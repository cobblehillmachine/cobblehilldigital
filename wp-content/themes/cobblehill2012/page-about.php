<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="header-image" style="background: url(<?php echo $image[0]; ?>);">
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/elephant-semi-circle.png" class="elephant"></div>
	<div id="wrapper" class="hfeed">
      	<div id="main" class="clear-block">
      		<div class="clear-block">
          		<div id="left">
            		<h2><?php echo get_post_meta($post->ID, 'Headline', true); ?></h2>

          		</div><!-- left -->
          		<div id="right">
            		<?php the_content(); ?>
          		</div><!-- right -->
        	</div>
		</div>

	
<?php endwhile; ?>

		<?php query_posts(array('post_type' => 'Team Members', 'order' => 'ASC', 'posts_per_page' => 20)); ?>
		<div class="main clear-block">			
			<div class="clear-block">
				<div class="left">
					<h2>Our team</h2>
					<h3>We’re hiring</h3>
					<p>Are you a self-motivated, highly creative individual who </br> thrives under pressure? We want you! We’re currently on </br> the hunt for:</p>

					<p>
						<a href="/blog/project-manager">Project Manager</a><br/>

						<a href="/blog/web-developer">Web Developer</a><br/>

						<a href="/blog/design-intern">Design Intern</a><br/>

						<a href="/blog/web-development-intern">Web Development Intern</a>
					</p>
				</div>
				<div class="right team-member">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
								if ($post_image_id) {
									$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
									if ($thumbnail) (string)$thumbnail = $thumbnail[0];
								} ?>	
						<div class="single-cont">
							<div class="img-cont" style="background: url('<?php echo $thumbnail; ?>') no-repeat;">
								<div class="overlay">
									<div class="member-name"><?php the_title(); ?></div>
									<div class="member-title"><?php the_content(); ?></div>
								</div>
							</div>
						</div>
					<?php endwhile;  wp_reset_query(); ?>
				</div>		
			</div>
		</div>	
		<?php query_posts(array('post_type' => 'Past Clients', 'order' => 'ASC', 'posts_per_page' => 20)); ?>
		<div class="main clear-block">		
			<div class="clear-block">
				<div class="left">
					<h2>Past Clients</h2>
					<h3>INTERESTED IN PARTNERING WITH US?</h3>
					 <p>We're always excited to hear about new and </br>exciting projects and partnerships. </p>
					<p><a href="/contact">Give Us a Shout</a></p>
				</div>
				<div class="right past-client">
					<?php while ( have_posts() ) : the_post(); ?>	
						<div class="single-cont">
							<a class="img-cont" href="<?php echo $wpdb->get_var("SELECT post_content FROM $wpdb->posts WHERE ID = $id");?>"><?php the_post_thumbnail(); ?></a>
						</div>
					<?php endwhile;  wp_reset_query(); ?>
				</div>		
	
		</div>
		<?php get_footer(); ?>
	</div>
