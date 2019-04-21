<html>

<head>
  <title>ΔΕΞΑΜΕΝΕΣ</title>
  <link rel="stylesheet" type="text/css" href="lib/leaflet.css">
  <link rel="stylesheet" type="text/css" href="lib/map.css">
  <script src="lib/leaflet.js"></script>
  <script src="lib/jquery.min.js"></script>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
  <div id="map"></div>

  <script type="text/javascript">

   var tanks=["data/arcadia.geojson","data/argolida.geojson","data/korinthia.geojson","data/lakonia.geojson","data/messinia.geojson"];

   var water_icon = L.icon({

               iconUrl: 'lib/images/water.png',
               iconSize: [16, 16],
               iconAnchor: [16, 37],
               popupAnchor: [0, -28]

          });

    function Popup(feature,layer){

        var label=null;

        label="<b> ΠΕΡΙΟΧΗ:" + feature.properties.area + "</b><br/>";

        label+="<b> " + feature.properties.name + "</b><br/>";

        label+="<b> ΧΩΡΗΤΙΚΟΤΗΤΑ:" + feature.properties.capacity + "</b><br/>";

        label+="<b> α/α:" + feature.properties.id + "</b><br/>";

        layer.bindPopup(label);

       }

     var map = new L.Map('map', {zoom: 10, center: new L.latLng([37.5190, 22.4217]) });

     var mapLink =
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; ' + mapLink,
            maxZoom: 18,
            }).addTo(map);

     for (var i in tanks){

          $.getJSON(tanks[i], function(area) {

          var geo_layer = L.geoJson(area,{
               onEachFeature:Popup,
               pointToLayer: function (feature, latlng) {

		 if (feature.properties.type=="tank")

              return L.marker(latlng, {icon: water_icon});

                      }

         }).addTo(map);

      });
    }

    var legend = L.control({position: 'bottomright'});

    legend.onAdd = function (map) {

	    var div = L.DomUtil.create('div', ' legend'),
	        labels=["ΔΕΞΑΜΕΝΕΣ  ΔΑΣΟΠΥΡΟΣΒΕΣΗΣ"];

	    for (var i = 0; i < labels.length; i++) {
	        div.innerHTML +=
	            '<b>'+ labels[i] + '</b><br>';
	     }

	    return div;
   }

    legend.addTo(map);


  </script>


</body>

</html>