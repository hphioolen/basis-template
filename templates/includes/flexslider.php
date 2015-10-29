<?php /**
 * 		Homepage Slider
 * // javascript in _main.js 
 */
	global $wp_query, $post, $panel_error_message;
	
	//laad de slides in.
	$slides = get_posts(array('post_type' => 'slide', 'suppress_filters' =>0 )); 

if (( count($slides) == 1 )) { ?>

	  <?php foreach($slides as $post) : setup_postdata($post); ?> 
	 
	 <?php if ( has_post_thumbnail() ) {
		    		
		    		$thumbnail_id = get_post_thumbnail_id($post->ID);
					$thumbnail_object = get_post($thumbnail_id);					
					$background_image = $thumbnail_object->guid;
		    							
		    	}
		    ?>
			
		<?php endforeach; ?> 
	

		<div class="header-holder">
			
		    <div id="header" class="header" style="background-image: url(<?=$background_image?>); ">
		
		</div>

<?php } else if (( count($slides) > 1 )) { ?>
		
	
<!--
			<div class="slider">
			  <div class="slides">
			  
			  	
			  	<?php foreach($slides as $post) : setup_postdata($post); ?> 
	 
				 <?php if ( has_post_thumbnail() ) {
					    							    		    		
					    		$thumbnail_id = get_post_thumbnail_id($post->ID);
								$thumbnail_object = get_post($thumbnail_id);
								$background_image = $thumbnail_object->guid;
								
					}?>
					
					<div class="slide" style="background-image: url(<?=$background_image?>); " > </div>
						
					<?php endforeach; ?> 
	  
			  </div>
			</div>
-->
			
			
			<div class="flexslider">
			  <ul class="slides">
			    <li>
			      <img src="slide1.jpg" />
			    </li>
			    <li>
			      <img src="slide2.jpg" />
			    </li>
			    <li>
			      <img src="slide3.jpg" />
			    </li>
			  </ul>
			</div>

<script type="text/javascript" charset="utf-8">
 
	(function($) {
		 
		 $( document ).ready(function() {	
		     $(".flexslider").flexslider();
		});
		
	})(jQuery);  
	  
</script>

<?php }  // else { } default image ????, die zou dan in de image folder kunnen. ?>
	

