		
<<<<<<< HEAD
	<?php //error_reporting(E_ALL ^ E_WARNING);  ?>
    <?php
        /*$document = cookie();
        $text1 = $document->getElementById("vivez1")->nodeValue;
        $text2 = $document->getElementById("vivez2")->nodeValue;
        $text3 = $document->getElementById("vivez3")->nodeValue;*/
=======
	<?php error_reporting(E_ALL ^ E_WARNING);  ?>
    <?php
        $document = cookie();
        $text1 = $document->getElementById("vivez1")->nodeValue;
        $text2 = $document->getElementById("vivez2")->nodeValue;
        $text3 = $document->getElementById("vivez3")->nodeValue;
>>>>>>> d09b13fb623773256117e64277d11a109e916943
    ?>	

    <section class="nvlOeuvres">
			<!-- <h2>Nouvelles oeuvres</h2> -->
			<!--SLIDER -->
			<!-- ref : https://www.w3schools.com/howto/howto_js_slideshow.asp -->

			<!-- A FAIRE AVEC javascript/php en ayant requete SQL: 
			- mettre liens vers les pages des oeuvres 
			- mettre nom de l'oeuvre
			- mettre la bonne image en fond -->

			<!-- Slideshow container -->
			<div class="slider">
				<div class="slide fade">
					<a href="oeuvre/4">
						<div class="img"><img class="photo" src="../img/oeuvres/1127_1.jpg" alt=""></div>
						<div class="nom">Le malheureux magnifique</div>
					</a>
					
				</div>
				<div class="slide fade">
					<a href="oeuvre/2">
						<div class="img"><img class="photo" src="../img/oeuvres/1099_1_B.jpg" alt=""></div>
						<div class="nom">Porte de jour</div>
					</a>
				</div>
				<div class="slide fade">
					<a href="oeuvre/3">
						<div class="img"><img class="photo" src="../img/oeuvres/1119_1.jpg" alt=""></div>
						<div class="nom">Regarder les pommetiers</div>
					</a>
				</div>

				<!-- Next and previous : fleches-->
				<a class="fleches prev">&#10094;</a>
				<a class="fleches next">&#10095;</a>
			</div>
			<br>

			<!-- Cercles -->
			<div class="points">
				<span class="point" data-slide="1"></span>
				<span class="point" data-slide="2"></span>
				<span class="point" data-slide="3"></span>
			</div>

		</section>
		<section class="carte">
			<div class="text">
<<<<<<< HEAD
				<h1>Vivez Montréal</h1>
				<!-- <h1><?php echo $text1 ?></h1> -->
				<p>À travers sa grande collection d'art public</p>
				<!-- <p><?php echo $text2 ?></p> -->
			</div>
			<!-- <a class= "btn btnAccueil" href="/art-public-mtl/api/oeuvre"><?php echo $text3 ?></a> -->
			<a class= "btn btnAccueil" href="/art-public-mtl/api/carte">Voir la carte</a>
=======
<!--				<h1>Vivez Montréal</h1>-->
				<h1><?php echo $text1 ?></h1>
<!--				<p>À travers sa grande collection d'art public</p>-->
				<p><?php echo $text2 ?></p>
			</div>
			<a class= "btn btnAccueil" href="/art-public-mtl/api/oeuvre"><?php echo $text3 ?></a>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
		</section>