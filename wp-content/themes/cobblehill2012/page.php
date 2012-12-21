<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php if ( is_page('contact') ) { ?>

		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="header-image" style="background: url(<?php echo $image[0]; ?>);">
    	<div class="contact-map">
      	<div class="map-popup">
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/arrow.png" />
          <div>
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/contact-popup-image.jpg" />
          </div>
        </div><!-- map-popup -->
      	<img src="<?php bloginfo( 'template_directory' ); ?>/images/map-marker.png" class="map-marker" />
      	<img src="<?php bloginfo( 'template_directory' ); ?>/images/map.png" class="map" />
      </div><!-- contact-map -->
    <img src="<?php bloginfo( 'template_directory' ); ?>/images/elephant-semi-circle.png" class="elephant">
    </div><!-- header-image -->
  
    <div id="wrapper" class="hfeed">
      <div id="main" class="clear-block">
        <div id="left">
          <h2><?php echo get_post_meta($post->ID, 'Headline', true); ?></h2>
        </div><!-- left -->
        	
          <?php the_content(); ?>
                         
	<?php } else { ?>	

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
        	<?php if ( is_page('services') ) { ?>
          	<div id="service-lines" class="clear-block">
            
            	<div class="web-design service">
                <h4>Web Design &amp; Development</h4>
                <p>We don’t build websites, we create experiences. Whether it’s a one page brochure site or a full blown e-commerce portal, our holistic, collaborative approach to web design and development is designed to make sure that your site integrates seamlessly with every aspect of your brand and marketing efforts.</p>
              <a href="<?php echo home_url( '/' ); ?>category/work/web-design-development" class="button">View Web Design &amp; Development Work</a>
              </div><!-- service -->
              
            	<div class="branding service">
                <h4>Design, Branding &amp; Identity Work</h4>
                <p>Companies that succeed are ones that not only have a compelling product or service to offer, but that have a thoughtfully developed brand strategy to support it. We help our clients develop their own unique identity and voice through strategic positioning, print collateral, logos and consistent messaging across all marketing channels.</p>
              <a href="<?php echo home_url( '/' ); ?>category/work/branding-identity-work" class="button">View Design, Branding &amp; Identity Work</a>
              </div><!-- service -->
              
            	<div class="photography service">
                <h4>Photography &amp; Videography Services</h4>
                <p>Photo and video are two of the purest mediums for conveying an authentic sense of who you are and what you offer. Our extensive experience shooting everything from food to lifestyle to fashion has given us a keen eye for how to capture the essence of your brand in a way that speaks to your target audience.</p>
              <a href="<?php echo home_url( '/' ); ?>category/work/photography-videography-production" class="button">View Photography &amp; Videography Work</a>
              </div><!-- service -->
              
            	<div class="mobile-design service">
                <h4>Mobile Application Design &amp; Development</h4>
                <p>The days of being able to rely solely on a desktop optimized website are over. Today, you need to be able to engage customers on their terms, no matter what type of device they’re using. Our experience building mobile-optimized responsive websites and applications (both Android and iOS) allows us to tailor the experience to your audience’s needs, leading to greater customer satisfaction and engagement.</p>
              <a href="<?php echo home_url( '/' ); ?>category/work/mobile-application-design-development" class="button">View Mobile Application Design &amp; Development Work</a>
              </div><!-- service -->
              
            	<div class="social-media service">
                <h4>Social Media Marketing &amp; Strategy</h4>
                <p>Whether working on multi-platform social media campaigns for fortune 500 companies or consulting on strategic outreach efforts for local businesses, we understand that engaging fickle audiences requires more than just endless self-promotion. By integrating topics and messages that relate to your service or product, we’re able to add real value for your friends and followers and, in the process, help create a lifestyle around your brand.</p>
              <a href="<?php echo home_url( '/' ); ?>category/work/social-media-marketing-strategy" class="button">View Social Media Marketing &amp; Strategy Work</a>
              </div><!-- service -->
              
            	<div class="management service">
                <h4>Digital Project Management</h4>
                <p>Our wealth of digital project management experience ensures that projects are efficiently managed in order to keep costs down and make sure that deadlines are hit. Whether it’s managing our own projects or working with other companies to make sure that their projects come in on time, under budget and according to spec, our hands-on approach to client relationships will give you the confidence to tackle even the most daunting digital initiatives.</p>
              <a href="<?php echo home_url( '/' ); ?>category/work/digital-project-management" class="button">View Digital Project Management Work</a>
              </div><!-- service -->
              
            </div>
					<?php } ?>	

	<?php } ?>	
  
<?php endwhile; ?>

<?php get_footer(); ?>


