<?php get_header(); ?>

<div class="work-headline-wrap">          
  <h2>We create quality experiences<br />that are engaging and collaborative</h2>
</div>
<div id="wrapper" class="hfeed">
	<div id="main" class="clear-block">
  	<div class="filter-by">
    	<a href="#" class="tab">Filter By Service</a>
      <ul>
      	<li><a href="<?php echo home_url( '/' ); ?>category/work/web-design-development">Web Design &amp; Development</a></li>
      	<li><a href="<?php echo home_url( '/' ); ?>category/work/branding-identity-work">Design, Branding &amp; Identity Work</a></li>
      	<li><a href="<?php echo home_url( '/' ); ?>category/work/photography-videography-production">Photography &amp; Videography Production</a></li>
      	<li><a href="<?php echo home_url( '/' ); ?>category/work/mobile-application-design-development">Mobile Application Design &amp; Development</a></li>
      	<li><a href="<?php echo home_url( '/' ); ?>category/work/social-media-marketing-strategy">Social Media Marketing &amp; Strategy</a></li>
      	<li><a href="<?php echo home_url( '/' ); ?>category/work/digital-project-management">Digital Project Management</a></li>
      </ul>
    </div>
    <div class="clear-block">
    <?php query_posts(array('cat' => '11,16,13,15,12,14', 'post_type' => 'post', 'posts_per_page' => 100)); while (have_posts()) { the_post(); ?>
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
    <?php } ?>
    </div>
    <script>
			$(function() {
				$("a.work:nth-child(4n)").addClass('work-no-margin');
				$("a.work:nth-child(3n)").addClass('work-no-margin-tablet');
			}); 
		</script>

<?php get_footer(); ?>
