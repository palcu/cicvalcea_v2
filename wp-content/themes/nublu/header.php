<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script language="Javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.1.js"></script>
<script language="Javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bxslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/twitter.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/cufon.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/Sling_400-Sling_700.font.js" type="text/javascript"></script>
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<script type="text/javascript" charset="utf-8">
getTwitters('tweet', {
 id: '<?php echo $nb_twitter; ?>',
 count: 1,
 enableLinks: true,
 ignoreReplies: true,
 clearContents: true,
 template: '"%text% : Posted %time%"'
});
</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#slider1').bxSlider({
				pager: true,
				pagerSelector: '#my-pager',
				controls: false
			});
		// dropdown menus
	$('.menu ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(300);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(300);			
		}
	);
		});
	Cufon.replace('.boxtitle');
	Cufon.replace('.post h2');
	Cufon.replace('.content h1');
	Cufon.replace('.content h2');
	Cufon.replace('.content h3');
	Cufon.replace('.content h4');
	Cufon.replace('.content h5');
	Cufon.replace('.content h6');
	Cufon.replace('.wits h2');
	Cufon.replace('.rmore');
	Cufon.replace('.bh2');
	Cufon.replace('.footbar h2');
	Cufon.replace('.copyright span');
	</script>
            <?php if (function_exists('wp_enqueue_script') && function_exists('is_singular')) : ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body>
<div class="wrapper">

  <div class="access">
     <h1 class="homepage"><a href="<?php echo get_settings('home'); ?>">Home</a></h1>
<?php wp_nav_menu(array('theme_location' => 'nav-menu','container'  => 'div', 'container_class' => 'menu' )); ?>
</div><!-- end of access -->
<div class="clear"></div>
<div class="header">

<div class="logo"><h1>
<img src="<?php bloginfo('template_directory'); ?>/images/logo_cicvalcea.jpg" height="70" width="70" />
<a href="<?php echo get_option('home'); ?>/">Europe Direct Valcea</a></h1></div>
<div id="twit">Bine ati venit !!!</div>
</div><!--header-->
