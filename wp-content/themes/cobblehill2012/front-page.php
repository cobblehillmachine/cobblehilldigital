<?php get_header(); ?>

<?php
	/* The Home Page widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-homepage-widget-area'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

			<div id="homepage-widget-area" class="about-mobile clear-block" role="complementary">

<?php if ( is_active_sidebar( 'first-homepage-widget-area' ) ) : ?>
				<div id="first" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'first-homepage-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
      </div>
<?php endif; ?>


  <div id="video-wrap">
 	
 	<video id="video_background" preload="auto" autoplay="true" loop="loop" volume="0"> 
 	<source src="<?php echo get_template_directory_uri(); ?>/videos/test2.webm" type="video/webm"> 
 	<source src="<?php echo get_template_directory_uri(); ?>/videos/test2.mp4" type="video/mp4">
 	<source src="<?php echo get_template_directory_uri(); ?>/videos/test2.ogv" type="video/ogg">  
 	Video not supported </video>

     </div>

<!-- <div id="slideshow-wrap-outer" class="clear-block">
  <div id="slideshow-wrap">
    <div id="slideshow">
      <a href="<?php echo home_url( '/' ); ?>about">
        <div class="slide">
        	<div class="slide-desc one">
            <h2>We Are a Creative <br /><strong>Agency &amp; Design Studio</strong></h2>
            <div class="slide-button">Learn More About Us</div>
          </div>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/01-about-slide.jpg">
        </div>
      </a>
      <a href="<?php echo home_url( '/' ); ?>work">
        <div class="slide">
        	<div class="slide-desc two">
            <h2>We Create <br /><strong>Exceptional Experiences</strong></h2>
            <div class="slide-button">View Our Work</div>
          </div>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/02-work-slide.jpg">
        </div>
      </a>
      <a href="<?php echo home_url( '/' ); ?>services">
        <div class="slide">
        	<div class="slide-desc three">
            <h2>We Bring Brands &amp; <br /><strong>Businesses To Life</strong></h2>
            <div class="slide-button">View Our Services</div>
          </div>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/slides/03-services-slide.jpg">
        </div>
      </a>
    </div>
  </div>
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/elephant-semi-circle.png" class="elephant">
</div> -->

<script>
	$(function() {	
		$("#slideshow a").hover(function(){
		$(".slide-button").toggleClass("rollover");
	});
	
	}); 
</script>
  
  <div id="featured-work-wrap" class="clear-block">
  	<h3>Featured Work</h3>
			<?php $sticky = get_option( 'sticky_posts' );
$args = array(
	'posts_per_page' => 3,
	'post__in'  => $sticky,
	'ignore_sticky_posts' => 1
);
query_posts( $args ); ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="work">
        <img src="<?php the_field('work_thumbnail'); ?>" alt="" />
          <span>
            <div class="title">
              <h4><?php the_title(); ?></h4>
              <p>										
              <?php
                $categories = get_the_category();
                $separator = ', ';
                $output = '';
                if($categories){
                  foreach($categories as $category) {
                    $output .= $category->cat_name.$separator;
                  }
                echo trim($output, $separator);
                }
              ?>
              </p>
            </div><!-- title -->	
          </span>
        </a>
			<?php endwhile; ?>
    <a href="work" class="work view-all">
      <p class="button">View All Work</p>
      <span class="button"><p>View All Work</p></span>
    </a>
    <script>
			$(function() {
				$("#featured-work-wrap a.work:nth-child(3n)").addClass('featured-work-no-margin');
			}); 
		</script>
  </div><!-- featured-work-wrap -->
  
  <div id="services-wrap" class="clear-block">
  	<div id="services" class="clear-block">
      <h3>Our Services</h3>
      <a href="<?php echo home_url( '/' ); ?>category/work/web-design-development" class="service web-design clear-block">
      	<h4>Web Design &amp;<br />Development</h4>
        <p>Our collaborative approach to web design and development is designed to make sure that your site integrates seamlessly with every aspect of your brand. </p>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/work/mobile-application-design-development" class="service mobile-design clear-block">
      	<h4>Mobile Application<br />Design &amp; Development</h4>
        <p>Our experience building mobile-optimized responsive websites and applications allows us to tailor to your audience’s needs, leading to greater customer satisfaction and engagement.</p>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/work/social-media-marketing-strategy" class="service social-media clear-block">
      	<h4>Social Media Marketing<br />&amp; Strategy</h4>
        <p>By integrating topics and messages that relate to your service or product, we’re able to add real value for your friends and followers and create a lifestyle around your brand.</p>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/work/photography-videography-production" class="service photography clear-block">
      	<h4>Photography &amp;<br />Videography Production</h4>
        <p>Photo and video are two of the purest mediums for conveying an authentic sense of who you are and what you offer.</p>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/work/branding-identity-work" class="service branding clear-block">
      	<h4>Design, Branding<br />&amp; Identity Work</h4>
        <p>We help our clients develop their own unique identity through strategic positioning, print collateral, logos and consistent messaging across all marketing channels. </p>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/work/digital-project-management" class="service management clear-block">
      	<h4>Digital Project<br />Management</h4>
        <p>Our wealth of digital project management experience ensures that projects are efficiently managed in order to keep costs down and make sure that deadlines are hit.</p>
      </a>
    </div><!-- services -->
  </div><!-- services-wrap -->

<div id="wrapper" class="hfeed">
	<div id="main" class="clear-block">

<?php get_sidebar( 'homepage' ); ?>

<?php get_footer(); ?>
