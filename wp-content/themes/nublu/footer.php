<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<div class="footer">

<div class="bottomsection">
    <div class="bottomcontent">
    
        <div class="subscribe">
        <div class="boxtop"></div>
            <div class="boxmid">
                <h2 class="bh2">Subscribe to Newsletter</h2>
                <p>Enter your e-mail to get the latest posts and other updates!</p>
                <form action="http://feedburner.google.com/fb/a/mailverify" class="feedburner" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $nb_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                <input type="text" name="email" class="enteremail" value="Enter your E-mail" onfocus="if (this.value == 'Enter your E-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your E-mail';}" /><input type="hidden" value="<?php echo $nb_feedburner; ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe!" class="formsubmit" />
                </form>
            </div><!--boxmid-->
        <div class="boxbot"></div>
        </div><!--subscribe-->
    
    <div class="footbar">    
    <ul>

        <li>
        <h2><?php _e('Partners'); ?></h2>
            <ul>
             <?php get_links(2, '<li>', '</li>', '', TRUE, 'url', FALSE); ?>
             </ul>
        </li>

	</ul>
    </div><!--footbar-->
    
    <div class="footbar" style="width:340px;">    
    <ul>

        <li>
        <h2><?php _e('Recent Comments'); ?></h2>
<?php
global $wpdb;
$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
comment_post_ID, comment_author, comment_date_gmt, comment_approved,
comment_type,comment_author_url,
SUBSTRING(comment_content,1,100) AS com_excerpt
FROM $wpdb->comments
LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
$wpdb->posts.ID)
WHERE comment_approved = '1' AND comment_type = '' AND
post_password = ''
ORDER BY comment_date_gmt DESC
LIMIT 4";
$comments = $wpdb->get_results($sql);
$output = $pre_HTML;
foreach ($comments as $comment) {
$output .= "<div class='comm'><strong>".strip_tags($comment->comment_author)
." : " . "</strong><a href=\"" . get_permalink($comment->ID) .
"#comment-" . $comment->comment_ID . "\" title=\"on " .
$comment->post_title . "\">" . strip_tags($comment->com_excerpt)
."</a></div>";
}
$output .= $post_HTML;
echo $output;?>
        </li>

	</ul>
    </div><!--footbar-->
    
    <div class="clear"></div>
    </div><!--bottomconent-->
</div><!--bottomsection-->

<div class="footer_bottom"></div>

   <div class="copyright">Powered by <a href="http://www.wordpress.org" title="WordPress">Wordpress</a> | <span>NuBlu</span> Theme By <a href="http://www.blogohblog.com" title="Free WordPress Themes">Blogohblog.com</a></div>
   <?php wp_footer(); ?>
</div><!--footer -->