// When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'resize', init);
        google.maps.event.addDomListener(window, 'load', init);
        
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(45.5172539, -73.6005289,17),

                mapTypeId: google.maps.MapTypeId.ROADMAP,
				zoomControl: false,
				mapTypeControl:false,

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [
                            {   
                            featureType:"administrative",
                            stylers:[ 
                                { visibility:"off"}
                                ]
                            },{
                            featureType:"landscape",
                            stylers:[
                                { color:"#f0ede5" }
                                ]
                            },{
                            featureType:"poi",
                            stylers:[
                                { visibility:"on" }
                                ]
                            },{
                            featureType:"poi.business",
                            stylers:[
                                { visibility:"off" }
                                ]
                            },{
                            featureType:"poi.park",
                            stylers:[
                                { color:"#74c7a3" }
                                ]
                            },{
                            featureType:"poi.park",
                            elementType:"labels.text.fill",
                            stylers:[
                                { color:"#ffffff" }
                                ]
                            },{
                            featureType:"road",
                            elementType:"labels",
                            stylers:[
                                { visibility:"on" }
                                ]
                            },{
                            featureType:"road.highway",
                            stylers:[
                                { visibility:"off" }
                                ]
                            },{
                            featureType:"road.highway",
                            elementType:"geometry",
                            stylers:[
                                { visibility:"on" }
                                ]
                            },{
                            featureType:"road.local",
                            stylers:[
                                { visibility:"on" },
                                { color:"#57544b" }
                                ]
                            },{
                            featureType:"road.local",
                            elementType:"labels.text.fill",
                            stylers:[
                                { color:"#ffffff" }
                                ]
                            },{
                            featureType:"road.local",
                            elementType:"labels.text.stroke",
                            stylers:[
                                { visibility:"on" },
                                ]
                            },{
                            featureType:"water",
                            stylers:[
                                { visibility:"simplified"},
                                { color:"#6fcac7" } 
                                ]
                            },{
                            featureType:"landscape",
                            stylers:[
                                { visibility:"simplified" }
                                ]
                            },{
                            featureType:"transit",
                            stylers:[
                                { visibility:"on" }
                                ]
                            },{
                            featureType:"transit.line",
                            elementType:"geometry",
                            stylers:[
                                { color:"#3f518c" }
                                ]
                            }
                        ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Define Marker properties
            //var image = new google.maps.MarkerImage(template_url+'/images/map-pointer.png',
                // This marker is 129 pixels wide by 42 pixels tall.
            //    new google.maps.Size(57, 73),
                // The origin for this image is 0,0.
            //    new google.maps.Point(0,0),
                // The anchor for this image is the base of the flagpole at 18,42.
            //    new google.maps.Point(34, 43)
            //);

            // Add Marker
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.5172539, -73.6005289,17),
                map: map
                //icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin

            });

            // Create our info window content   
            var infoWindowContent = '<div class="info_content">' +
                '<h3>Cafe Larue & Fils</h3>' +
                '<p>244 de Castelnau Est.<br>272-8087</p>' +
            '</div>';

            // Initialise the inforWindow
            var infoWindow = new google.maps.InfoWindow({
                content: infoWindowContent
            });

            // Display our info window when the marker is clicked
            google.maps.event.addListener(marker, 'click', function() {
                //infoWindow.open(map, marker);
            });
        }