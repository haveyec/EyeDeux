<?php 
/*
Template Name: My custom type template
*/
 ?>

 <?php
$args = array( 
    'post_type' => 'attachment', 
    'post_mime_type' => 'image',
    'numberposts' => -1, 
    'post_status' => null, 
    'post_parent' => $post->ID 
); 
$attached_images = get_posts( $args );
?>

<?php get_post_types("slider") ?>

<div class="container">
	<div class="row">
		<h1>Title</h1>
		<p>Details</p>
		<img src="https://upload.wikimedia.org/wikipedia/en/e/e0/Iron_Man_bleeding_edge.jpg">
	</div>
</div>