<?php error_reporting(E_ALL ^ E_WARNING);  ?>
<?php
<<<<<<< HEAD
   /* $document = cookie();
=======
    $document = cookie();
>>>>>>> d09b13fb623773256117e64277d11a109e916943
    $texte_connexion = $document->getElementById("connexion")->nodeValue;
    $texte_inscription = $document->getElementById("inscription")->nodeValue;
    $texte_user = $document->getElementById("user")->nodeValue;
    $texte_pass = $document->getElementById("pass")->nodeValue;
    $texte_t_email = $document->getElementById("text_email")->nodeValue;
    $texte_t_email_ph = $document->getElementById("text_email_ph")->nodeValue;
    $texte_confirmer = $document->getElementById("confirmer")->nodeValue;
    $texte_deja_compte = $document->getElementById("deja_compte")->nodeValue;
    $texte_se_connecter = $document->getElementById("se_connecter")->nodeValue;

    $texte_err1 = $document->getElementById("err1")->nodeValue;
    $texte_err2 = $document->getElementById("err2")->nodeValue;
<<<<<<< HEAD
    $texte_err3 = $document->getElementById("err3")->nodeValue;*/




?>
<section class="inscrip">
        <!-- <h2><?php //echo $texte_inscription; ?></h2> -->
        <h2>Inscription</h2>
        <form id='inscription' action="/art-public-mtl/api/compte/inscriptionForm" method="post">
            <div>
                <label for="mail">
                    <!-- <p class="pConnexion titreBtn"><?php // echo $texte_t_email; ?></p> -->
                    <p class="pConnexion titreBtn">Adresse mail</p>
                </label>
                <!-- <input class="inputText" type="text" id="mail" name="mail" value="" placeholder='<?php // echo $texte_t_email_ph; ?>'> -->
                <input class="inputText" type="text" id="mail" name="mail" value="" placeholder='Entrez votre adresse mail'>
            </div>
            <div>
                <label for="name">
                    <!-- <p class="pConnexion titreBtn"><?php  //echo $texte_user; ?></p> -->
                    <p class="pConnexion titreBtn">Nom d'utilisateur</p>
=======
    $texte_err3 = $document->getElementById("err3")->nodeValue;

?>
<section class="inscrip">
        <h2><?php echo $texte_inscription; ?></h2>
        <form id='inscription' action="/art-public-mtl/api/compte/inscriptionForm" method="post">
            <div>
                <label for="mail">
                    <p class="pConnexion titreBtn"><?php  echo $texte_t_email; ?></p>
                </label>
                <!-- <input class="inputText" type="email" id="mail" name="mail" value="" placeholder='Entrez votre adresse mail' required> -->
                <input class="inputText" type="text" id="mail" name="mail" value="" placeholder='<?php  echo $texte_t_email_ph; ?>' required>
            </div>
            <div>
                <label for="name">
                    <p class="pConnexion titreBtn"><?php  echo $texte_user; ?></p>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                </label>
                <input class="inputText" type="text" id="login" name="login" value="">
            </div>
            <div>
                <label for="mdp">
<<<<<<< HEAD
                    <!-- <p class="pConnexion titreBtn"><?php  //echo $texte_pass; ?></p> -->
                    <p class="pConnexion titreBtn">Mot de passe</p>
=======
                    <p class="pConnexion titreBtn"><?php  echo $texte_pass; ?></p>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                </label>
                <input class="inputText" type="password" id="mdp" name="mdp" value="">
            </div>
            <div>
                <label for="mdpConfirm">
<<<<<<< HEAD
                    <!-- <p class="pConnexion titreBtn"><?php  //echo $texte_confirmer; ?></p> -->
                    <p class="pConnexion titreBtn">Confirmez le mot de passe</p>
=======
                    <p class="pConnexion titreBtn"><?php  echo $texte_confirmer; ?></p>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                    <p id="msgErreurRegex"></p>
                </label>
                <input class="inputText" type="password" id="mdpConfirm" name="mdpConfirm" value="">
                <p id="msgErreurConfirm"></p>
            </div>
            <div>
<<<<<<< HEAD
                <!-- <input class="btnConnexion btnLarge" type="button" id="envoyer" value="<?php  //echo $texte_connexion; ?>"> -->
                <input class="btnConnexion btnLarge" type="button" id="envoyer" value="Inscription">
            </div>
        </form>
        <p><?php  if(isset($_GET['update']) && $_GET['update']=="login"){
                   // echo $text_err1;  
                    echo "Votre nom de compte est déjà utilisé.";  
                }  
                else if (isset($_GET['update']) && $_GET['update']=="mail"){
                   // echo $text_err2;
                   echo "Votre adresse mail est déjà utilisée."; 
                }else if (isset($_GET['update']) && $_GET['update']=="loginmail"){
                   // echo $text_err3;  
                   echo "Votre adresse mail et votre nom d'utilisateur sont déjà utilisés."; 

=======
                <input class="btnConnexion btnLarge" type="button" id="envoyer" value="<?php  echo $texte_connexion; ?>">
            </div>
        </form>
        <p><?php  if(isset($_GET['update']) && $_GET['update']=="login"){
                    echo $text_err1;  
                }  
                else if (isset($_GET['update']) && $_GET['update']=="mail"){
                    echo $text_err2;  
                }else if (isset($_GET['update']) && $_GET['update']=="loginmail"){
                    echo $text_err3;  
>>>>>>> d09b13fb623773256117e64277d11a109e916943
                } ?></p>
    </section>
    <section class="connex">
        <div>
<<<<<<< HEAD
            <!-- <p><?php  //echo $texte_deja_compte; ?></p> -->
            <p>Déja un compte ?</p>
            <div class="lienInscription">
                <!-- <a href="/art-public-mtl/api/compte/connexion" class="txtLien"><?php // echo $texte_se_connecter; ?><i class="material-icons">chevron_right</i></a> -->
                <a href="/art-public-mtl/api/compte/connexion" class="txtLien">Se connecter <i class="material-icons">chevron_right</i></a>
=======
            <p><?php  echo $texte_deja_compte; ?></p>
            <div class="lienInscription">
                <a href="/art-public-mtl/api/compte/connexion" class="txtLien"><?php  echo $texte_se_connecter; ?><i class="material-icons">chevron_right</i></a>
>>>>>>> d09b13fb623773256117e64277d11a109e916943
            </div>
        </div>
    </section>
</main>

