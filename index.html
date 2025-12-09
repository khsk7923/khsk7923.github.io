<!DOCTYPE html>
<html>
<head>
<title>À propos </title>
<link href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/fichier.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<!-- <script src="js/sample-geojson.js"></script>	 -->
</head>
<body>
<div id="container">
	<h1>SIG D'IDF</h1>
	<img src="images/paris_8.jpg" alt="" id="ma-photo" />
	 <img src="images/region.jpg" alt="" id="ma-photo1"></a>
	<div class="topnav">
		<a href="accueil.php"><i class="fas fa-home"></i>Accueil</a>
		<a href="apropos.html"><i class="fa fa-house-user"></i>A propos</a>
		<a href="carte_leafle.php"><i class="fas fa-map"></i>CARTE</a>
		
</div>

	<!-- Inclusion du fichier qui fait la requête -->
	<?php include("get_coordonnee.php"); ?>
	<?php include("get_commune.php"); ?>
	<?php include("get_region.php"); ?>
	<?php include("get_hopital.php"); ?>
	<?php include("get_iledefrance.php"); ?>
	<?php include("get_arrondissement.php"); ?>
	<?php include("get_pointactivite.php"); ?>
	<?php include("req_activite.php"); ?>
	


	<!-- Table -->
	<div style="">
		<div id="tableid">
			<?php
				$tab_html = "";
				if(sizeof($liste)) {
					// Création de l'entête
					$tab_html .= "<table><tr>";
					foreach($liste[0] as $key => $value)
						$tab_html .= "<th>" . $key . "</th>";
					$tab_html .= "</tr>";
					// Création du corps.
					$count = 0;
					for($i = 0; $i < sizeof($liste); $i++) {
						if($i%2 == 0) {
							$color = "blue";
						}
						else {
							$color = "black";
						}
						$tab_html .= "<tr style='color:" . $color . "'>";
						foreach($liste[$i] as $key => $value) {
							$tab_html .= "<th>" . $value . "</th>";
						}
						$count .= 1;
						$tab_html .= "</tr>";
					}
					$tab_html .= "</table>";
				}
				else
				$tab_html .= "<i>Aucun résultat à afficher.</i>";
				// Affichage du tableau.
				//echo $tab_html;
			?>
		</div>
	</div>
	<!-- Div dans lequel Carte -->
	<div id="mapid" style="width: 1300px; height: 640px;"></div>
	<!-- Script -->
	<script>
		// Les copyrights Openstreetmap
		var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

		// Les données des fonds de plan
		var streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr}),
			Google_Satellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
					attribution:"Google Maps - Satellite",
					subdomains:['mt0','mt1','mt2','mt3']
			});

			OSMLayer = new L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
			attribution: "&copy; <a href='https://www.openstreetmap.org/copyright'>OpenStreetMap</a> contributors"
			});
			OSMRelief = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
			maxZoom: 17,
			attribution: "&copy; <a href='https://opentopomap.org'>OpenTopoMap</a> contributors"
			});
	
		// var mymap = L.map('mapid').setView([48.86, 2.34], 6);
		// Variable mymap qui permet de "mapper" un div avec la carte leaflet.
		// On va ajouter la carte mymap dans le div "mapid"
		var mymap = L.map('mapid', {
			center: [48.742414, 2.493932], // Centrer par défaut
			zoom: 8.5, // Zoom par défaut
			layers: [Google_Satellite] // Fonds de carte
		});
		// On donne le nom des fonds de carte qui vont apparaitre sur la carte
		var baseLayers = {
			
			"Rues": streets,
			"Google Maps - Satellite":Google_Satellite,
			"OSM":OSMLayer,
			"OSM_RELIEF":OSMRelief
		};
		// Ajouter le controle layer : Permet d'ajouter des couches sur l'objet mymap
		var controlLayers = L.control.layers(baseLayers).addTo(mymap);
				// On recupère les données de la requête
				var listeUniversites = <?php echo json_encode($liste); ?>;
				var listepointactivite = <?php echo json_encode($liste_point_activite ); ?>;
				var listehopital = <?php echo json_encode($liste_hopital); ?>;
				var listecommune = <?php echo json_encode($liste_commune); ?>;
				var listeiledefrance = <?php echo json_encode($liste_iledefrance); ?>;
				var listearrondissement = <?php echo json_encode($liste_arrondissement ); ?>;
				var listeregion = <?php echo json_encode($liste_region); ?>;
				var	liste2ecoles=<?php echo json_encode($liste_2_ecoles); ?>;
				var liste2kmhop=<?php echo json_encode($liste_2_km_hop); ?>;
				var listepashopiotal=<?php echo json_encode( $liste_pas_hopital); ?>;
				var liste1zoneac=<?php echo json_encode($liste_1_zone_ac); ?>;
				var listepasecole=<?php echo json_encode( $liste_pas_ecole); ?>;
				var listepointactivite1 = <?php echo json_encode( $liste_point_activite1); ?>;
				// var listepointactivite2 = <?php echo json_encode( $liste_point_activite2); ?>;
				// var listepointactivite3 = <?php echo json_encode($liste_point_activite3); ?>;
				// var listepointactivite4 = <?php echo json_encode($liste_point_activite4); ?>;
				// var listepointactivite5 = <?php echo json_encode($liste_point_activite5); ?>;
		

		function getGeoJSON(liste, modele = "") {
			var geoJSON = {
				"type": "FeatureCollection",
				"features": [],
				"modele": modele,
				
			};
			// On parcourt les données de liste
			for(var i = 0; i < liste.length; i++) {
				var ecole = liste[i];
				// On fabrique le feature à partir des entites. Pour cela on l'initialise.
				var feature = {
					"type": "Feature",
					"geometry": {},
					"properties": {},
					
				};
				for(var key in ecole) {
					if(key == "Coordonnees") {
						// Pour les coordonnees, on les ajoute dans la clé "geometry".
						feature.geometry = JSON.parse(ecole[key]);
					}
					else if(key == "ID") {
						// Pour la colonne (ID) on l'ajoute dans la clé "id"
						feature[key] = ecole[key];
					}
					else {
						// Pour les autres colonnes (nom et autre) on les ajoute dans properties pour les afficher dans le popup
						feature.properties[key] = ecole[key];
					}
				}
				// Une fois le feature créé, on l'ajoute dans la clé "features" de notre objet "geoJSON"
				geoJSON.features.push(feature);
			}
			return geoJSON;
		}
		/////////////////////////////////////
		function displayGeoJSON1(geoJSON, modele) {
			var LeafIcon = L.Icon.extend({
				options: {}
			});
			var iconMarker = "";
			if(modele == "ecole")
				iconMarker = new LeafIcon({iconUrl: 'images/schools.png'});
			if(modele == "hopital")
				iconMarker = new LeafIcon({iconUrl: 'images/medical.png'});
			if(modele == "point_activite")
				iconMarker = new LeafIcon({iconUrl: 'images/industries.png'});
			if(modele == "point_activite1")
				iconMarker = new LeafIcon({iconUrl: 'images/industries.png'});
			if(modele == "point_activit2")
				iconMarker = new LeafIcon({iconUrl: 'images/industries.png'});
			if(modele == "point_activite3")
				iconMarker = new LeafIcon({iconUrl: 'images/industries.png'});
			if(modele == "point_activite4")
				iconMarker = new LeafIcon({iconUrl: 'images/industries.png'});
			if(modele == "point_activite5")
				iconMarker = new LeafIcon({iconUrl: 'images/industries.png'});
			// L.geoJson permet d'afficher le geoJSON passé en paramètres.
			return L.geoJson([geoJSON], {
				// S'applique sur chaque feature de la couche
				onEachFeature: function(feature, layer) {
					var affichage = "<h2> "+ modele +" N°" + feature.ID + "</h2>";
					for(var key in feature.properties)
						affichage += "<p><strong>" + key + "</strong> : " + feature.properties[key] + "</p>";
					console.log(affichage);
					layer.bindPopup(affichage);
				}, color: "red", opacity:0.9, fillColor: 'green', fillOpacity: 0.2, weight: 5,
				pointToLayer: function(feature, latlng) {
					return L.marker(latlng,{icon:iconMarker});
				}
			}).addTo(mymap);
		}
		/////////////////////////////////
		function displayGeoJSON2(geoJSON, modele) {
			// L.geoJson permet d'afficher le geoJSON passé en paramètres.
			return L.geoJson([geoJSON], {
				// S'applique sur chaque feature de la couche
				onEachFeature: function(feature, layer) {
					var affichage = "<h2> "+ modele +" N°" + feature.ID + "</h2>";
					for(var key in feature.properties)
						affichage += "<p><strong>" + key + "</strong> : " + feature.properties[key] + "</p>";
					console.log(affichage);
					layer.bindPopup(affichage);
				}, color: "green", opacity:1, fillColor: 'green', fillOpacity: 0, weight: 4,
				pointToLayer: function(feature, latlng) {
					return L.marker(latlng,{icon:iconMarker});
				}
			}).addTo(mymap);
		}
		/////////////////////////////////////
		function displayGeoJSON3(geoJSON, modele) {
			// L.geoJson permet d'afficher le geoJSON passé en paramètres.
			return L.geoJson([geoJSON], {
				// S'applique sur chaque feature de la couche
				onEachFeature: function(feature, layer) {
					var affichage = "<h2> "+ modele +" N°" + feature.ID + "</h2>";
					for(var key in feature.properties)
						affichage += "<p><strong>" + key + "</strong> : " + feature.properties[key] + "</p>";
					console.log(affichage);
					layer.bindPopup(affichage);
				}, color: "yellow", opacity:1, fillColor: 'yellow', fillOpacity: 0, weight: 10,
				pointToLayer: function(feature, latlng) {
					return L.marker(latlng,{icon:iconMarker});
				}
			}).addTo(mymap);
		}
		/////////////////
		function displayGeoJSON4(geoJSON, modele) {
			// L.geoJson permet d'afficher le geoJSON passé en paramètres.
			return L.geoJson([geoJSON], {
				// S'applique sur chaque feature de la couche
				onEachFeature: function(feature, layer) {
					var affichage = "<h2> "+ modele +" N°" + feature.ID + "</h2>";
					for(var key in feature.properties)
						affichage += "<p><strong>" + key + "</strong> : " + feature.properties[key] + "</p>";
					console.log(affichage);
					layer.bindPopup(affichage);
				}, color: "red", opacity:1, fillColor: 'red', fillOpacity: 0, weight: 2,
				pointToLayer: function(feature, latlng) {
					return L.marker(latlng,{icon:iconMarker});
				}
			}).addTo(mymap);
		}
		////////
		function displayGeoJSON5(geoJSON, modele) {
			// L.geoJson permet d'afficher le geoJSON passé en paramètres.
			return L.geoJson([geoJSON], {
				// S'applique sur chaque feature de la couche
				onEachFeature: function(feature, layer) {
					var affichage = "";
					for(var key in feature.properties)
						affichage += "<p><strong>" + key + "</strong> : " + feature.properties[key] + "</p>";
					console.log(affichage);
					layer.bindPopup(affichage);
				}, color: "black", opacity:1, fillColor: 'red', fillOpacity: 0.4, weight: 2,
				pointToLayer: function(feature, latlng) {
					return L.marker(latlng,{icon:iconMarker});
				}
			}).addTo(mymap);
		}
		////////////////////////////////
		// On construit la donnée GeoJSON. On l'initialise (features = tableau vide)

		// ON récupère le geoJSON
		var geoJSONUniversite = getGeoJSON(listeUniversites,"ecole");
		var geoJSONcommune = getGeoJSON(listecommune,"commune");
		var geoJSONhopital = getGeoJSON(listehopital,"hopital");
		var geoJSONiledefrance = getGeoJSON(listeiledefrance,"ile_de_france");
		var geoJSONarrondissement = getGeoJSON(listearrondissement,"arrondissement");
		var geoJSONpointactivite = getGeoJSON(listepointactivite,"point_activite");
		var geoJSONregion = getGeoJSON(listeregion,"region");
		var geoJSON2ecoles = getGeoJSON(liste2ecoles,"2ecoles");
		var geoJSONliste2kmhop = getGeoJSON(liste2kmhop,"2kmhop");
		var geoJSONlistepashopiotal=getGeoJSON(listepashopiotal,"pashopiotal");
		var geoJSONliste1zoneac=getGeoJSON(liste1zoneac,"1zoneac");
		var geoJSONlistepasecole=getGeoJSON(listepasecole,"pasecole");
		var geoJSONpointactivite1 = getGeoJSON(listepointactivite1,"point_activite1");
		//var geoJSONpointactivite2 = getGeoJSON(listepointactivite2,"point_activite2");
		// var geoJSONpointactivite3 = getGeoJSON(listepointactivite3,"point_activite3");
		// var geoJSONpointactivite4 = getGeoJSON(listepointactivite4,"point_activite4");
		// var geoJSONpointactivite5 = getGeoJSON(listepointactivite5,"point_activite5");



		// Une fois le GeoJSON construit, on l'affiche sur la carte.
		var geojsonLayer1 = displayGeoJSON1(geoJSONUniversite,"ecole");
		var geojsonLayer2 = displayGeoJSON1(geoJSONpointactivite,"point_activite");
    	var geojsonLayer3 = displayGeoJSON1(geoJSONhopital,"hopital");
		var geojsonLayer4= displayGeoJSON4(geoJSONcommune,"commune");
		var geojsonLayer5 = displayGeoJSON4(geoJSONarrondissement,"arrondissement");
		var geojsonLayer6 = displayGeoJSON3(geoJSONiledefrance,"ile_de_france");
		var geojsonLayer7 = displayGeoJSON2(geoJSONregion,"region");
		var geojsonLayer8 = displayGeoJSON5(geoJSON2ecoles,"2ecoles");
		var geojsonLayer9 = displayGeoJSON5(geoJSONliste2kmhop,"2kmhop");
		var geojsonLayer10 = displayGeoJSON5(geoJSONlistepashopiotal,"pashopiotal");
		var geojsonLayer11 = displayGeoJSON5(geoJSONliste1zoneac,"1zoneac");
		var geojsonLayer12 = displayGeoJSON5(geoJSONlistepasecole,"pasecole");
		var geojsonLayer13 = displayGeoJSON1(geoJSONpointactivite1,"point_activite1");
		//var geojsonLayer14 = displayGeoJSON1(geoJSONpointactivite2,"point_activite2");
		// var geojsonLayer15 = displayGeoJSON1(geoJSONpointactivite3,"point_activite3");
		// var geojsonLayer16 = displayGeoJSON1(geoJSONpointactivite4,"point_activite4");
		// var geojsonLayer17 = displayGeoJSON1(geoJSONpointactivite5,"point_activite5");
		// // Le controlelr
		// var controlLayers = L.control.layers().addTo(mymap);
		// Add the geojson layer to the layercontrol
		controlLayers.addOverlay(geojsonLayer1, 'ecoles');
		controlLayers.addOverlay(geojsonLayer2, 'points d\'activités') ;
		controlLayers.addOverlay(geojsonLayer3, 'hopitaux');
		controlLayers.addOverlay(geojsonLayer4, 'communes');
		controlLayers.addOverlay(geojsonLayer5, 'arrondissements');
		controlLayers.addOverlay(geojsonLayer6, 'ile_de_france');
		controlLayers.addOverlay(geojsonLayer7, 'regions');
		controlLayers.addOverlay(geojsonLayer8, 'Communes >2 ecole');
		controlLayers.addOverlay(geojsonLayer9, 'Communes < 2km de hopital '); 
		controlLayers.addOverlay(geojsonLayer10, 'Communes sans hopital '); 
		controlLayers.addOverlay(geojsonLayer11, 'Communes >= 2 zone_activités');
		controlLayers.addOverlay(geojsonLayer12, 'Communes < 2km ecole ');
		controlLayers.addOverlay(geojsonLayer13, 'point_activite_type_1') ;
		//controlLayers.addOverlay(geojsonLayer14, 'point_activite_type_2') ;
		// controlLayers.addOverlay(geojsonLayer15, 'point_activite_type_3') ;
		// controlLayers.addOverlay(geojsonLayer16, 'point_activite_type_4') ;
		// controlLayers.addOverlay(geojsonLayer17, 'point_activite_type_5') ;

		/*Legend specific*/
		var legend = L.control({ position: "bottomleft" });

		legend.onAdd = function(mymap) {
		var div = L.DomUtil.create("div", "legend");
		div.innerHTML += "<h2>Legende</h2>";
		div.innerHTML +=  '<img src="images/schools.png" width="22" height="22">' + '     Ecoles' + '<br>'
		div.innerHTML +=  '<img src="images/industries.png" width="22" height="22">'  + '     Points d\'activités' + '<br>'
		div.innerHTML +=  '<img src="images/medical.png" width="22" height="22">'   +  '     Hopitaux'+ '<br>'
		div.innerHTML += '<i style="background: #2a5407"></i><span>Régions </span><br>';
		div.innerHTML += '<i style="background: #ffed24" ></i><span>Île_De_France</span><br>';
		div.innerHTML += '<i style="background: #f70000"></i><span>Communes et Arrondissements</span><br>';

		


		return div;
		};
		legend.addTo(mymap);
		scale=L.control.scale( {position: "bottomright" }).addTo(mymap);



		
</script>

<br>
	<footer>
	<div class="topnav">
					<p>
					<strong>SYLLA Mahamadou </strong>
			
					<br>
					Je suis etudiant en Master1 de geomatique  à  l'univesite paris8
					<br> Ce travail a pour but de donner  une reponse numerique aux  questions  relatives aux sig  .
					<br>adresse contact : mahamadousyl@hotmail.fr</a>
					</p>
				</div>
	</footer>
</body>
</html>
