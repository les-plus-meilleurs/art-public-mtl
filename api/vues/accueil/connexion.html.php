<?php error_reporting(E_ALL ^ E_WARNING);  ?>
<?php
<<<<<<< HEAD
        /*$document = cookie();
=======
        $document = cookie();
>>>>>>> d09b13fb623773256117e64277d11a109e916943
        $texte_connexion = $document->getElementById("connexion")->nodeValue;
        $texte_user = $document->getElementById("user")->nodeValue;
        $texte_pass = $document->getElementById("pass")->nodeValue;
        $texte_pas_de_compte = $document->getElementById("pas_de_compte")->nodeValue;
<<<<<<< HEAD
        $texte_inscrire = $document->getElementById("s_inscrire")->nodeValue;*/
?>
<section class="connexion">
    <!-- <h2><?php// echo $texte_connexion ?></h2> -->
    <h2>Se connecter</h2>
    <form id='connection' action="/art-public-mtl/api/compte/connexion" method="post">
        <div>
            <label for="name">
                <!-- <p class="pConnexion titreBtn"><?php// echo $texte_user; ?></p> -->
                <p class="pConnexion titreBtn">Nom d'utilisateur</p>
=======
        $texte_inscrire = $document->getElementById("s_inscrire")->nodeValue;
?>
<section class="connexion">
    <h2><?php echo $texte_connexion ?></h2>
    <form id='connection' action="/art-public-mtl/api/compte/connexion" method="post">
        <div>
            <label for="name">
                <p class="pConnexion titreBtn"><?php echo $texte_user; ?></p>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
            </label>
            <input class="inputText" type="text" id="name" name="login">
        </div>
        <div>
            <label for="mdp">
<<<<<<< HEAD
                <p class="pConnexion titreBtn">Mot de passe</p>
                <!-- <p class="pConnexion titreBtn"><?php //echo $texte_pass; ?></p> -->
=======
                <p class="pConnexion titreBtn"><?php echo $texte_pass; ?></p>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
            </label>
            <input class="inputText" type="password" id="mdp" name="mdp">
        </div>
        <div>
<<<<<<< HEAD
            <!-- <input class="btnConnexion btnLarge" type="submit" id="envoyer" value="<?php// echo $texte_connexion ?>"> -->
            <input class="btnConnexion btnLarge" type="submit" id="envoyer" value="Se connecter">
=======
            <input class="btnConnexion btnLarge" type="submit" id="envoyer" value="<?php echo $texte_connexion ?>">
>>>>>>> d09b13fb623773256117e64277d11a109e916943
        </div>
    </form>
</section>

<section class="inscription">
    <div>
<<<<<<< HEAD
        <!-- <p><?php //echo $texte_pas_de_compte; ?></p> -->
        <p>Pas encore de compte ?</p>
        <div class="lienInscription">
            <!-- <a href="/art-public-mtl/api/compte/inscription" class="txtLien"><?php// echo $texte_inscrire; ?><i class="material-icons">chevron_right</i></a> -->
            <a href="/art-public-mtl/api/compte/inscription" class="txtLien">S'inscrire<i class="material-icons">chevron_right</i></a>
=======
        <p><?php echo $texte_pas_de_compte; ?></p>
        <div class="lienInscription">
            <a href="/art-public-mtl/api/compte/inscription" class="txtLien"><?php echo $texte_inscrire; ?><i class="material-icons">chevron_right</i></a>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
        </div>
    </div>
        
        
    </section>
</main>

