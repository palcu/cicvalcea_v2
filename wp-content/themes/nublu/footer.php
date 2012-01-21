<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<div class="footer">
   <div class="copyright">Powered by <a href="http://www.wordpress.org" title="WordPress">Wordpress</a> | <span>NuBlu</span> Theme By <a href="http://www.blogohblog.com" title="Free WordPress Themes">Blogohblog.com</a> | Personalizat de <a href="http://palcu.blogspot.com/">Alexandru Palcuie</a></div>
   <?php wp_footer(); ?>
</div><!--footer -->
