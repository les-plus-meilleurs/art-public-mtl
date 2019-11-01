<?php error_reporting(E_ALL ^ E_WARNING);  ?>
<?php
    $document = cookie();
    $text_localisation = $document->getElementById("localisation")->nodeValue;
    $text_adresse1 = $document->getElementById("adresse1")->nodeValue;
    $text_adresse2 = $document->getElementById("adresse2")->nodeValue;
    $text_adresse3 = $document->getElementById("adresse3")->nodeValue;
    $text_adresse4 = $document->getElementById("adresse4")->nodeValue;
    $text_ecrivez = $document->getElementById("ecrivez_nous")->nodeValue;
    $text_e_nom = $document->getElementById("e_nom")->nodeValue;
    $text_e_prenom = $document->getElementById("e_prenom")->nodeValue;
    $text_e_courriel = $document->getElementById("e_courriel")->nodeValue;
    $text_e_sujet = $document->getElementById("e_sujet")->nodeValue;
    $text_e_suj1 = $document->getElementById("e_suj1")->nodeValue;
    $text_e_suj2 = $document->getElementById("e_suj2")->nodeValue;
    $text_e_suj3 = $document->getElementById("e_suj3")->nodeValue;
    $text_e_suj4 = $document->getElementById("e_suj4")->nodeValue;
    $text_e_commentaire = $document->getElementById("e_commentaire")->nodeValue;
    $text_e_envoyer = $document->getElementById("e_envoyer")->nodeValue;
    $text_e_medias = $document->getElementById("medias")->nodeValue;
?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8S4xg4xxyN0iGGBdUOpR3xRa4DIkD710&callback=initMap"
    async defer>
    </script>
<script>
        var map;
    //data oeuvres
    function setMarkers(map)
    {
        var oeuvre = ["<?php echo $text_adresse1; ?>", 45.551088, -73.5557277, ""];
        //marqueur pour chaque oeuvre
        var icon = {
            url: "../img/icons/mapmarker.png", // url
             scaledSize: new google.maps.Size(28, 40), // size
        };
            //paramètres des marqueurs
            var marker = new google.maps.Marker({
                position: {lat:  45.551088, lng: -73.5557277},
                map: map,
                icon: icon,
                title: "Campus Principal"
            });
            // Limites de la carte
            var allowedBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(45.4079982, -73.9446209),
                new google.maps.LatLng(45.6876557, -73.5051969));
                // Après avoir drag (glissé) le curseur
                google.maps.event.addListener(map, 'dragend', function()
                {
                    if (allowedBounds.contains(map.getCenter())) return;
                 // Rediriger la carte vers la dernière limite connue
                 var c = map.getCenter(),
                     x = c.lng(),
                     y = c.lat(),
                     maxX = allowedBounds.getNorthEast().lng(),
                     maxY = allowedBounds.getNorthEast().lat(),
                     minX = allowedBounds.getSouthWest().lng(),
                     minY = allowedBounds.getSouthWest().lat();
                 if (x < minX) x = minX;
                 if (x > maxX) x = maxX;
                 if (y < minY) y = minY;
                 if (y > maxY) y = maxY;
                 map.setCenter(new google.maps.LatLng(y, x));
               });
    }
    </script>
    <script>
                function initMap()
        {
            var myMapOptions = { clickableIcons: false }
            var styledMapType = new google.maps.StyledMapType(
                [
                  {
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#f5f5f5"
                      }
                    ]
                  },
                  {
                    "elementType": "labels.icon",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  },
                  {
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#616161"
                      }
                    ]
                  },
                  {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                      {
                        "color": "#f5f5f5"
                      }
                    ]
                  },
                  {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#bdbdbd"
                      }
                    ]
                  },
                  {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#eeeeee"
                      }
                    ]
                  },
                  {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#757575"
                      }
                    ]
                  },
                  {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#e5e5e5"
                      }
                    ]
                  },
                  {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#9e9e9e"
                      }
                    ]
                  },
                  {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#ffffff"
                      }
                    ]
                  },
                  {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#757575"
                      }
                    ]
                  },
                  {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#dadada"
                      }
                    ]
                  },
                  {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#616161"
                      }
                    ]
                  },
                  {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#9e9e9e"
                      }
                    ]
                  },
                  {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#e5e5e5"
                      }
                    ]
                  },
                  {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#eeeeee"
                      }
                    ]
                  },
                  {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "color": "#c9c9c9"
                      }
                    ]
                  },
                  {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#9e9e9e"
                      }
                    ]
                  }
                ],
                {name: 'Styled Map'});
            //options default la carte Google
            var oeuvre = ["<?php echo $text_adresse1; ?>", 45.551088, -73.5557277, ""];
            var options = {
                center: {lat: oeuvre[1], lng: oeuvre[2]},
                zoom: 17,
                minZoom : 11,
                maxZoom : 18,
                mapTypeControlOptions: {
                    mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                            'styled_map']
                  },
                disableDefaultUI: true,
                zoomControl: true,
                draggable : true
            }
            var map = new google.maps.Map(document.getElementById('map'), options);
            map.mapTypes.set('styled_map', styledMapType);
            map.setMapTypeId('styled_map');
            setMarkers(map);
        }
    </script>
<section class="contenu-contact">

    <?php if($message!=null) {
        echo($message);
    }
    ?>
    <div class="systeme_onglets">
        <div class="onglets">
            <span class="onglet_0 onglet" id="onglet_localisation" onclick="javascript:change_onglet('localisation');"><?php echo $text_localisation; ?></span>
            <span class="onglet_0 onglet" id="onglet_ecrivez" onclick="javascript:change_onglet('ecrivez');"><?php echo $text_ecrivez; ?></span>
            <span class="onglet_0 onglet" id="onglet_medias" onclick="javascript:change_onglet('medias');"><?php echo $text_e_medias; ?></span>
        </div>
        <div class="contenu_onglets">
            <div class="contenu_onglet" id="contenu_onglet_localisation">
                <section class="texte">
                    <p>
                    <strong>Campus principal</strong>
                    <br>
                    3800, rue Sherbrooke Est
                    <br>
                    Montr&eacute;al (Qu&eacute;bec) H1X 2A2
                    <br>
                    T&eacute;l.: 514 254-7131
                    </p>
                    <div class="carte_contact">
                    <div id="map" class="carte" style="height:480px; width:640px;"></div>
<!--                    <iframe class="frame_carte" src="https://www.google.com/maps/d/embed?mid=1nrpE60oVxUEQEUOvHFRT5c-33P5zf6Ix"></iframe>-->
                    </div>
                </section>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_ecrivez">
                <form action="/art-public-mtl/api/contact" method="post">
                    <fieldset>
			<h3><?php echo $text_ecrivez; ?></h3>
                        <div>
                          <label for="nom">
                            <p class="pContact titreBtn"><input type="text" name="nom" value=""></p>
                          </label>
                          <input type="text" name="nom" value="">
                        </div>
                        <div>
                          <label for="prenom">
                            <p class="pContact titreBtn"><?php echo $text_e_prenom; ?></p>
                          </label>
                          <input type="text" name="prenom" value="">
                        </div>
                        <div>
                          <label for="courriel">
                            <p class="pContact titreBtn"><?php echo $text_e_courriel; ?></p>
                          </label>
                          <input type="text" name="courriel" value="">
                        </div>
                        <div>
                          <label for="sujet">
                            <p class="pContact titreBtn"><?php echo $text_e_sujet; ?></p>
                          </label>
                          <select name="sujet">
                              <option value="Proposition">Proposition d'oeuvre</option>
                              <option value="Demande">Demande de compte</option>
                              <option value="Signaler">Signaler des domages d'une oeuvre</option>
                              <option value="Autre">Autre</option>
                          </select>
                        </div>
                        <div>
                          <label for="message">
                            <p class="pContact titreBtn"><?php echo $text_e_commentaire; ?></p>
                          </label>
                          <textarea name="message" rows="10" cols="30"></textarea>
                        </div>
                        <div>
                          <input class="btnContact btnLarge" type="submit" value="<?php echo $text_e_envoyer; ?>">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_medias">
                <section class="medias">
                    <div><i class="fa fa-linkedin" style="font-size:48px;color:dimgray"></i>Linkedin</div>
                    <div><i class="fa fa-pinterest-p" style="font-size:48px;color:dimgray"></i>Pinterest</div>
                </section>
            </div>
		</div>
	</div>
</section>
