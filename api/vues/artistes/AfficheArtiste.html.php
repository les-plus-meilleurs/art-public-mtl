
<?php 
//  var_dump ($aData);
?>
<section class="retour txtLien">
    
        <a href="/art-public-mtl/api/artiste" class="flecheLien">&#10094;</a>
        <a href="javascript:history.back()">Retour</a>
   
</section>
<section class="titre">
    <h1><?php echo $Prenom ." ". $Nom?></h1>
    <p class="description"><?php echo $Description?></p>
</section>
<section class="sesOeuvres">
    <h2>Oeuvres</h2>
        
<?php
//var_dump($aData['oeuvres']);	
foreach ($aData['oeuvres'] as $cle => $oeuvre) {
	extract($oeuvre);
?>
<section class="uneOeuvre">
<?php
    echo "<a href='/art-public-mtl/api/oeuvre/".$id_oeuvre."'>";
?>
    <div class="img" data-img="<?php if(isset($NoImage) && !empty($NoImage)){ echo $NoImage;}else{ echo "default";}?>"></div>
</a>
            <section class="infos">
                <p class="titreDetail artiste"><?php echo $Titre; ?></p>
                <p class="description"><?php echo $Description; ?></p>
                <div class="txtLien">
                    <a href="/art-public-mtl/api/oeuvre/<?php echo $id_oeuvre; ?>">Plus de détails</a>
                    <a href="/art-public-mtl/api/oeuvre<?php echo $id_oeuvre; ?>"class="flecheLien">&#10095;</a>
                </div>
            </section>

</section>

<?php
}


?>
       
 
</section>
	

