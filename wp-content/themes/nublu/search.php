<?php get_header(); ?>

<div class="body">
<div class="blog">

            <?php if (have_posts()) : ?>
            <h2 class="search">Search results for "<?php echo $_GET['s']; ?>" :-</h2>
		<?php while (have_posts()) : the_post(); ?>
                    
        
        <div class="post" id="post-<?php the_ID(); ?>"> 
        
                    <div class="postthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php zt_get_thumbnail(); ?></a></div>
                    
			        <div class="poststuff">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2                                       
                    ><div class="meta">
                    Posted by <?php the_author() ?> <span>|</span> On: <?php the_time('M d Y'); ?> <span>|</span>  <?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?>
                    </div><!--meta--> 
       				<div class="content"><?php limits2(260, ""); ?></div>
                    </div><!--poststuff -->
                    
        			<div class="clear"></div>
        </div><!--post-->
        <div style="height:1px;border-bottom:1px dotted #d6d6d6; margin-left:20px;"></div>
<?php endwhile; ?>

		<div class="navigation">
			<div class="next"><?php next_posts_link('Older Posts') ?></div>
			<div class="prev"><?php previous_posts_link('Newer Posts') ?></div>
            <div class="clear"></div>
		</div>

<?php else: ?>

<h2 class="nothing">Nothing found for "<?php echo $_GET['s']; ?>" !</h2>
        
<?php endif; ?>

</div><!--blog-->

<?php get_sidebar(); ?>

</div><!--body-->

</div><!--wrapper-->

<?php get_footer(); ?>

</body>
</html>