<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<div class="slideshow">
	<ul id="slider1">
      
        <?php $my_query = new WP_Query('showposts='.$nb_slideposts.'&category_name='.$nb_slidecat); while ($my_query->have_posts()) : $my_query->the_post(); ?> 
        <li>   
            <div class="boxthumb">
			<?php if (imagesrc()) { ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/thumbs.php?src=<?php echo imagesrc(); ?>&h=160&w=260&zc=1" alt="<?php the_title(); ?>" /></a>
            <?php } ?>
            </div>
            <div class="boxstuff">
            <h2 class="boxtitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>                 
            <div class="boxcontent"><?php limits(120, "Citeste tot..."); ?></div>
            </div>
            <div class="clear"></div>
        </li>
		<?php endwhile; ?>
		
	</ul>
            <div class="custom">
				<div id="my-pager"></div>
			</div>  
</div><!--slideshow -->
