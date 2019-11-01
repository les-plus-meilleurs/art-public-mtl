<?php error_reporting(E_ALL ^ E_WARNING);  ?>
<?php
<<<<<<< HEAD
   /* $document = cookie();
=======
    $document = cookie();
>>>>>>> d09b13fb623773256117e64277d11a109e916943
    $text_presentation = $document->getElementById("presentation")->nodeValue;
    $text_pres_contenu_p1 = $document->getElementById("pres_contenu_p1")->nodeValue;
    $text_pres_contenu_p2 = $document->getElementById("pres_contenu_p2")->nodeValue;
    $text_faq = $document->getElementById("faq")->nodeValue;
    $text_faq_q1 = $document->getElementById("faq_q1")->nodeValue;
    $text_faq_q1_p1 = $document->getElementById("faq_q1_p1")->nodeValue;
    $text_faq_q1_p2 = $document->getElementById("faq_q1_p2")->nodeValue;
    $text_faq_q1_p3 = $document->getElementById("faq_q1_p3")->nodeValue;
    $text_faq_q1_p4 = $document->getElementById("faq_q1_p4")->nodeValue;
    $text_faq_q1_p5 = $document->getElementById("faq_q1_p5")->nodeValue;
    $text_faq_q1_p6 = $document->getElementById("faq_q1_p6")->nodeValue;
    $text_faq_q1_p7 = $document->getElementById("faq_q1_p7")->nodeValue;
    $text_faq_q1_p8 = $document->getElementById("faq_q1_p8")->nodeValue;
    $text_faq_q1_p9 = $document->getElementById("faq_q1_p9")->nodeValue;
    $text_faq_q2 = $document->getElementById("faq_q2")->nodeValue;
    $text_faq_q2_p1 = $document->getElementById("faq_q2_p1")->nodeValue;
<<<<<<< HEAD
    $text_faq_q2_p2 = $document->getElementById("faq_q2_p2")->nodeValue;
    $text_faq_q2_p3 = $document->getElementById("faq_q2_p3")->nodeValue;
=======
    $text_faq_q2_p1 = $document->getElementById("faq_q2_p1")->nodeValue;
    $text_faq_q2_p1 = $document->getElementById("faq_q2_p1")->nodeValue;
>>>>>>> d09b13fb623773256117e64277d11a109e916943
    $text_faq_q3 = $document->getElementById("faq_q3")->nodeValue;
    $text_faq_q3_p1 = $document->getElementById("faq_q3_p1")->nodeValue;
    $text_faq_q3_p2 = $document->getElementById("faq_q3_p2")->nodeValue;
    $text_faq_q3_p3 = $document->getElementById("faq_q3_p3")->nodeValue;
    $text_faq_q3_p4 = $document->getElementById("faq_q3_p4")->nodeValue;
<<<<<<< HEAD
    $text_apropos = $document->getElementById("menu_apropos")->nodeValue;*/
=======
    $text_apropos = $document->getElementById("menu_apropos")->nodeValue;
>>>>>>> d09b13fb623773256117e64277d11a109e916943
?>
<section class="contenu-apropos">
    <h3><?php echo $text_apropos; ?></h3>
    <div class="systeme_onglets">
        <div class="onglets">
<<<<<<< HEAD
            <!-- <span class="onglet_0 onglet" id="onglet_details" onclick="javascript:change_onglet('details');"><?php //echo $text_presentation; ?></span> -->
            <span class="onglet_0 onglet" id="onglet_details" onclick="javascript:change_onglet('details');">Pr&eacute;sentation</span>
            <!-- <span class="onglet_0 onglet" id="onglet_artiste" onclick="javascript:change_onglet('artiste');"><?php //echo $text_faq; ?></span> -->
            <span class="onglet_0 onglet" id="onglet_artiste" onclick="javascript:change_onglet('artiste');">FAQ</span>
=======
            <span class="onglet_0 onglet" id="onglet_details" onclick="javascript:change_onglet('details');"><?php echo $text_presentation; ?></span>
            <span class="onglet_0 onglet" id="onglet_artiste" onclick="javascript:change_onglet('artiste');"><?php echo $text_faq; ?></span>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
        </div>
        <div class="contenu_onglets">
            <div class="contenu_onglet" id="contenu_onglet_details">
                <section class="texte">
<<<<<<< HEAD
                    <!-- <p><?php //echo $text_pres_contenu_p1; ?></p> -->
                    <p>
                    Art public Montréal est une initiative de la Ville de Montréal visant à rassembler, au sein d’un partenariat unique, les propriétaires d’œuvres d’art public présentes sur le territoire montréalais et les acteurs du rayonnement de la métropole. En collaboration avec Tourisme Montréal, son objectif est d’accroître la notoriété de Montréal à titre de destination internationale d’art public.
                    Par la mise en commun de ressources et d’expertise en matière de recherche, de collectionnement et de mise en valeur, les partenaires contribueront à la réalisation et au développement d’outils de diffusion de la grande collection montréalaise d’art public. Ce regroupement comprendra ultimement plus de 1000 œuvres d’art public accessibles, réalisées par près de 500 artistes professionnels, tant québécois qu’internationaux, dispersées aux quatre coins de l’île. Ce site web, premier outil de mise en valeur développé par les partenaires, propose une variété d’opportunités de parcours et de découvertes par la diversité des œuvres représentées.
=======
                    <p><?php echo $text_pres_contenu_p1; ?>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                    </p>
                    <br>
                    <p>
                    <?php echo $text_pres_contenu_p2; ?>
                    </p>
                    <!-- <p> -->
                    <?php //echo $text_pres_contenu_p2; ?>
                    <!-- </p> -->
                </section>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_artiste">
                <h2></h2>
<<<<<<< HEAD
                <button class="accordion">QU’EST-CE QUE L’ART PUBLIC?</button>
=======

                <button class="accordion"><?php echo $text_faq_q1; ?></button>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                <div class="panel">
                    <p><?php echo $text_faq_q1_p1; ?></p>
                    <br>
                    <strong><?php echo $text_faq_q1_p2; ?></strong> 
                    <br>
                    <p><?php echo $text_faq_q1_p3; ?></p>
                    <br>
                    <strong><?php echo $text_faq_q1_p4; ?></strong>
                    <br>
                    <p><?php echo $text_faq_q1_p5; ?></p>
                    <br>
                    <strong><?php echo $text_faq_q1_p6; ?></strong>
                    <br>
                    <p><?php echo $text_faq_q1_p7; ?></p>
                    <br>
                    <p><?php echo $text_faq_q1_p8; ?></p>
                    <br>
                    <p><?php echo $text_faq_q1_p9; ?></p>
                </div>
                <!-- <button class="accordion"><?php //echo $text_faq_q1; ?></button> -->

                <!-- <div class="panel">
                    <p><?php //echo $text_faq_q1_p1; ?></p>
                    <br>
                    <strong><?php //echo $text_faq_q1_p2; ?></strong>
                    <br>
                    <p><?php //echo $text_faq_q1_p3; ?></p>
                    <br>
                    <strong><?php //echo $text_faq_q1_p4; ?></strong>
                    <br>
                    <p><?php //echo $text_faq_q1_p5; ?></p>
                    <br>
                    <strong><?php //echo $text_faq_q1_p6; ?></strong>
                    <br>
                    <p><?php //echo $text_faq_q1_p7; ?></p>
                    <br>
                    <p><?php //echo $text_faq_q1_p8; ?></p>
                    <br>
                    <p><?php //echo $text_faq_q1_p9; ?></p>
                </div> -->

                <button class="accordion"><?php echo $text_faq_q2; ?></button>
                <div class="panel">
                    <p><?php echo $text_faq_q2_p1; ?></p>
                    <br>
                    <p><?php echo $text_faq_q2_p2; ?></p>
                    <br>
                    <p><?php echo $text_faq_q2_p3; ?></p>
                </div>
<<<<<<< HEAD
                <!-- <button class="accordion"><?php //echo $text_faq_q2; ?></button>
                <div class="panel">
                    <p><?php //echo $text_faq_q2_p1; ?></p>
                    <br>
                    <p><?php //echo $text_faq_q2_p2; ?></p>
                    <br>
                    <p><?php //echo $text_faq_q2_p3; ?></p>
                </div> -->
                <button class="accordion">CONDITIONS D’UTILISATION</button>
=======

                <button class="accordion"><?php echo $text_faq_q3; ?></button>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                <div class="panel">
                    <p><?php echo $text_faq_q3_p1; ?><p>
                    <br>
                    <strong><?php echo $text_faq_q3_p2; ?></strong>
                    <br>
                    <p><?php echo $text_faq_q3_p3; ?></p>
                    <br>
                    <p><?php echo $text_faq_q3_p4; ?></p>
                </div>
                <!-- <button class="accordion"><?php// echo $text_faq_q3; ?></button>
                <div class="panel">
                    <p><?php //echo $text_faq_q3_p1; ?><p>
                    <br>
                    <strong><?php //echo $text_faq_q3_p2; ?></strong>
                    <br>
                    <p><?php //echo $text_faq_q3_p3; ?></p>
                    <br>
                    <p><?php //echo $text_faq_q3_p4; ?></p>
                </div> -->
            </div>
		</div>
	</div>
</section>
