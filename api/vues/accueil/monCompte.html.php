<?php extract($mail); ?>
   

   <section class='mesInfos'>
    <div class="mesDonnes">
        <div class="infosPersos">
          <p><?php 
              if(isset($_GET['update']) && $_GET['update']=="error"){
                echo "<p class='msg'>Une erreur est survenue, veuillez vérifiez vos champs.</p>";  
              }  
              else if (isset($_GET['update']) && $_GET['update']=="ok"){
                echo "<p class='msg'>Votre mot de passe a été modifié.</p>";  
              } ?></p>
           <h2>INFORMATIONS PERSONNELLES</h2>
           <section class="infoPerso">
               <div class="elmt first">
                    <p class="txtBtn">Nom d'utilisateur :</p>
                    <p> <?php echo $_SESSION["username"]; ?></p>
               </div>
              <div>
                  <div class="elmt">
                  <p class="txtBtn">Mot de passe :</p>
                <p> <?php 
                 echo '*********'; 
                ?></p>
                  </div>

                <a href="#" id='test' class="txtLien">Modifier mon mot de passe ></a>
              </div>

           </section>
            
        </div>

        <form action="/art-public-mtl/api/compte/modifierPW" id="form" method="post">
            <div class='cacher teste'>
                <div>
                    <input type="hidden" value='<?php echo $password; ?>' name='oldPW' id='oldPW'>
                </div>
                <div>
                    <label class="txtBtn"for="">Nouveau mot de passe :</label>
                    <input class="inputText" type="password" value='' name='newPW' id="newPW">   
                    <p id="msgErreurRegex"></p>
                </div>
                <div>
                    <label class="txtBtn" for="">Confirmer le nouveau mot de passe :</label>
                    <input  class="inputText" type="password" value='' name='confirmNewPW' id='confirmNewPW'>
                    <p id="msgErreurConfirm"></p>
                </div>
                <div id=btns_form class="btns_form">
                    <input class="btn annuler" type="button" id="annuler" value="Annuler">
                    <input class="btn" type="button" id="modifier" value="Modifier">
                </div>
            </div>
        </form>
    </div>
    <div class="mesDonnes">
      <div class="autresInfos">
        <h2>AUTRES INFOS</h2>
        <section class="infoPerso elmt">
            <p class="txtBtn">Adresse mail : </p>
            <p><?php echo $courriel; ?></p>
        </section>
      </div>
    </div>
            <form class="deco" id='deconnexion' action="/art-public-mtl/api/compte/deconnexion" method="post">	
                <div>
                    <input type="submit" id="envoyer" value="Déconnexion" class="btn">
                </div>		
            </form>

</section>