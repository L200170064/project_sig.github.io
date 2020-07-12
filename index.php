<html>
    <head>
    	<meta charset="UTF-8">
		<title>Covid-19 Boyolali</title>
		<link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
		<link rel="stylesheet" type="text/css" href="cases/positive.css" />
		<link rel="stylesheet" type="text/css" href="css/legends.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<link rel="stylesheet" type="text/css" href="css/home.css" />
		<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
		<script src="leaflet/leaflet.ajax.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
	<body>
		<hr>
		<div class="divHead">
			<h2>Peta Kasus COVID-19 di Kabupaten Boyolali </h2>
			<table align="center">
				<tr>
					<td><img id="tgl" src="images/icons8-calendar-50.png"></td>
					<td>03 Maret 2020 sampai hari ini</td>
				</tr>
			</table>
		</div>
		<hr>
		<div id="map" align="center" style="height:400px; width: 1200px; display: block; margin-left: auto; margin-right: auto; border: 0px solid #fc4503; border-radius: 4px; padding: 2px;" data-mode="">
			    <input type="hidden" data-map-markers="" value="" name="map-geojson-data" />
		</div>
		<hr>
		<div class="roweds">
			<div class="homes">
				<div id="mainleft">
					<h4>Peta Sebaran COVID-19 Kabupaten Boyolali</h4>
					<h4>Status</h4>
					<div id="mainlefter">
						<table>
							<tr align="left">
								<td><img id="CLR" src="images/red.png"></td>
								<td id="TXT">&nbsp;POSITIV COVID-19</td>
							</tr>
							<tr align="left">
								<td><img id="CLR" src="images/yellow.png"></td>
								<td id="TXT">&nbsp;MENUNGGU HASIL</td>
							</tr>
							<tr align="left">
								<td><img id="CLR" src="images/blue.png"></td>
								<td id="TXT">&nbsp;RS RUJUKAN COVID-19</td>
							</tr>
						</table>
					</div>
					<h4>Hasil Pantauan 05 Juli 2020 pukul 12:00 WIB :</h4>
					<div id="mainlefters">
						<hr class="syt" align="left">
						<div class="row">
						  	<div class="column">
						    	<h4>Jumlah Kasus Menunggu Hasil</h4>
						  	</div>
						  	<div class="columnt" align="right">
						    	<h4>56</h4>
							</div>
						</div>
						<div class="row">
						  	<div class="column">
						    	<h4>Jumlah Kasus Positiv di Titik Kecamatan</h4>
						  	</div>
						  	<div class="columnt" align="right">
						    	<h4>20</h4>
							</div>
						</div>
						<div class="row">
						  	<div class="column">
						    	<h4>Jumlah Total Kasus Positif</h4>
						  	</div>
						  	<div class="columnt" align="right">
						    	<h4>50</h4>
							</div>
						</div>
						<div class="row">
						  	<div class="column">
						    	<h4>Jumlah Total Kasus Keseluruhan</h4>
						  	</div>
						  	<div class="columnt" align="right">
						    	<h4>70</h4>
							</div>
						</div>
						<hr class="syx" align="left">
					</div>
				</div>
			</div>
			<div class="homest">
				<div id="mainrightol">
					<table id="t01" border="1">
	<!-- 				<tr>
					    	<th id="tpr" colspan="4">Firstname</th>
					  	</tr> -->
					  	<tr id="rbt">
					    	<td id="tdr" colspan="4">
					    		<h3 id="trm">Kasus Positiv COVID-19 di Kabupaten BOYOLALI</h3>
					    		<h1 id="cvt1">70</h1>
					    	</td>
					  	</tr>
					  	<tr id="tgt">
					    	<td id="cgttr">Dirawat</td>
					    	<td id="cgttr">Sembuh</td>
					    	<td id="cgttr">Islosi Mandiri</td>
					    	<td id="cgttr">Meninggal</td>
					  	</tr>
					  	<tr id="tgt">
					    	<td id="cgtstr">22</td>
					    	<td id="cgtgr">46</td>
					    	<td id="cgtismn">6</td>
					    	<td id="cgtinmi">2</td>
					  </tr>
					</table>
				</div>
			</div>
		</div>
	</body>
	<script>
	var osmUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
	    osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
	    osm = L.tileLayer(osmUrl, {
	        maxZoom: 18,
	        attribution: osmAttrib
	    });

	var map = L.map('map').setView([-7.5306546, 110.6930831], 15).addLayer(osm);

    function onClickFunction(e)
	{
		(e.sourceTarget.feature.properties.OBJECTID);
	}

    function onEachFeatureFunction (feature, layer) {
    	layer.on({
    		click: onClickFunction
    	});
	}



	/*map.on('click', onMapClick);

	function onMapClick(e) {

	    var geojsonFeature = {
	        "type": "Feature",
	            "properties": {},
	            "geometry": {
	                "type": "Point",
	                "coordinates": [e.latlng.lat, e.latlng.lng]
	        }
	    }

	    var marker;

	    L.geoJson(geojsonFeature, {
	        
	        pointToLayer: function(feature, latlng){
	            
	            marker = L.marker(e.latlng, {
	                
	                title: "lokasi pin di kordinat = " + "[ " + e.latlng.lat +', '+ e.latlng.lng + " ]",
	                alt: "lokasi pin di kordinat = " + "[ " + e.latlng.lat +', '+ e.latlng.lng + " ]",
	                riseOnHover: false,
	                draggable: false,
	            })
	            marker.bindPopup('<p align=center>' + '<strong>Pin anda di Konrdinat :</strong>' + '<br />' + e.latlng.lat + ', ' + e.latlng.lng + '<br />' + '<br />' + "<input type='button' value='Delete Pin Anda' class='marker-delete-button'/>");
	            marker.on("popupopen", onPopupOpen);
	       
	            return marker;
	        }
	    }).addTo(map);
	}

	function onPopupOpen() {

	    var tempMarker = this;

	    $(".marker-delete-button:visible").click(function () {
	        map.removeLayer(tempMarker);
	    });
	}*/

	/*var TokoIcon = L.Icon.extend({
    options: {
        iconSize:     [40, 40],
        iconAnchor:   [22, 94],
        popupAnchor:  [-3, -76]
	    }
	});

	var TokoB_Icon = new TokoIcon({iconUrl: 'leaf-toko.png'}),
    TokoC_Icon = new TokoIcon({iconUrl: 'leaf-toko.png'});
    TokoD_Icon = new TokoIcon({iconUrl: 'leaf-toko.png'});
    A_Icon = new TokoIcon({iconUrl: 'a.png'});

	L.marker([-7.5517, 110.68431], {icon: TokoB_Icon}).addTo(map).bindPopup("Toko B");
	L.marker([-7.55261, 110.70775], {icon: TokoC_Icon}).addTo(map).bindPopup("Toko C");
	L.marker([-7.5269, 110.70581], {icon: TokoC_Icon}).addTo(map).bindPopup("Toko D");*/

	//JUWANGI
	var tokoAIcon = L.icon({
	    iconUrl: 'img/JUWANGI.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.191570969818815, 110.71094512939452], {icon: tokoAIcon}).addTo(map);

	//WONOSEGORO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/WONOSEGORO.png',
	    iconSize:     [110, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.273804385001929, 110.62512516975403], {icon: tokoAIcon}).addTo(map);

	//WONOSEGORO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/KEMUSU.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.288279940153548, 110.71178197860718], {icon: tokoAIcon}).addTo(map);

	//KARANGGEDE
	var tokoAIcon = L.icon({
	    iconUrl: 'img/KARANGGEDE.png',
	    iconSize:     [110, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.364308146262933, 110.63307791948318], {icon: tokoAIcon}).addTo(map);

	//KLEGO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/KLEGO.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.351068211769129, 110.69141864776611], {icon: tokoAIcon}).addTo(map);

	//ANDONG
	var tokoAIcon = L.icon({
	    iconUrl: 'img/ANDONG.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.374643283404063, 110.73542833328247], {icon: tokoAIcon}).addTo(map);

	//SIMO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/SIMO.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.4208733759012855, 110.65300941467285], {icon: tokoAIcon}).addTo(map);

	//NOGOSARI
	var tokoAIcon = L.icon({
	    iconUrl: 'img/NOGOSARI.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.462057569390645, 110.73201656341551], {icon: tokoAIcon}).addTo(map);

	//NGEMPLAK
	var tokoAIcon = L.icon({
	    iconUrl: 'img/NGEMPLAK.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.506962803913135, 110.74159741401672], {icon: tokoAIcon}).addTo(map);

	//SAMBI
	var tokoAIcon = L.icon({
	    iconUrl: 'img/SAMBI.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.475341538121309, 110.66725730895995], {icon: tokoAIcon}).addTo(map);

	//BANYUDONO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/BANYUDONO.png',
	    iconSize:     [110, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.525820584087749, 110.6665116548538], {icon: tokoAIcon}).addTo(map);

	//SAWIT
	var tokoAIcon = L.icon({
	    iconUrl: 'img/SAWIT.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.568698677713525, 110.66688984632492], {icon: tokoAIcon}).addTo(map);

	//TERAS
	var tokoAIcon = L.icon({
	    iconUrl: 'img/TERAS.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.543743573596109, 110.63864350318909], {icon: tokoAIcon}).addTo(map);

	//MOJOSONGO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/MOJOSONGO.png',
	    iconSize:     [110, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.551577564544884, 110.57125568389893], {icon: tokoAIcon}).addTo(map);

	//BOYOLALI
	var tokoAIcon = L.icon({
	    iconUrl: 'img/BOYOLALI.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.496948731759156, 110.57228565216064], {icon: tokoAIcon}).addTo(map);

	//MUSUK
	var tokoAIcon = L.icon({
	    iconUrl: 'img/MUSUK.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.558484786588969, 110.49425482749939], {icon: tokoAIcon}).addTo(map);

	//CEPOGO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/CEPOGO.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.502398063002916, 110.50563544034958], {icon: tokoAIcon}).addTo(map);

	//AMPEL
	var tokoAIcon = L.icon({
	    iconUrl: 'img/AMPEL.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.440270455767781, 110.46722888946533], {icon: tokoAIcon}).addTo(map);

	//SELO
	var tokoAIcon = L.icon({
	    iconUrl: 'img/SELO.png',
	    iconSize:     [80, 20],
	    iconAnchor:   [0, 0]
	});

	L.marker([-7.496863634759307, 110.42405605316162], {icon: tokoAIcon}).addTo(map);


//CASES COVID-19


	//CASES JUWANGI 
/*	var tokoAIcon = L.icon({
	    iconUrl: 'cases/POSITIVE.GIF',
	    shadowUrl: 'cases/INSPECTION.GIF',

	    iconSize:     [16, 16],
	    shadowSize:   [24, 24],
	    iconAnchor:   [0, 0],
	    shadowAnchor: [4, 4],
	    popupAnchor:  [8, -4]
	});

	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 16</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 24</p></div>";

	L.marker([-7.21076779982097, 110.74553489685059], {icon: tokoAIcon}).bindPopup(customPopup).addTo(map);*/

	//CASES WONOSEGORO 
	var postvI = L.icon({
	    iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/POSITIVE.gif',
	    iconSize:     [4, 4],
	    iconAnchor:   [0, 0],
	    popupAnchor:  [3, -7]
	});
	var inspectI = L.icon({
		iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/INSPECTION.gif',
		iconSize:     [18, 18],
	    iconAnchor:   [7, 7], //[X,Y]
	    popupAnchor:  [3, -7]
	});
	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 2</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 9</p></div>";
	L.marker([-7.2931327349475605, 110.67719221115112], {icon: inspectI}).bindPopup(customPopup).addTo(map);
	L.marker([-7.2931327349475605, 110.67719221115112], {icon: postvI}).bindPopup(customPopup).addTo(map);

	//CASES KEMUSU
	var postvI = L.icon({
	    iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/POSITIVE.gif',
	    iconSize:     [2, 2],
	    iconAnchor:   [0, 0], //[X,Y]
	    popupAnchor:  [2, -4]
	});
	var inspectI = L.icon({
		iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/INSPECTION.gif',
		iconSize:     [12, 12],
	    iconAnchor:   [5, 5], //[X,Y]
	    popupAnchor:  [2, -4]
	});
	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 1</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 6</p></div>";
	L.marker([-7.313094753981642, 110.71936726570128], {icon: inspectI}).bindPopup(customPopup).addTo(map);
	L.marker([-7.313094753981642, 110.71936726570128], {icon: postvI}).bindPopup(customPopup).addTo(map);

	//CASES KARANGGEDE
	var postvI = L.icon({
	    iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/POSITIVE.gif',
	    iconSize:     [26, 26],
	    iconAnchor:   [0, 0], //[X,Y]
	    popupAnchor:  [13, -4]
	});
	var inspectI = L.icon({
		iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/INSPECTION.gif',
		iconSize:     [34, 34],
	    iconAnchor:   [4, 4], //[X,Y]
	    popupAnchor:  [13, -4]
	});
	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 8</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 14</p></div>";
	L.marker([-7.352685588164234, 110.65133571624756], {icon: inspectI}).bindPopup(customPopup).addTo(map);
	L.marker([-7.352685588164234, 110.65133571624756], {icon: postvI}).bindPopup(customPopup).addTo(map);

	//CASES KLEGO
	var postvI = L.icon({
	    iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/POSITIVE.gif',
	    iconSize:     [2, 2],
	    iconAnchor:   [0, 0], //[X,Y]
	    popupAnchor:  [1, -4]
	});
	var inspectI = L.icon({
		iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/INSPECTION.gif',
		iconSize:     [10, 10],
	    iconAnchor:   [4, 4], //[X,Y]
	    popupAnchor:  [1, -4]
	});
	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 1</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 5</p></div>";
	L.marker([-7.376831146055664, 110.71849822998047], {icon: inspectI}).bindPopup(customPopup).addTo(map);
	L.marker([-7.376831146055664, 110.71849822998047], {icon: postvI}).bindPopup(customPopup).addTo(map);

	//CASES ANDONG
	var postvI = L.icon({
	    iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/POSITIVE.gif',
	    iconSize:     [2, 2],
	    iconAnchor:   [0, 0], //[X,Y]
	    popupAnchor:  [1, -6]
	});
	var inspectI = L.icon({
		iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/INSPECTION.gif',
		iconSize:     [14, 14],
	    iconAnchor:   [6, 6], //[X,Y]
	    popupAnchor:  [1, -6]
	});
	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 1</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 7</p></div>";
	L.marker([-7.361120855391863, 110.76407432556152], {icon: inspectI}).bindPopup(customPopup).addTo(map);
	L.marker([-7.361120855391863, 110.76407432556152], {icon: postvI}).bindPopup(customPopup).addTo(map);

	//CASES SIMO
/*	var tokoAIcon = L.icon({
	    iconUrl: 'cases/POSITIVE.GIF',
	    shadowUrl: 'cases/INSPECTION.GIF',

	    iconSize:     [10, 10],
	    shadowSize:   [20, 20],
	    iconAnchor:   [0, 0],
	    shadowAnchor: [5, 5], //[X,Y]
	    popupAnchor:  [5, -3]
	});

	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 10</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 20</p></div>";

	L.marker([-7.435796277339852, 110.69205164909361], {icon: tokoAIcon}).bindPopup(customPopup).addTo(map);
*/
	//CASES AMPEL
	var postvI = L.icon({
	    iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/POSITIVE.gif',
	    iconSize:     [14, 14],
	    iconAnchor:   [0, 0], //[X,Y]
	    popupAnchor:  [7, -8]
	});
	var inspectI = L.icon({
		iconUrl: 'http://infocovid-19boyolali.epizy.com/project_sig/cases/INSPECTION.gif',
		iconSize:     [30, 30],
	    iconAnchor:   [8, 8], //[X,Y]
	    popupAnchor:  [7, -8]
	});
	var customPopup = "<div class='transbox'><p align='left'><img src='cases/POSITIVE.png'> Positive : 8</p><p align='left'><img src='cases/INSPECT.png'> Dalam Pemeriksaan : 15</p></div>";
	L.marker([-7.447891215035548, 110.5663150548935], {icon: inspectI}).bindPopup(customPopup).addTo(map);
	L.marker([-7.447891215035548, 110.5663150548935], {icon: postvI}).bindPopup(customPopup).addTo(map);

/*	//Toko B
		var tokoBIcon = L.icon({
	    iconUrl: 'img/toko-b.png',
	    shadowUrl: 'img/b.jpg',

	    iconSize:     [90, 90], // size of the icon
	    shadowSize:   [80, 26], // size of the shadow
	    iconAnchor:   [12, 82], // point of the icon which will correspond to marker's location
	    shadowAnchor: [8, 7],  // the same for the shadow
	    popupAnchor:  [30, -69] // point from which the popup should open relative to the iconAnchor
	});

	L.marker([-7.5517, 110.68431], {icon: tokoBIcon}).addTo(map).bindPopup("<p align='center'> Toko B Kapasitas 80 <p> <br> Kordinat : &nbsp -7.5517, 110.68431");

	//Toko C
	var tokoCIcon = L.icon({
	    iconUrl: 'img/toko-c.png',
	    shadowUrl: 'img/c.jpg',

	    iconSize:     [64, 64], // size of the icon
	    shadowSize:   [64, 22], // size of the shadow
	    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
	    shadowAnchor: [23, 38],  // the same for the shadow
	    popupAnchor:  [10, -86] // point from which the popup should open relative to the iconAnchor
	});

	L.marker([-7.55261, 110.70775], {icon: tokoCIcon}).addTo(map).bindPopup("<p align='center'> Toko C Kapasitas 60 <p> <br> Kordinat : &nbsp -7.55261, 110.70775");

	//Toko D
	var tokoDIcon = L.icon({
	    iconUrl: 'img/toko-d.png',
	    shadowUrl: 'img/d.jpg',

	    iconSize:     [80, 80], // size of the icon
	    shadowSize:   [80, 26], // size of the shadow
	    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
	    shadowAnchor: [23, 18],  // the same for the shadow
	    popupAnchor:  [14, -92] // point from which the popup should open relative to the iconAnchor
	});

	L.marker([-7.5269, 110.70581], {icon: tokoDIcon}).addTo(map).bindPopup("<p align='center'> Toko D Kapasitas 100 <p> <br> Kordinat : &nbsp -7.5269, 110.70581");

	function getAllMarkers() {
	    
	    var allMarkersObjArray = [];
	    var allMarkersGeoJsonArray = [];

	    $.each(map._layers, function (ml) {

	        if (map._layers[ml].feature) {
	            
	            allMarkersObjArray.push(this)
	                                    allMarkersGeoJsonArray.push(JSON.stringify(this.toGeoJSON()))
	        }
	    })

	    console.log(allMarkersObjArray);
	    alert("total Markers : " + allMarkersGeoJsonArray.length + "\n\n" + allMarkersGeoJsonArray + "\n\n Also see your console for object view of this array" );
	}
	$(".get-markers").on("click", getAllMarkers);*/



	/* new tugas 9 */

	 //menambahkan style pada saat load GeoJson
	var URL = "case.php"; 
	var jsonmap = L.geoJson.ajax(URL, {onEachFeature: onEachFeatureFunction, style: pilihstyle}).addTo(map);

		//mendefinisikan style dari polygon
	function getColor(d) {
	    return d == 1 ? '#a13447' :
	           d == 2 ? '#3f9e42' :
	           d == 3 ? '#a89b28' :
	           d == 4 ? '#b83334' :
	           d == 5 ? '#48c73a' :
	           d == 6 ? '#a3c034' :
	           d == 7 ? '#b59646' :
	           d == 8 ? '#a6602c' :
	           d == 9 ? '#2ec679' :
	           d == 10 ? '#2b9d86' :
	           d == 11 ? '#5f9b21' :
	           d == 12 ? '#bc4a7d' :
	           d == 13 ? '#632b9a' :
	           d == 14 ? '#a84f3d' :
	           d == 15 ? '#a02a9c' :
	           d == 16 ? '#2697bf' :
	           d == 17 ? '#2343a6' :
	           d == 18 ? '#048823' :
	           d == 19 ? '#153534' :
	                      '#000000';
	}

	//mendefinisikan warna setiap feature sesuai besar atribut POPULASI berdasarkan function getColor(d)
	function pilihstyle(feature) {
	    return {
	        fillColor: getColor(feature.properties.KODE),
	        weight: 3,
	        opacity: 1,
	        color: getColor(feature.properties.KODE),
	        dashArray: '3',
	        fillOpacity: 0.9
	    };
	}


/*	var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

	    var div = L.DomUtil.create('div', 'info legend'),
	        grades = [0, 10, 20, 30, 40, 50, 60, 70, 80, 90],
	        labels = [];

	    // looping untuk menghasilkan legenda sesuai nilai
	    for (var i = 0; i < grades.length; i++) {
	        div.innerHTML +=
	            '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
	            grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
	    }

	    return div;
	};

	legend.addTo(map);*/

/*	L.control.scale().addTo(map);*/

	</script>
</html>

