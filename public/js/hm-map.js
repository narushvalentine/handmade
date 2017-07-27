jQuery(document).ready(function() {
    jQuery(window).load(function() {
        mk_google_maps();
    });

    //MAP FOOTER
    $('.footer-top .map-toggle').on('click',function(){
        $('.footer-top .kt-map-ft').slideToggle(500);
        mk_google_maps();
    });
});
    
function mk_google_maps() {
    jQuery('.kt-map').each(function() {
        var $this = jQuery(this),
        	$id 	= $this.attr('id');
      	var $styles = [

          	{
		        stylers: [
					{ hue: '#e9e5dc' },
					{ invert_lightness: false },
					{ saturation: 0  }
		        ]
			},{
        		featureType: 'water',
        		elementType: 'geometry',
        		stylers: [
        			{ color: '#bbdeff' }
        		]
    	    },{
        		featureType: 'road',
        		elementType: 'geometry',
        		stylers: [
        			{ color: '#ffffff' }
        		]
    	    }
    	];
        
        var map;

        function initialize()
        {            
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                zoom: 14,
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                draggable: false,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId['ROADMAP'],
                styles: $styles
            };

          	map = new google.maps.Map(document.getElementById($id), mapOptions);
          	// map.setTilt(45);

          	             
            var position = new google.maps.LatLng(-32.511733, 115.754414);
            bounds.extend(position);

            map.fitBounds(bounds);

          
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(14);
            google.maps.event.removeListener(boundsListener);
          });                          
        }
        
        initialize();
        
        function googleMapsResize() {                          
          initialize();
        } 

	});
}