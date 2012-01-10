<?php get_header(); ?>

<div class="body">
<div class="blog">

            <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="search">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="search">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="search">Archive for <?php the_time('F jS, Y'); ?>:</h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="search">Archive for <?php the_time('F, Y'); ?>:</h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="search">Archive for <?php the_time('Y'); ?>:</h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="search">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="search">Blog Archives</h2>
 	  <?php } ?>

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
        
<?php endif; ?>

</div><!--blog-->

<?php get_sidebar(); ?>

</div><!--body-->

</div><!--wrapper-->

<?php get_footer(); ?>

</body>
</html>