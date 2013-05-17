<html>
<head>
    <link rel="stylesheet" 
          href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.css" /> 
</head>
<body>
    <div id="map" style="width: 1200px; height: 800px"></div>
 
    <script src="http://cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([42.358831245, -70.99151219],13);
        L.tileLayer('./{z}/{x}/{y}.png', {
            minZoom: 10,
            maxZoom: 15,
            attribution: 'ESO/INAF-VST/OmegaCAM',
        }).addTo(map);
    </script>
</body>
</html>