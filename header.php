<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WRMD_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://www.wrmd.org/css/site.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/app.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wrmd-blog' ); ?></a>

	<header class="site-header bg-light"><a href="https://www.wrmd.org" class="mediablock logo-stamp">
		<aside>
			<svg version="1.1" id="logo_xA0_Image_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 229.4 324.2" xml:space="preserve"><style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4DA64E;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;}
	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
	.st3{fill-rule:evenodd;clip-rule:evenodd;fill:#3B556A;}
</style> <path d="M174,35.4c-5.5-0.3-6.8,3.4-8.4,7c-2.4-1.7-3.9-4.8-7.2-5.2c-2.9-0.3-7,2.4-9.4,4.6c-3.4,3.2-5.3,6.5-5.4,12
	c-2.2-0.2-4.6,1.1-6.8,0.8c-1.7-0.2-4.7-2.6-6.4-3.6c-6.2-3.6-12.8-7.5-18.8-10.8c6.4-11.2,21.4-16.7,38-18
	C161.6,21.3,169.3,28.1,174,35.4z M136,33.4c-1.4,1.3-3.1,3.4-3,5.4c2.3-0.3,2.8-2.7,4.2-4c1-1,2.4-1.6,3.6-2.2
	c1.1-0.6,3.1-0.9,3.4-2.6C141,29.7,137.9,31.5,136,33.4z" class="st0"></path> <path d="M144.2,30c-0.3,1.7-2.3,2-3.4,2.6c-1.2,0.6-2.6,1.2-3.6,2.2c-1.4,1.3-1.9,3.7-4.2,4c-0.1-2,1.6-4.1,3-5.4
	C137.9,31.5,141,29.7,144.2,30z" class="st1"></path> <path d="M184.2,47.2c-4.7,1.1-9.2,2.6-14,3.6c-0.1-2.1-3-4.4-3.2-6.4c-0.2-2.3,2.6-6.6,4.8-7c0.5-0.1,1.4,0,1.8,0
	C179.1,37.9,182.5,42.9,184.2,47.2z" class="st2"></path> <path d="M168.2,51.2c-7.6,0.7-15.1,1.6-22.6,2.4c-0.1-3.7,1.4-7,3.6-9.4c1.9-2,6.1-5.6,9.4-5c2.2,0.4,4.5,3.3,5.8,5
	C166.1,46.5,167.3,48.6,168.2,51.2z" class="st2"></path> <path d="M142,79.4c2.4,0.7,4.8-1.1,6.8-0.6c2,0.5,2.4,3.5,3.6,4.2c-6.3-0.6-13.1,0-15.8,3.6c1.7,0.9,4-0.9,6.6-1.4
	c2.7-0.6,5.6-0.4,8.4-0.6c0.7,0,1.9,0.4,2-0.6c2.2,1.8,4.4,3.7,7.6,3.8c5.4,0.1,9.1-4.6,11.6-7.6c9,4,22.8,6.9,24,18.6
	c0.5,4.6-0.4,9-3.4,11.4c-2.7,2.1-7.3,2.8-11.2,3.4c-4.2,0.7-8.8,1.2-13.6,1c-11.6-0.6-19.8-6.4-26.4-11.8c1-1.8,3.3-2.3,3.6-4.8
	c-3.1,0.1-4.4,3.4-6.6,5.2c-1.8,1.4-4.3,2-5.2,4.2c2,0.7,3.7-0.9,5.4-2.2c0.3-0.3,1.3-1.2,1.4-1.2c0.6,0,5.1,4.1,5.8,4.6
	c7.3,5,16.5,8.8,28.6,7.8c-3.3,5.7-10.7,8.9-19,9c-9,0.1-18.4-3.8-28.2-4.4c-4.4-0.2-10.3,1.1-14.2,0.2c-4.4-1-9.3-5.6-12.2-8.6
	c-3.7-3.9-6.4-7.7-7.4-13.2c-1.1-6-1.2-13.4,0.2-19.2c0.7-2.7,2-4.9,3.4-7c1.2-1.8,3.4-4.3,3.8-6.4c0.3-1.4,0-2.8,0.2-4
	c1.1-7.8,5-16,8.8-21c8.5,4.6,16.8,9.5,25,14.4C137.9,63.8,139.2,72.3,142,79.4z" class="st0"></path> <path d="M190.4,47.4c1.4,2.8,1.6,6.8,2.8,9.8c-1,1.6-2.5,2.7-3,4.8c-0.3-5.3-1.4-9.8-3.2-13.6
	C188.1,48,189.4,47.9,190.4,47.4z" class="st2"></path> <path d="M143.6,55.8c-0.1,8.6,0.7,16.2,4.4,21c-1.4,0.5-3.5,0.4-5,0.8c-1.7-7.1-3.5-14.1-5.4-21
	C139.2,56,141.6,56,143.6,55.8z" class="st0"></path> <path d="M180.2,56.6c3.4,2.7,3,11.9-0.6,14C173,71.2,172.5,55.2,180.2,56.6z" class="st1"></path> <path d="M157.8,65.8c0.2-3.8,1.4-8.3,4.6-8.2c2.6,0.1,3.6,3.7,3.8,7c0,0.7,0,1.5,0,2.2c1,5.9-8.7,9.2-8.4,1.6
	C157.8,67.5,157.8,66.7,157.8,65.8z" class="st1"></path> <path d="M208.2,125.2c-6.1-3.8-12.5-7.4-18.2-11.6c8.7-1,10.6-13.8,6.6-20.8c-0.2-0.3-1.4-1.8-1.4-2
	c0-0.6,2.2-3.9,2.4-5.6c0.7-6.3-6.6-11-6.6-18.4c0-5.3,4.1-11.3,10.2-8c2.2,1.2,4.7,4.5,6.6,7c2.1,2.8,3.7,5.5,5,8.4
	c2.7,5.7,5.6,13.6,5.6,21.2C218.4,107.6,213,117.1,208.2,125.2z" class="st0"></path> <path d="M166.2,64.6c0.3,0.3,0.3,1.9,0,2.2C166.2,66.1,166.2,65.3,166.2,64.6z" class="st0"></path> <path d="M157.8,68.4c-0.3-0.4-0.3-2.2,0-2.6C157.8,66.7,157.8,67.5,157.8,68.4z" class="st3"></path> <path d="M189.6,70.8c1.7,5.7,8.8,11.2,4.6,18.4c-3.7-2.8-7.5-5.6-12.2-7.4C185.4,79,189,76.4,189.6,70.8z" class="st2"></path> <path d="M173.8,78c0-1,0-2,0-3c4.4-0.3,8.9-2.1,13.2-3.2c0.8,2.6-3.6,6.8-6.2,8.2C177.5,80.3,175.7,79.1,173.8,78z" class="st2"></path> <path d="M151.4,78.4c6.8-0.8,13.7-1.5,20.2-2.6c1,3.5-2.2,5.8-4.2,7.4C161.1,88.5,154.4,83.8,151.4,78.4z" class="st2"></path> <path d="M212.6,121.4c1.8,1.5,2.9,4.6,2.2,8c-1.7-1.1-3.4-2.2-5.2-3.2C210.7,124.7,211.6,123,212.6,121.4z" class="st3"></path> <path d="M164.4,126c-1.1,1.8-2.1,3.8-3.4,5.4c-12.9,3.2-31.3,3-42-2c-0.2-0.4,0.7-1.7,1.2-3c0.5-1.2,1-2.4,1.4-3.4
	C137,121.7,149.5,129.9,164.4,126z" class="st0"></path> <path d="M172.4,124c0.6,3,0.4,9.4-2.6,10.2c-0.1-3,1.4-6.2,1.2-10c0.2-0.2,0.5-0.1,0.6-0.4C172,123.8,172,124,172.4,124
	z" class="st1"></path> <path d="M170.2,124.2c0.5,5.2-1.6,11.1-5,13.8c-0.7-2.2,1.2-4.1,2-6.2c0.8-2.2,1.2-4.5,1.8-7c0.1-0.3,0.4-0.3,0.4-0.6
	C169.7,124.2,169.9,124.2,170.2,124.2z" class="st1"></path> <path d="M114.8,128c0.5-0.5,1.8-0.1,2.6-0.2c-0.1,0.4-0.5,0.4-0.6,0.8C115.9,128.6,115.6,128,114.8,128z" class="st3"></path> <path d="M186,155.2c1.3,3.1,1.5,6.8,2.2,10.2c0.7,3.4,2.3,6.5,2.4,9.6c-0.8,0.6-1.4,0.1-2-0.4c-1.1,0.8-1.3,1.4-2.2,1.8
	c-11.1,5.2-12.4-17-1-12.8C186.1,161.5,182,155.7,186,155.2z M182.4,174.4c2.1,0.5,4.7-0.5,5-2.8c0.2-1.7-1.1-5.4-2.2-6
	c-0.8-0.4-1.8-0.2-2.8,0C178.3,166.6,178.5,173.5,182.4,174.4z" class="st2"></path> <path d="M182.4,165.6c1-0.2,2-0.4,2.8,0c1.1,0.6,2.4,4.3,2.2,6c-0.3,2.3-2.9,3.3-5,2.8
	C178.5,173.5,178.3,166.6,182.4,165.6z" class="st3"></path> <path d="M175.6,179.6c-2.1,1.2-2.9-3-3.6-5c-0.9-2.5-1.4-4.6-2.8-5.4c-1.5,0.4-2,1.7-3,2.6c0.3,1.9,1.1,3.3,1.8,5.2
	c0.4,1.2,1.9,4.5,0.2,5c-1.9,0.5-2.5-4-3-5.4c-0.9-2.4-1.4-4.2-2.2-6c-1.7,0.9-2,3-3,4.6c-0.5,1.5,2.9,7.2,0.8,7.8
	c-2,0.6-2.4-3.2-2.8-5.2c-0.7-3.5-2.6-6-1.2-9c2.2-0.2,1.8,2.2,2.2,3.8c0.5-2.8,3.7-6.4,6.4-3.4c1-1.9,3.7-3.5,5.8-2.2
	c1.4,0.8,2,4.1,2.8,6.2C174.9,175.6,176.4,178,175.6,179.6z" class="st2"></path> <path d="M153.8,176c-0.5,0.1-0.9,0.3-1.6,0.2c-0.5-0.6-0.7-1.5-0.8-2.6c-2.3,0.7-3.9,2.1-4,4.4
	c-0.1,2.8,2.7,6.2,1.2,8.4c-0.5,0-0.9,0-1.4,0c-1.4-4-3.1-8.8-3.2-13.4c0.2,0,0.4,0,0.4-0.2c1.4-0.2,1.7,0.9,2,1.8
	C148.1,170.8,155.3,168.8,153.8,176z" class="st2"></path> <path d="M105.4,190c-3.4,7.6-1.5,19.7,0.4,28.4c0.4,2,1.6,5.2,1.4,6.4c-0.3,2.3-7.1,6.4-10.8,6.4
	c-5.8,0-7.6-5.6-10.6-9.2c-5.5-6.5-14.2-14.2-14.2-25.6c0-6.8,2.3-12.8,4.6-17.6c0.7-1.3,2.3-2.7,1.8-4.6c-2.1-0.5-2.3,2.4-3.2,3.6
	c-1.8-1.2-3.3-2.8-3.6-5.6C88.3,172.4,95.4,182.6,105.4,190z" class="st0"></path> <path d="M140.8,174.6c0.1,2.7,0.5,7.8,0.2,10.8c-0.1,1.1-0.5,3.3-1.4,3.6c-3,0.9-4.4-6.5-5.4-8c-1.4,2.8,0,8.2-2.4,10
	c-2.9-1.8-4.1-6.1-5.6-10c-0.5-1.2-1.5-3.1,0.2-3.4c1.8-0.3,2.1,3,2.6,4.4c0.7,1.9,1.7,3.2,2,5c1.4-3-0.5-9.2,2-11.2
	c3.2,1.9,3.7,6.7,5.6,10c0.7-3.4-0.4-7.7,0.2-11C138.9,173.8,140.4,174.2,140.8,174.6z" class="st2"></path> <path d="M185.2,187c1.1,2.5,1,4.7,1.4,7c0.7,3.7,2.5,9.5-1.2,11.8c-1.7,1-7.4,2.4-7.4,0.2c0-1.7,5-1.2,6.2-2.2
	c2.1-1.7,1-4.2,0.8-7.2c-0.9,2.1-2.9,4.5-6.2,3.4C171.1,197.5,176.1,182.2,185.2,187z M177.4,192.8c-0.2,1.7,0.6,4.4,2,4.8
	c4.6,1.4,5.2-5,4.2-8.8C180.6,188.1,177.7,189.9,177.4,192.8z" class="st2"></path> <path d="M172.2,193.8c-0.5,0.1-0.9,0.3-1.6,0.2c-0.5-0.6-0.7-1.5-0.8-2.6c-2.3,0.7-3.9,2.1-4,4.4
	c-0.1,2.8,2.7,6.2,1.2,8.4c-0.5,0-0.9,0-1.4,0c-1-1.8-1.4-4.4-2-6.8c-0.6-2.3-2-4.9-0.8-6.8c1.4-0.2,1.7,0.9,2,1.8
	C166.5,188.6,173.7,186.6,172.2,193.8z" class="st2"></path> <path d="M183.6,188.8c1,3.8,0.4,10.2-4.2,8.8c-1.4-0.4-2.2-3.1-2-4.8C177.7,189.9,180.6,188.1,183.6,188.8z" class="st3"></path> <path d="M153.6,193.2c7.9-1.3,8.7,14,1.2,14C147.9,207.2,146.6,194.4,153.6,193.2z M154,204.6c5.7,1.3,4.8-10.3-0.4-8.8
	C149.9,196.8,151.2,204,154,204.6z" class="st2"></path> <path d="M153.6,195.8c5.2-1.5,6.1,10.1,0.4,8.8C151.2,204,149.9,196.8,153.6,195.8z" class="st3"></path> <path d="M146.2,206.8c0.6-0.1,1.6,0.1,1.6,1.4C147.9,212.5,141.8,207.3,146.2,206.8z" class="st2"></path> <path d="M99.6,232.6c-0.3,3-1.1,6.6-1.4,10c-0.1,0.9-0.7,2.6,0.6,2.8c1.5-1.1,1.5-4.2,1.8-6.4c0.4-2.4,0.8-4.9,0.6-7
	c2.6-1.2,4.5-3.1,6.8-4.6c0.8,1.7,0.3,3.2,0.4,5c0.1,2.6,1.6,6,2.6,8.8c2.1,5.7,4.7,10.3,7.8,15c1.5,2.3,2.8,5.1,5.2,6.2
	c0.4-2.2-1.6-4-2.8-5.8c-3.5-5.4-7.3-11.7-9-18.4c1.8-0.4,2.2,1.6,3,2.6c2.3,2.8,6,5.2,9.8,6.8c2.4,1,5.3,2.4,8,2c0.1-1.6-2-1.6-3-2
	c-5.5-2-11.7-4.9-14.6-9.8c33.9-3.6,68.9-7.2,106.8-6.2c4,21.8,0.8,43.5-9.2,55.8c-10.1,12.4-25.3,21.6-43.2,25
	c-38,7.2-73.5-4.3-89.6-25.8c-1.3-1.7-2.3-3.4-3.4-5.2c-1-1.6-1.9-3.6-3.6-4.8c-1.6,1.5,0.8,4.4,1.8,6c1.2,1.9,2.8,4,3.8,5.6
	c-13.3,9.3-28.5,19.6-44.6,27.4c-5.2,2.5-11.5,5.6-17.8,6c-11.5,0.8-14.6-9.4-13.8-21.2c0.4-5.1,2.2-10.4,3.8-15.2
	c4.5-13.9,11.1-27.2,19-37.4c11.6-15.1,28.1-23,50.8-24.4c1.8-0.1,5.8-0.8,7.8-0.2c1.8,0.6,3.2,4.3,4.8,6.2
	C91,232,94.5,233.9,99.6,232.6z" class="st0"></path> <path d="M183.6,42.2c1.5,0.7,3.9,2.4,5.4,3.8c-1.2,0-1.8,0.6-3,0.6C185.5,44.9,184.6,43.5,183.6,42.2z" class="st2"></path> <path d="M168.6,53c2,5.5,4,14.8,2,21.2c-5,0.5-9.9,1.2-15.2,1.8c-1.5,0.2-3.9,0.9-5,0.6c-2.2-0.6-3.5-6.5-4-9
	c-0.8-4-0.8-8-1-12C153,54.6,161,54,168.6,53z M166.2,64.6c-0.2-3.3-1.2-6.9-3.8-7c-3.2-0.1-4.4,4.4-4.6,8.2c-0.3,0.4-0.3,2.2,0,2.6
	c-0.3,7.6,9.4,4.3,8.4-1.6C166.5,66.5,166.5,64.9,166.2,64.6z" class="st2"></path> <path d="M159.6,133.8c-1.3,3.4-4.6,6-4.8,9.8c2.1-0.3,2.7-2.7,3.6-4.2c2.8-4.5,5.9-9.5,8.6-14.4
	c4.8-1.6,8.6-4.2,10.4-8.8c3.7-0.3,7.1-0.9,10.2-1.8c8.6,5.8,17.7,11.2,26.6,16.8c-4.3,7.8-10.7,14.7-16.6,20.2
	c-0.8-2.6-0.3-6.5-2.2-8c-1.4,1.1-0.6,3.6-0.2,5.6c0.4,2,1.7,4,0.2,4.8c-2.2-0.3-2.9-4.8-5.6-4.6c-0.5,1.9,1.5,3.3,2.4,4.4
	c12.4,14.9,23,31.2,30,52c2.5,7.4,5.5,15.4,5.2,24.2c-41-1.4-78.6,2.3-114.8,6.4c-2.6-7.9-5.7-18.5-6.8-28.4
	c-1.3-11.5,1.1-20.5,7.8-26.4c1.1-0.9,3.1-1.4,3-3.2c-1-1.1-2.4,0.4-3.2,1c-2.7,2.2-5.6,5.5-7,8.8c-10-6.6-17.5-17.4-34.4-17.8
	c-0.3-0.8,0.9-1.9,1.6-2.8c5.1-6.6,11.3-12.8,17-19c6.5-7,12.4-15.5,21.2-19.8C123.3,134.9,143.1,137.3,159.6,133.8z M169.4,124.2
	c0,0.3-0.3,0.3-0.4,0.6c-0.6,2.5-1,4.8-1.8,7c-0.8,2.1-2.7,4-2,6.2c3.4-2.7,5.5-8.6,5-13.8C169.9,124.2,169.7,124.2,169.4,124.2z
	 M171.6,123.8c-0.1,0.3-0.4,0.2-0.6,0.4c0.2,3.8-1.3,7-1.2,10c3-0.8,3.2-7.2,2.6-10.2C172,124,172,123.8,171.6,123.8z M185.4,163.6
	c-11.4-4.2-10.1,18,1,12.8c0.9-0.4,1.1-1,2.2-1.8c0.6,0.5,1.2,1,2,0.4c-0.1-3.1-1.7-6.2-2.4-9.6c-0.7-3.4-0.9-7.1-2.2-10.2
	C182,155.7,186.1,161.5,185.4,163.6z M174,173.2c-0.8-2.1-1.4-5.4-2.8-6.2c-2.1-1.3-4.8,0.3-5.8,2.2c-2.7-3-5.9,0.6-6.4,3.4
	c-0.4-1.6,0-4-2.2-3.8c-1.4,3,0.5,5.5,1.2,9c0.4,2,0.8,5.8,2.8,5.2c2.1-0.6-1.3-6.3-0.8-7.8c1-1.6,1.3-3.7,3-4.6
	c0.8,1.8,1.3,3.6,2.2,6c0.5,1.4,1.1,5.9,3,5.4c1.7-0.5,0.2-3.8-0.2-5c-0.7-1.9-1.5-3.3-1.8-5.2c1-0.9,1.5-2.2,3-2.6
	c1.4,0.8,1.9,2.9,2.8,5.4c0.7,2,1.5,6.2,3.6,5C176.4,178,174.9,175.6,174,173.2z M146.4,174.6c-0.3-0.9-0.6-2-2-1.8
	c0,0.2-0.2,0.2-0.4,0.2c0.1,4.6,1.8,9.4,3.2,13.4c0.5,0,0.9,0,1.4,0c1.5-2.2-1.3-5.6-1.2-8.4c0.1-2.3,1.7-3.7,4-4.4
	c0.1,1.1,0.3,2,0.8,2.6c0.7,0.1,1.1-0.1,1.6-0.2C155.3,168.8,148.1,170.8,146.4,174.6z M138.8,174.8c-0.6,3.3,0.5,7.6-0.2,11
	c-1.9-3.3-2.4-8.1-5.6-10c-2.5,2-0.6,8.2-2,11.2c-0.3-1.8-1.3-3.1-2-5c-0.5-1.4-0.8-4.7-2.6-4.4c-1.7,0.3-0.7,2.2-0.2,3.4
	c1.5,3.9,2.7,8.2,5.6,10c2.4-1.8,1-7.2,2.4-10c1,1.5,2.4,8.9,5.4,8c0.9-0.3,1.3-2.5,1.4-3.6c0.3-3-0.1-8.1-0.2-10.8
	C140.4,174.2,138.9,173.8,138.8,174.8z M178.8,200c3.3,1.1,5.3-1.3,6.2-3.4c0.2,3,1.3,5.5-0.8,7.2c-1.2,1-6.2,0.5-6.2,2.2
	c0,2.2,5.7,0.8,7.4-0.2c3.7-2.3,1.9-8.1,1.2-11.8c-0.4-2.3-0.3-4.5-1.4-7C176.1,182.2,171.1,197.5,178.8,200z M164.8,192.4
	c-0.3-0.9-0.6-2-2-1.8c-1.2,1.9,0.2,4.5,0.8,6.8c0.6,2.4,1,5,2,6.8c0.5,0,0.9,0,1.4,0c1.5-2.2-1.3-5.6-1.2-8.4
	c0.1-2.3,1.7-3.7,4-4.4c0.1,1.1,0.3,2,0.8,2.6c0.7,0.1,1.1-0.1,1.6-0.2C173.7,186.6,166.5,188.6,164.8,192.4z M154.8,207.2
	c7.5,0,6.7-15.3-1.2-14C146.6,194.4,147.9,207.2,154.8,207.2z M147.8,208.2c0-1.3-1-1.5-1.6-1.4
	C141.8,207.3,147.9,212.5,147.8,208.2z" class="st3"></path> <path d="M229.4,224.4c0,1.8,0,3.6,0,5.4c-0.6,2.2-2.5,2-5.2,1.8c3.7,20.7,1,41.4-7.6,54c-8.5,12.4-22.7,21.7-38,26.6
	c-16.6,5.3-40.3,5.2-57.8,1.2c-17.2-3.9-31.1-12.7-40.8-23.8c-14.5,10.2-29.2,20.2-46.6,28.2c-6.6,3-18,9-25.8,3.8
	c-4.8-3.2-6.7-9.5-7-16.8c-0.3-7.5,2-14.2,3.8-19.8c3.9-12,9.3-23.1,15.2-32.2c12.8-19.7,32-31.9,62.8-31.4
	c-3.9-6.1-11.9-12.3-12.6-22.6c-0.5-7.6,1.7-13.5,4-19.2c-1.8-1.8-5-4.3-4.6-8.2c0.2-1.9,2.5-5,4.2-7c8.5-10.4,17.8-19.2,26.8-29.2
	c3.5-4,7.8-7.7,13.2-9c1.5-0.4,3.3-0.1,4.4-0.4c1.1-0.4,1.1-1.5,1.6-2.6c-8.8,0.8-14.2-4.2-18.8-9c-3.6-3.7-6.9-8-8.2-13.2
	c-2.3-9.1-0.7-21.4,3-27.6c1.1-1.9,3.6-4.2,4.2-6.4c0.4-1.4,0.2-3,0.4-4.4c1.3-9,5.3-16.2,9.2-23c4.9-5.7,9.8-11.6,17.6-14.4
	c7.6-2.8,16.6-4.8,27-5c-3.3-4.4-8.1-8.8-17-8.8c-2.5,0-5.2,0.9-7.2,0c1.2-1.8,4.1-1.6,6.4-1.8c8.8-0.7,13.5,3.2,18,7.8
	c0.2,0.2,0.4,1.3,1,0.8c-0.7-2.7-1-5.4-1.8-8c-0.7-2.4-2.6-4.6-2-6.8c2.4,1.4,3.3,4.6,4.2,7.6c0.9,3.1,0.9,6.7,2,9.6
	c-0.2-6.8,1.3-12.6,4-17c0.7-1.2,1.8-3.5,3.6-3c-1.1,3.1-3.3,5.6-4.4,9c-1.1,3.4-1.1,7.2-1.8,11.4c5.6,1.8,10,5.3,13.8,9.4
	c1.2,1.3,2.1,3,3.4,4.2c2.1,1.9,5.5,3.7,8.2,5.6c1.7,1.2,7,4,8,5.8c1.7,3,1.2,7.2,2.6,10.2c7.8-1.7,12.7,5.9,16.4,11.2
	c3.3,4.7,5.2,10.1,6.8,15.8c1.8,6.4,2.9,13,1.6,19.8c-1.2,6.2-3.4,11.7-6,16.4c8,7.4-0.6,18.2-5.6,24c-2.4,2.8-5.8,6.2-8.8,9.2
	c-0.9,0.9-3,2.6-3,3c0,0.1,2.1,2.7,2.8,3.6C213,176.9,224,198.3,229.4,224.4z M149.6,22.2c-16.6,1.3-31.6,6.8-38,18
	c6,3.3,12.6,7.2,18.8,10.8c1.7,1,4.7,3.4,6.4,3.6c2.2,0.3,4.6-1,6.8-0.8c0.1-5.5,2-8.8,5.4-12c2.4-2.2,6.5-4.9,9.4-4.6
	c3.3,0.4,4.8,3.5,7.2,5.2c1.6-3.6,2.9-7.3,8.4-7C169.3,28.1,161.6,21.3,149.6,22.2z M173.6,37.4c-0.4,0-1.3-0.1-1.8,0
	c-2.2,0.4-5,4.7-4.8,7c0.2,2,3.1,4.3,3.2,6.4c4.8-1,9.3-2.5,14-3.6C182.5,42.9,179.1,37.9,173.6,37.4z M164.4,44.2
	c-1.3-1.7-3.6-4.6-5.8-5c-3.3-0.6-7.5,3-9.4,5c-2.2,2.4-3.7,5.7-3.6,9.4c7.5-0.8,15-1.7,22.6-2.4C167.3,48.6,166.1,46.5,164.4,44.2z
	 M135.6,56.2c-8.2-4.9-16.5-9.8-25-14.4c-3.8,5-7.7,13.2-8.8,21c-0.2,1.2,0.1,2.6-0.2,4c-0.4,2.1-2.6,4.6-3.8,6.4
	c-1.4,2.1-2.7,4.3-3.4,7C93,86,93.1,93.4,94.2,99.4c1,5.5,3.7,9.3,7.4,13.2c2.9,3,7.8,7.6,12.2,8.6c3.9,0.9,9.8-0.4,14.2-0.2
	c9.8,0.6,19.2,4.5,28.2,4.4c8.3-0.1,15.7-3.3,19-9c-12.1,1-21.3-2.8-28.6-7.8c-0.7-0.5-5.2-4.6-5.8-4.6c-0.1,0-1.1,0.9-1.4,1.2
	c-1.7,1.3-3.4,2.9-5.4,2.2c0.9-2.2,3.4-2.8,5.2-4.2c2.2-1.8,3.5-5.1,6.6-5.2c-0.3,2.5-2.6,3-3.6,4.8c6.6,5.4,14.8,11.2,26.4,11.8
	c4.8,0.2,9.4-0.3,13.6-1c3.9-0.6,8.5-1.3,11.2-3.4c3-2.4,3.9-6.8,3.4-11.4c-1.2-11.7-15-14.6-24-18.6c-2.5,3-6.2,7.7-11.6,7.6
	c-3.2-0.1-5.4-2-7.6-3.8c-0.1,1-1.3,0.6-2,0.6c-2.8,0.2-5.7,0-8.4,0.6c-2.6,0.5-4.9,2.3-6.6,1.4c2.7-3.6,9.5-4.2,15.8-3.6
	c-1.2-0.7-1.6-3.7-3.6-4.2c-2-0.5-4.4,1.3-6.8,0.6C139.2,72.3,137.9,63.8,135.6,56.2z M186,46.6c1.2,0,1.8-0.6,3-0.6
	c-1.5-1.4-3.9-3.1-5.4-3.8C184.6,43.5,185.5,44.9,186,46.6z M187,48.4c1.8,3.8,2.9,8.3,3.2,13.6c0.5-2.1,2-3.2,3-4.8
	c-1.2-3-1.4-7-2.8-9.8C189.4,47.9,188.1,48,187,48.4z M170.8,52.6c1.7,5.4,2.5,11.7,2.8,18.4c0.8,0.4,0.6,1.8,1.6,2
	c4.3-1,8.2-2.3,12.6-3.2c0.8-7.5,0.3-16.2-3-20.8C180.1,50.1,175.6,51.6,170.8,52.6z M145.4,55.6c0.2,4,0.2,8,1,12
	c0.5,2.5,1.8,8.4,4,9c1.1,0.3,3.5-0.4,5-0.6c5.3-0.6,10.2-1.3,15.2-1.8c2-6.4,0-15.7-2-21.2C161,54,153,54.6,145.4,55.6z
	 M137.6,56.6c1.9,6.9,3.7,13.9,5.4,21c1.5-0.4,3.6-0.3,5-0.8c-3.7-4.8-4.5-12.4-4.4-21C141.6,56,139.2,56,137.6,56.6z M218.4,95.4
	c0-7.6-2.9-15.5-5.6-21.2c-1.3-2.9-2.9-5.6-5-8.4c-1.9-2.5-4.4-5.8-6.6-7c-6.1-3.3-10.2,2.7-10.2,8c0,7.4,7.3,12.1,6.6,18.4
	c-0.2,1.7-2.4,5-2.4,5.6c0,0.2,1.2,1.7,1.4,2c4,7,2.1,19.8-6.6,20.8c5.7,4.2,12.1,7.8,18.2,11.6C213,117.1,218.4,107.6,218.4,95.4z
	 M182,81.8c4.7,1.8,8.5,4.6,12.2,7.4c4.2-7.2-2.9-12.7-4.6-18.4C189,76.4,185.4,79,182,81.8z M180.8,80c2.6-1.4,7-5.6,6.2-8.2
	c-4.3,1.1-8.8,2.9-13.2,3.2c0,1,0,2,0,3C175.7,79.1,177.5,80.3,180.8,80z M167.4,83.2c1.9-1.6,5.2-3.9,4.2-7.4
	c-6.5,1.1-13.4,1.8-20.2,2.6C154.4,83.8,161.1,88.5,167.4,83.2z M111.8,128.6c-8.8,4.3-14.7,12.8-21.2,19.8
	c-5.7,6.2-11.9,12.4-17,19c-0.7,0.9-1.9,2-1.6,2.8c16.9,0.4,24.4,11.2,34.4,17.8c1.4-3.3,4.3-6.6,7-8.8c0.8-0.6,2.2-2.1,3.2-1
	c0.1,1.8-1.9,2.3-3,3.2c-6.7,5.9-9.1,14.9-7.8,26.4c1.1,9.9,4.2,20.5,6.8,28.4c36.2-4.1,73.8-7.8,114.8-6.4
	c0.3-8.8-2.7-16.8-5.2-24.2c-7-20.8-17.6-37.1-30-52c-1-1.1-2.9-2.5-2.4-4.4c2.7-0.2,3.4,4.3,5.6,4.6c1.5-0.8,0.2-2.8-0.2-4.8
	c-0.4-2-1.2-4.5,0.2-5.6c1.9,1.5,1.4,5.4,2.2,8c5.9-5.5,12.3-12.4,16.6-20.2c-8.9-5.6-18-11-26.6-16.8c-3.1,0.9-6.5,1.5-10.2,1.8
	c-1.8,4.6-5.6,7.2-10.4,8.8c-2.7,4.9-5.8,9.9-8.6,14.4c-0.9,1.5-1.5,3.9-3.6,4.2c0.2-3.9,3.5-6.4,4.8-9.8
	C143.1,137.3,123.3,134.9,111.8,128.6z M209.6,126.2c1.8,1,3.5,2.1,5.2,3.2c0.7-3.4-0.4-6.5-2.2-8
	C211.6,123,210.7,124.7,209.6,126.2z M121.6,123c-0.4,1-0.9,2.2-1.4,3.4c-0.5,1.3-1.4,2.6-1.2,3c10.7,5,29.1,5.2,42,2
	c1.3-1.6,2.3-3.6,3.4-5.4C149.5,129.9,137,121.7,121.6,123z M116.8,128.6c0.1-0.4,0.5-0.4,0.6-0.8c-0.8,0.1-2.1-0.3-2.6,0.2
	C115.6,128,115.9,128.6,116.8,128.6z M71.2,172.2c0.3,2.8,1.8,4.4,3.6,5.6c0.9-1.2,1.1-4.1,3.2-3.6c0.5,1.9-1.1,3.2-1.8,4.6
	c-2.3,4.8-4.6,10.8-4.6,17.6c0,11.4,8.7,19.1,14.2,25.6c3,3.6,4.8,9.2,10.6,9.2c3.7,0,10.5-4.1,10.8-6.4c0.2-1.2-1-4.4-1.4-6.4
	c-1.9-8.7-3.8-20.8-0.4-28.4C95.4,182.6,88.3,172.4,71.2,172.2z M88.8,229.4c-1.6-1.9-3-5.6-4.8-6.2c-2-0.6-6,0.1-7.8,0.2
	c-22.7,1.4-39.2,9.3-50.8,24.4c-7.9,10.2-14.5,23.5-19,37.4C4.8,290,3,295.3,2.6,300.4c-0.8,11.8,2.3,22,13.8,21.2
	c6.3-0.4,12.6-3.5,17.8-6c16.1-7.8,31.3-18.1,44.6-27.4c-1-1.6-2.6-3.7-3.8-5.6c-1-1.6-3.4-4.5-1.8-6c1.7,1.2,2.6,3.2,3.6,4.8
	c1.1,1.8,2.1,3.5,3.4,5.2c16.1,21.5,51.6,33,89.6,25.8c17.9-3.4,33.1-12.6,43.2-25c10-12.3,13.2-34,9.2-55.8
	c-37.9-1-72.9,2.6-106.8,6.2c2.9,4.9,9.1,7.8,14.6,9.8c1,0.4,3.1,0.4,3,2c-2.7,0.4-5.6-1-8-2c-3.8-1.6-7.5-4-9.8-6.8
	c-0.8-1-1.2-3-3-2.6c1.7,6.7,5.5,13,9,18.4c1.2,1.8,3.2,3.6,2.8,5.8c-2.4-1.1-3.7-3.9-5.2-6.2c-3.1-4.7-5.7-9.3-7.8-15
	c-1-2.8-2.5-6.2-2.6-8.8c-0.1-1.8,0.4-3.3-0.4-5c-2.3,1.5-4.2,3.4-6.8,4.6c0.2,2.1-0.2,4.6-0.6,7c-0.3,2.2-0.3,5.3-1.8,6.4
	c-1.3-0.2-0.7-1.9-0.6-2.8c0.3-3.4,1.1-7,1.4-10C94.5,233.9,91,232,88.8,229.4z" class="st1"></path> <path d="M184.8,49c3.3,4.6,3.8,13.3,3,20.8c-4.4,0.9-8.3,2.2-12.6,3.2c-1-0.2-0.8-1.6-1.6-2c-0.3-6.7-1.1-13-2.8-18.4
	C175.6,51.6,180.1,50.1,184.8,49z M179.6,70.6c3.6-2.1,4-11.3,0.6-14C172.5,55.2,173,71.2,179.6,70.6z" class="st2"></path></svg>
	</aside>
	<section><div>WRMD</div> <span class="wrmd">Wildlife Rehabilitation <span class="md">MD</span></span></section></a> <nav class="bg-b"><a href="https://www.wrmd.org/features" class="unit-1-2-mobile">Features</a> <a href="http://help.wrmd.org" class="unit-1-2-mobile">Get Help</a> <a href="https://www.wrmd.org/signin" class="unit-1-1-mobile">Sign In</a></nav> <div class="donation-badge">
	<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=YELQ4E9958KYG">
		<div class="mediablock">
		<aside>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
				<path d="M16 29.714c-0.286 0-0.571-0.107-0.786-0.321l-11.143-10.75c-0.143-0.125-4.071-3.714-4.071-8 0-5.232 3.196-8.357 8.536-8.357 3.125 0 6.054 2.464 7.464 3.857 1.411-1.393 4.339-3.857 7.464-3.857 5.339 0 8.536 3.125 8.536 8.357 0 4.286-3.929 7.875-4.089 8.036l-11.125 10.714c-0.214 0.214-0.5 0.321-0.786 0.321z"></path>
			</svg>

		</aside> <section>Make a Donation</section>
		</div>
	</a>
	</div></header>

	<div id="content" class="site-content">
