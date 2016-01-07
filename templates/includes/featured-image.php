<?php use Roots\Sage\Titles; ?>
<?php
/**
 * 		Homepage Slider
 * // javascript in _main.js 
 */
	global $wp_query, $post, $panel_error_message;
	global $meta;
	
?>

<?php 


	if ( has_post_thumbnail() ) {
		
	  	$HeaderImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

	} else {
		 $HeaderImage = get_template_directory_uri() . '/dist/images/default_header.jpg';                                               
	}
?>

<div class="header-holder">
			
	<div id="imageHeader" class="imageHeader" style="background-image: url(<?=$HeaderImage?>); ">
		 
		<div class="imageOverlay">
		    
 
		    <div class="container">	
					<div class="content">
						<h2><?= Titles\title(); ?></h2>
					</div>
		
		    </div>

		 
		</div>
		  
	</div>
</div>		    