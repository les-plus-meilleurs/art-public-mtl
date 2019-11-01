<<<<<<< HEAD
﻿<?php error_reporting(E_ALL ^ E_WARNING);  ?>
<?php
    /*$document = cookie();
=======
<?php error_reporting(E_ALL ^ E_WARNING);  ?>
<?php 
    $document = cookie();
>>>>>>> d09b13fb623773256117e64277d11a109e916943
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
<<<<<<< HEAD
    $text_e_medias = $document->getElementById("medias")->nodeValue;*/
=======
    $text_e_medias = $document->getElementById("medias")->nodeValue;
>>>>>>> d09b13fb623773256117e64277d11a109e916943
?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8S4xg4xxyN0iGGBdUOpR3xRa4DIkD710&callback=initMap"
    async defer>
    </script>
<script>
        var map;
    //data oeuvres
    function setMarkers(map)
    {
<<<<<<< HEAD
        var oeuvre = ["Campus principal", 45.551088, -73.5557277, ""];
=======
        var oeuvre = ["<?php echo $text_adresse1; ?>", 45.551088, -73.5557277, ""];
>>>>>>> d09b13fb623773256117e64277d11a109e916943
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
<<<<<<< HEAD
            var oeuvre = ["Campus principal", 45.551088, -73.5557277, ""];
=======
            var oeuvre = ["<?php echo $text_adresse1; ?>", 45.551088, -73.5557277, ""];
>>>>>>> d09b13fb623773256117e64277d11a109e916943
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
<<<<<<< HEAD
            <span class="onglet_0 onglet" id="onglet_localisation" onclick="javascript:change_onglet('localisation');">Localisation</span>
            <span class="onglet_0 onglet" id="onglet_ecrivez" onclick="javascript:change_onglet('ecrivez');">&Eacute;crivez-nous</span>
<!--            <span class="onglet_0 onglet" id="onglet_medias" onclick="javascript:change_onglet('medias');"><?php //echo $text_e_medias; ?></span>-->
=======
            <span class="onglet_0 onglet" id="onglet_details" onclick="javascript:change_onglet('details');"><?php echo $text_localisation; ?></span>
            <span class="onglet_0 onglet" id="onglet_artiste" onclick="javascript:change_onglet('artiste');"><?php echo $text_ecrivez; ?></span>
            <span class="onglet_0 onglet" id="onglet_carte" onclick="javascript:change_onglet('carte');"><?php echo $text_e_medias; ?></span>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
        </div>
        <div class="contenu_onglets">
            <div class="contenu_onglet" id="contenu_onglet_localisation">
                <section class="texte">
                    <p>
                    <strong><?php echo $text_adresse1; ?></strong>
                    <br>
                    <?php echo $text_adresse2; ?>
                    <br>
                    <?php echo $text_adresse3; ?>
                    <br>
                    <?php echo $text_adresse4; ?>
                    </p>
                    <div class="carte_contact">
<<<<<<< HEAD
                    <div id="map" class="carte"></div>
=======
                    <div id="map" class="carte" style="height:480px; width:640px;"></div>
<!--                    <iframe src="https://www.google.com/maps/d/embed?mid=1nrpE60oVxUEQEUOvHFRT5c-33P5zf6Ix" width="640" height="480"></iframe>-->
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                    </div>
                </section>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_ecrivez">
                <form action="/art-public-mtl/api/contact" method="post">
                    <fieldset>
<<<<<<< HEAD
                        <div>
                          <label for="nom">
                            <p class="pContact titreBtn">Nom</p>
                          </label>
                          <input type="text" class="inputText" name="nom" value="">
                        </div>
                        <div>
                          <label for="prenom">
                            <p class="pContact titreBtn">Prenom</p>
                          </label>
                          <input class="inputText" type="text" name="prenom" value="">
                        </div>
                        <div>
                          <label for="courriel">
                            <p class="pContact titreBtn">courriel</p>
                          </label>
                          <input class="inputText" type="text" name="courriel" value="">
                        </div>
                        <div>
                          <label for="sujet">
                            <p class="pContact titreBtn">sujet</p>
                          </label>
                          <select name="sujet" class="inputText">
                              <option value="Proposition">Proposition d'oeuvre</option>
                              <option value="Demande">Demande de compte</option>
                              <option value="Signaler">Signaler des domages d'une oeuvre</option>
                              <option value="Autre">Autre</option>
                          </select>
                        </div>
                        <div>
                          <label for="message">
                            <p class="pContact titreBtn">Commentaire</p>
                          </label>
                          <textarea class="inputMsg" name="message" rows="10" cols="30"></textarea>
                        </div>
                        <div>
                          <input class="btnContact btnLarge" type="submit" value="Envoyer">
                        </div>
=======
                        <h3><?php echo $text_ecrivez; ?></h3>
                        <?php echo $text_e_nom; ?><br>
                        <input type="text" name="nom" value="">
                        <br>
                        <?php echo $text_e_prenom; ?><br>
                        <input type="text" name="prenom" value="">
                        <br>
                        <?php echo $text_e_courriel; ?><br>
                        <input type="text" name="courriel" value="">
                        <br>
                        <?php echo $text_e_sujet; ?>
                        <select name="sujet">
                            <option value="Proposition"><?php echo $text_e_suj1; ?></option>
                            <option value="Demande"><?php echo $text_e_suj2; ?></option>
                            <option value="Signaler"><?php echo $text_e_suj3; ?></option>
                            <option value="Autre"><?php echo $text_e_suj4; ?></option>
                        </select>
                        <br>
                        <p><?php echo $text_e_commentaire; ?></p>
                        <br>
                        <textarea name="message" rows="10" cols="30"></textarea>
                        <br><br>
                        <input type="submit" value="<?php echo $text_e_envoyer; ?>">
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                    </fieldset>
                </form>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_medias">
                <section class="medias">
                  <div class="icons">

                    <a href="https://twitter.com/ArtPMTL"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
                    <!-- <a href="#"><svg  aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" class="svg-inline--fa fa-twitter-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg></a> -->
                    <!-- <a href="#"><svg  aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a> -->
                    <!-- <a href="#"><svg  aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg></a> -->
                    <a href="https://www.facebook.com/artpublicmtl?ref=hl"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a>
                  </div>
                </section>
            </div>
		</div>
	</div>
</section>
