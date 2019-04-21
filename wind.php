
<html>
  <head>
    <meta charset="UTF-8">
    <title>Wind Forecast</title>
    <script src="https://unpkg.com/leaflet@0.7.7/dist/leaflet.js"></script>
    <script src="https://api4.windy.com/assets/libBoot.js"></script>
  	<style>
  		#windy {
  			width: 100%;
  			height: 800px;
  		}
  		 				
  		#windy #logo-wrapper #logo {
            display: none;
        }
  	</style>
  </head>
  <body>
    <div id="windy"></div>

    <script type="text/javascript">

   const options = {

                // Required: API key
                key: 'aeROSTmdg3fO4dKz9d299iBJkvFfpDsT',

                // Put additional console output
                verbose: true,

                // Optional: Initial state of the map
                lat: 37.5190,
                lon: 22.4217,
                zoom: 8,
        }

    // Initialize Windy API
    windyInit( options, windyAPI => {
        // windyAPI is ready, and contain 'map', 'store',
        // 'picker' and other usefull stuff

        const { map } = windyAPI
        // .map is instance of Leaflet map

       
    })

    </script>

  </body>
</html>
