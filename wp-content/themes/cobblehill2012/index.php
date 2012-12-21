
<?php get_header(); ?>

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
				$(".post-link:nth-child(even)").addClass('work-no-margin-mobile');
				$(".post-link:nth-child(3n)").addClass('work-no-margin');
			}); 
		</script>
    </div><!-- #content -->
<?php get_footer(); ?>
