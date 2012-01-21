<?php
/*
 * Template Name: Page with Slideshow
*/
?>

<?php get_header(); ?>

<div class="body">
<div class="blog">

<?php include (TEMPLATEPATH . '/slideshow.php'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="post" id="post-<?php the_ID(); ?>"> 

			        <div class="fullpost">
       				<div class="content"><?php the_content(); ?></div>
                    </div><!--poststuff -->
                    
        			<div class="clear"></div>
        </div><!--post-->

<?php endwhile; ?>


		<div class="navigation">
			<div class="next"><?php next_posts_link('Older Posts') ?></div>
			<div class="prev"><?php previous_posts_link('Newer Posts') ?></div>
            <div class="clear"></div>
		</div>
        
<?php endif; ?>

</div><!--blog-->

<?php get_sidebar(); ?>

</div><!--body-->

</div><!--wrapper-->

<?php get_footer(); ?>

</body>
</html>
