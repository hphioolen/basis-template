
<?php if (is_home() || is_front_page()): ?>
    
    		<?php get_template_part('templates/includes/partner-flexslider'); ?>
	
	<?php endif; ?> 
<div id="map"></div>
<footer class="content-info clearfix" role="contentinfo">
	<div class="container">	
		<div class="row">
			  <div class="col-md-4 left"><?php dynamic_sidebar('sidebar-footer-1'); ?></div>
			  <div class="col-md-4 center"> <?php dynamic_sidebar('sidebar-footer-2'); ?></div>
			  <div class="col-md-4 right"><?php dynamic_sidebar('sidebar-footer-3'); ?></div>
		</div>
	</div>  
</footer>

<footer class="site-info">
	<div class="container">	
		<div class="row">
			<div class="col-xs-6 left">&copy; <?= date("Y"); ?> <?= get_bloginfo('name'); ?></div>
			<div class="col-xs-6 text-right">Powered by Newfish</div>
		</div>
	</div>		
</footer>


 <script>
function initMap() {
	var myLatlng = new google.maps.LatLng(52.63903,	5.09966);
  var customMapType = new google.maps.StyledMapType([
      {
        stylers: [
          {hue: '#890000'},
          {visibility: 'simplified'},
          {gamma: 0.5},
          {weight: 0.5}
        ]
      },
      {
        elementType: 'labels',
        stylers: [{visibility: 'off'}]
      },
      {
        featureType: 'water',
        stylers: [{color: '#890000'}]
      }
    ], {
      name: 'Custom Style'
  });
  var customMapTypeId = 'custom_style';

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: myLatlng,  // Brooklyn.
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
    },
    scrollwheel: false
  });

  <?php $mapslogo = get_template_directory_uri() . '/dist/images/mapMarker@2x.png';?>
  map.mapTypes.set(customMapTypeId, customMapType);
  map.setMapTypeId(customMapTypeId);
  var image = new google.maps.MarkerImage("<?= $mapslogo; ?>", null, null, null, new google.maps.Size(100, 115));
  var marker = new google.maps.Marker({
	position: myLatlng,
	map: map,
	icon: image
	});
}
		

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYCMp6CAjpevhxYx9Z_-jJ5_gtmHJOpfI&signed_in=true&callback=initMap" async defer></script>