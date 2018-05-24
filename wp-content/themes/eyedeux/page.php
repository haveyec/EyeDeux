<!doctype html>

<link rel="stylesheet" href="<?php echo get_scripts_path(); ?>libs/font-awesome/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_path(); ?>libs/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>icons/nucleo.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_path(); ?>libs/animate.css/animate.min.css"/>
  <!-- BEGIN PAGE STYLE -->
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>text-animation.css"/>
  <!-- END PAGE STYLE -->
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>buttons.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>builder.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>colors.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>footers.css"/>    
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>main.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>nav.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>master.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>preloader.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>themes.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>ui.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>widgets.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>style2.css"/>
  <script type="text/javascript" src="<?php echo get_scripts_path(); ?>jquery-1.7.1.min.js"></script>
  <script src="<?php echo get_scripts_path(); ?>modernizr-2.8.3-respond-1.4.2.min.js"></script>

  <?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<body class="container">
<div class="container">
	<div id="postBody" class="row spacer_top spacer_bottom">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<br>
		<br>
		<h1 class="brandColor mx-auto container"><?php the_title(); ?></h1>
	</div>
	<div id="postContent" class="spacer_bottom">
		<p class="mx-auto container"><?php the_content(); ?></p>
	</div>

<?php comments_template( '', true ); ?>
<?php endwhile; ?>
</div>

		
<div class="putFooter">
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
</div>
</body>
</html>