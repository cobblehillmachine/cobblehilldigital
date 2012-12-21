<?php get_header(); ?>

  <div class="header-image" style="background: url(<?php bloginfo( 'template_directory' ); ?>/images/blog-repeat.gif);">
  	<div class="blog-header">
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/blog-header.gif">
    </div>
    <img src="<?php bloginfo( 'template_directory' ); ?>/images/elephant-semi-circle.png" class="elephant">
  </div>

<div id="wrapper" class="hfeed">
	<div id="main" class="clear-block">

    <div id="content" role="main">

    <?php
    /* Run the loop to output the posts.
     * If you want to overload this in a child theme then include a file
     * called loop-index.php and that will be used instead.
     */
     get_template_part( 'loop', 'index' );
    ?>
    <script>
			$(function() {
				$(".post-link:nth-child(3n)").addClass('work-no-margin');
			}); 
		</script>
    </div><!-- #content -->
<?php get_footer(); ?>
