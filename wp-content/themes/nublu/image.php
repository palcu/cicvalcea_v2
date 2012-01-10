<?php get_header(); ?>

<div class="body">
<div class="blog">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="post" id="post-<?php the_ID(); ?>"> 
        
                   
			        <div class="fullpost">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2                                       
                    ><div class="meta">
                    Posted by <?php the_author() ?> <span>|</span> On: <?php the_time('M d Y'); ?>
                    </div><!--meta--> 
                <!-- gallerycode -->
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
				<!-- gallerycode -->
       				<div class="content"><?php the_content(); ?></div>
                    
                <!-- gallerynavigation -->
				<div class="imgnav">
					<div class="imgleft"><?php previous_image_link() ?></div>
					<div class="imgright"><?php next_image_link() ?></div>
				</div>
				<br clear="all" />
				<!-- gallerynavigation -->

                    </div><!--poststuff -->
                    
        			<div class="clear"></div>
                    <?php comments_template(); ?>
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