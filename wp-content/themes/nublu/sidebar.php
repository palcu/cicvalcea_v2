<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<div class="sidebar">

    <div class="searchbar">
    <form action="<?php bloginfo('url'); ?>/" method="GET">
    <input type="text" value="Search..." name="s" id="ls" class="searchfield" onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
    <input type="image" src="<?php bloginfo('template_directory'); ?>/images/searchbutton.png" style="float:right;" />
    </form>
    <div class="clear"></div>
    </div><!--searchbar -->
    <div class="clear"></div>
    
    <div class="socialicons">
    <a href="<?php bloginfo('rss2_url'); ?>" ><img src="<?php bloginfo('template_directory'); ?>/images/feed.png" border="0" alt="RSS" /></a>
    <a href="http://www.twitter.com/<?php echo $nb_twitter; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" border="0" alt="Follow us on Twitter!" /></a>
    <a href="http://www.facebook.com/<?php echo $nb_facebook; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" border="0" alt="Follow us on Facebook!" /></a>
    <a href="http://www.linkedin.com/<?php echo $nb_linkedin; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" border="0" alt="Follow us on Linkedin!" /></a>
    </div><!--socialicons -->
    <div class="clear"></div>
    
    <div class="side_cont"> 
    <div class="side_top"></div>
    <div class="side_mid">


	<ul class="wits">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

        <li>
        <h2><?php _e('Categories'); ?></h2>
            <ul>
            <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
            </ul>
        </li>
      	
        <li>
        <h2><?php _e('Archives'); ?></h2>
            <ul>
            <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>
        
        <li>
        <h2><?php _e('Links'); ?></h2>
            <ul>
             <?php get_links(2, '<li>', '</li>', '', TRUE, 'url', FALSE); ?>
             </ul>
        </li>
        
	<?php endif; ?>
	</ul>


    </div><!--side_mid-->
    <div class="side_bot"></div>
    </div><!--side_cont-->

</div><!--sidebar-->
<div class="clear"></div>
