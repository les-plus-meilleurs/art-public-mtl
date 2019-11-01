﻿<?php
/**
 * Class Oeuvre
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2014-09-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 * 
 * 
 */
class Oeuvre extends Modele {	
     
	const TABLE_OEUVRE = "oeuvre";
	const TABLE_LIAISON_ARTISTE_OEUVRE = "artiste_oeuvre";
	const TABLE_OEUVRE_DONNEES_EXTERNES = "apm__oeuvre_donnees_externes";
	const TABLE_LIAISON_OEUVRE_CATEGORIE = "categorie_oeuvre";
	const TABLE_CATEGORIE = "categorie";
	const TABLE_IMAGE = "ref_image";
	const TABLE_LIAISON_OEUVRE_SOUSCATEGORIE = "sous_categorie_oeuvre";
	const TABLE_SOUSCATEGORIE = "sous_categorie";
	const TABLE_FAVORIS = "favoris";
	const TABLE_A_VISITER = "a_visiter";
	const TABLE_VOTE = "vote";
	

    //----------------------------------------------------GET----------------------------------------------------------//

	/**
	 * Retourne la liste des oeuvres
	 * @access public
	 * @return Array
	 * @TODO Modifier le query afin de tenir compte des oeuvres à plusieurs artistes.
	 */
	public function getListe() 
	{
        
		$res = Array();
		$query = "	SELECT Oeu.*, ART.*, i.NoImage, F.id_user as favoris, V.id_user as aVisiter FROM ". self::TABLE_OEUVRE ." Oeu 
					inner join ". self::TABLE_LIAISON_ARTISTE_OEUVRE ." O_A ON Oeu.id_oeuvre = O_A.id_oeuvre
					"//left join ". self::TABLE_OEUVRE_DONNEES_EXTERNES ." OD_EXT ON Oeu.id = OD_EXT.id_oeuvre
                    ."inner join ". Artiste::TABLE_ARTISTE ." ART ON ART.id_artiste = O_A.id_artiste
                    LEFT JOIN ". self::TABLE_IMAGE ." i ON Oeu.id_oeuvre = i.NoInterne
                    LEFT JOIN ". self::TABLE_FAVORIS ." F ON Oeu.id_oeuvre = F.id_oeuvre
                    LEFT JOIN ". self::TABLE_A_VISITER ." V ON Oeu.id_oeuvre = V.id_oeuvre
					order by Oeu.Titre ASC
                ";

//		echo $query;
		//SELECT * FROM `apm__oeuvre` Oeu inner join apm__oeuvre_artiste O_A ON Oeu.id = O_A.id_oeuvre
		if($mrResultat = $this->_db->query($query))
		{
			while($oeuvre = $mrResultat->fetch_assoc())
			{
				$oeu = end($res);
				
				if(isset($oeu) && $oeu['id_oeuvre'] != $oeuvre['id_oeuvre'])
				{
					
					$oeuvre['Artistes'] = Array();
					$oeuvre['Artistes'][] = Array	(	"id_artiste"=> $oeuvre['id_artiste'], 
														"Nom"=> $oeuvre['Nom'],
														"Prenom"=> $oeuvre['Prenom'],
														"NomCollectif"=> $oeuvre['NomCollectif']
													);
					unset($oeuvre['id_artiste']);
					unset($oeuvre['Nom']);
					unset($oeuvre['Prenom']);
					unset($oeuvre['NomCollectif']);
					
					$res[] = $oeuvre;
				}
				else if(isset($oeu) && $oeu['id_oeuvre'] == $oeuvre['id_oeuvre'])
				{
					$i = count($res)-1;
					$res[$i]['Artistes'][] = Array	(	"id_artiste"=> $oeuvre['id_artiste'], 
														"Nom"=> $oeuvre['Nom'],
														"Prenom"=> $oeuvre['Prenom'],
														"NomCollectif"=> $oeuvre['NomCollectif']
													);
				}
				
				  
			}
		}
		return $res;
    }

    public function getListeFiltre($filtres) 
	{
		$res = Array();
		$query = "SELECT O.id_oeuvre as id FROM ". self::TABLE_OEUVRE ." O 
                    LEFT JOIN ". self::TABLE_LIAISON_OEUVRE_SOUSCATEGORIE ." SC ON O.id_oeuvre=SC.id_oeuvre
                    LEFT JOIN ". self::TABLE_SOUSCATEGORIE ." S ON SC.id_sous_categorie=S.id_sous_categorie 
                   LEFT JOIN ". self::TABLE_A_VISITER ." Vi ON O.id_oeuvre=Vi.id_oeuvre
                   LEFT JOIN ". self::TABLE_FAVORIS ." F ON O.id_oeuvre=F.id_oeuvre
                   LEFT JOIN ". self::TABLE_VOTE ." Vo ON O.id_oeuvre=Vo.id_oeuvre ";
        if(isset($filtres)){
            if(isset($filtres["type"]) && !empty($filtres["type"])){
                $listeId="";
                $query.= "WHERE SC.id_sous_categorie IN (";
                foreach($filtres["type"] as $type){
                    //var_dump($type);
                    $listeId.= $type.",";
                }
                $listeId=substr($listeId, 0, -1);
                $query.=$listeId.")";
            }
            if(isset($filtres["arrondissement"]) && !empty($filtres["arrondissement"])){
                $listeArrond="";
                if(!empty($filtres["type"])){
                    $query.=" AND O.Arrondissement IN (";
                }else{
                    $query.="WHERE O.Arrondissement IN (";
                }
                
                foreach($filtres["arrondissement"] as $arrond){
                    //var_dump($arrond);
                    $listeArrond.="'".$arrond."',";
                }
                $listeArrond=substr($listeArrond, 0, -1);
                $query.=$listeArrond.")";
            }
            
 
           
        }

            if($mrResultat = $this->_db->query($query))
            {
                while($categorie = $mrResultat->fetch_assoc())
                {
                    $res[] = $categorie;
                }
                
            }
             //var_dump($query);
		return $res;
	}
	
	/**
	 * Récupère une oeuvre avec son id
	 * @access public
	 * @param int $id Identifiant de l'oeuvre
	 * @return Array
	 */

	public function getLocalisations1(){
		$res = Array();
		// $query= "SELECT CoordonneeLatitude, CoordonneeLongitude FROM oeuvre";
		$query = "	SELECT * FROM ". self::TABLE_OEUVRE ." Oeu 
		inner join ". self::TABLE_LIAISON_ARTISTE_OEUVRE ." O_A ON Oeu.id_oeuvre = O_A.id_oeuvre
		"//left join ". self::TABLE_OEUVRE_DONNEES_EXTERNES ." OD_EXT ON Oeu.id = OD_EXT.id_oeuvre
		."inner join ". Artiste::TABLE_ARTISTE ." ART ON ART.id_artiste = O_A.id_artiste
		order by Oeu.id_oeuvre ASC
		";

		if($mrResultat = $this->_db->query($query))
		{

			while($oeuvre = $mrResultat->fetch_assoc()){
				array_push($res, $oeuvre);
			}
		}
		return $res;
	}   
	
	public function getLocalisations2(){
		$oOeuvre = new Oeuvre();
		$res = $oOeuvre->getLocalisations1();
		// var_dump($res);
		// ['MARKER 1', 45.5609420, -73.6352330, 4],
		foreach($res as $a => $b){

			// var_dump ($b);
			$contentString .='["'.$b["Titre"].'", ' .$b["CoordonneeLatitude"].', '.$b["CoordonneeLongitude"].", ";
			if (isset($b['Nom'])&&$b['Nom']!=''){
				$contentString .= '"'.$b["Nom"].'", ';
			}
			if ($b['dateCreation']!= 'NULL'){
				$contentString .= substr($b["dateCreation"], 6);
			}
			$contentString .= ", ".$b["id_oeuvre"];			
			$contentString .= "], <br>";
		}
		return $contentString;
		// die;
	}

	public function getOeuvre($id) 
	{
		

        
        $query="SELECT A.Nom as nom, 
        A.Prenom as prenom, 
        A.NomCollectif as nomCollectif, 
        A.Description as description, 
        A.id_artiste as id_artiste, 
        O.Titre as titre, 
        O.id_oeuvre as id_oeuvre, 
        O.NomCollection as nomCollection, 
        O.NomCollectionAng as nomCollectionAng, 
        O.dateCreation as dateCreation,  
        GROUP_CONCAT(M.Nom SEPARATOR ', ') as materiaux, 
        C.Nom as categorie, 
        S.Nom as sous_categorie, 
        O.Dimensions as dimensions,
        O.Arrondissement as arrondissement,
        O.Batiment as batiment,
        O.AdresseCivique  as adresseCivique,
        O.CoordonneeLatitude as coordonneeLatitude ,
        O.CoordonneeLongitude as coordonneeLongitude,
        O.Dimensions as dimensions,
        O.TechniqueAng as techniqueAng,
        i.NoImage,
        O.Technique as technique FROM " . self::TABLE_OEUVRE . " O 
        LEFT JOIN " . self::TABLE_LIAISON_ARTISTE_OEUVRE . " AO ON O.id_oeuvre = AO.id_oeuvre 
        LEFT JOIN artiste A ON A.id_artiste = AO.id_artiste
        LEFT JOIN materiaux_oeuvre MO ON O.id_oeuvre = MO.id_oeuvre 
        LEFT JOIN materiaux M ON M.id_mat = MO.id_materiaux
        LEFT JOIN categorie_oeuvre CO ON O.id_oeuvre=CO.id_oeuvre
        LEFT JOIN categorie C ON C.id_categorie=CO.id_categorie
        LEFT JOIN sous_categorie_oeuvre SC ON O.id_oeuvre=SC.id_oeuvre
        LEFT JOIN sous_categorie S ON SC.id_sous_categorie=S.id_sous_categorie
        LEFT JOIN ". self::TABLE_IMAGE ." i ON O.id_oeuvre = i.NoInterne
        WHERE O.id_oeuvre=$id";


		if($mrResultat = $this->_db->query($query))
		{
            $res = $mrResultat->fetch_assoc();
			
		}
        

		return $res;
        
	}

     
    //get toutes les infos de l'oeuvres uniquement avec son ID
     // @author Fred
        public function getOeuvreByID($id)
        {
            $request="SELECT * FROM oeuvre WHERE id_oeuvre='$id'";
            $result = $this->_db->query($request);

            if ($result !== FALSE) 
            {
                $infoTitre = $result->fetch_assoc();
                return $infoTitre;              

            } 
        }

    
        // @author Fred
        public function getCategorie(){
            
  		$res = Array();
		$query ="SELECT nom FROM categorie";
		if($mrResultat = $this->_db->query($query))
		{
			while($categorie = $mrResultat->fetch_assoc())
			{
				foreach($categorie as $cle=> $valeur)
				{
					$categorie[$cle] = (utf8_decode($valeur));
				}
				$res[] = $categorie;
			}
		}
		return $res;   
        }
    
        // @author Fred
        public function getSousCategorie(){
            
  		$res = Array();
		$query ="SELECT nom FROM sous_categorie";
		if($mrResultat = $this->_db->query($query))
		{
			while($souscat = $mrResultat->fetch_assoc())
			{
				foreach($souscat as $cle=> $valeur)
				{
					$souscat[$cle] = (utf8_decode($valeur));
				}
				$res[] = $souscat;
			}
		}
		return $res;   
        }
    
        // @author Fred
        public function getArrondissement()
        {
            
       	$res = Array();
		$query ="SELECT DISTINCT Arrondissement FROM oeuvre";
		if($mrResultat = $this->_db->query($query))
		{
			while($arron = $mrResultat->fetch_assoc())
			{
				foreach($arron as $cle=> $valeur)
				{
					$arron[$cle] =(utf8_decode($valeur));
				}
				$res[] = $arron;
			}
		}
		return $res;   
        }


	
	/**
	 * Récupère les oeuvres avec l'id d'un artiste
	 * @access public
	 * @param int $id Identifiant de l'artiste
	 * @return Array
	 */
	public function getOeuvresParArtiste($id) 
	{
		$res = Array();
		$query = "	SELECT * FROM ". self::TABLE_OEUVRE ." Oeu 
                    inner join ". self::TABLE_LIAISON_ARTISTE_OEUVRE ." O_A ON Oeu.id_oeuvre = O_A.id_oeuvre
                    LEFT JOIN ". self::TABLE_IMAGE ." i ON Oeu.id_oeuvre = i.NoInterne
                    where id_artiste=". $id;
                    	
		if($mrResultat = $this->_db->query($query))
		{
			while($oeuvre = $mrResultat->fetch_assoc())
			{
				$res[] = $oeuvre;
			}
		}
		return $res;
	}
    
    
    
    
    
	
	// ---------------------------------------------SUPPRIMER OEUVRE---------------------------------------
	   // @author Fred
    // supprime l'oeuvre dans la table oeuvre
        public function SupprimerOeuvreByID($id)
        {
            $id=$this->filtre($id);
            
            $request="DELETE FROM oeuvre WHERE id_oeuvre='$id'";
            $result = $this->_db->query($request);
            
            if ($result !== FALSE) 
            {
                return true;              
            } 
        }
    
    
    // @author Fred
     // supprime le lien artiste oeuvre
        public function SupprimerLienArtisteOeuvre($id){
            
            $id=$this->filtre($id);
            
            $request="DELETE FROM artiste_oeuvre WHERE id_oeuvre='$id'";
            $result = $this->_db->query($request);
            
            if ($result !== FALSE) 
            {
                return true;              
            } 
        }
    
    // @author Fred
    // supprime le lien materiaux oeuvre
    public function SupprimerLienMateriauxOeuvre($id){
            
            $id=$this->filtre($id);
            
            $request="DELETE FROM materiaux_oeuvre WHERE id_oeuvre='$id'";
            $result = $this->_db->query($request);
            
            if ($result !== FALSE) 
            {
                return true;              
            } 
        }
    
    // @author Fred
    // supprime le lien catégorie oeuvre
    public function SupprimerLienCategorieOeuvre($id){
            
            $id=$this->filtre($id);
            
            $request="DELETE FROM categorie_oeuvre WHERE id_oeuvre='$id'";
            $result = $this->_db->query($request);
            
            if ($result !== FALSE) 
            {
                return true;              
            } 
        }
    
    // @author Fred
    // supprime le lien sous catégorie et oeuvre
    public function SupprimerLienSousCategorieOeuvre($id){
            
            $id=$this->filtre($id);
            
            $request="DELETE FROM sous_categorie_oeuvre WHERE id_oeuvre='$id'";
            $result = $this->_db->query($request);
            
            if ($result !== FALSE) 
            {
                return true;              
            } 
        }
    
        // @author Fred
    // supprime le lien parcours et oeuvre (supprime l'oeuvre du parcours)
    public function SupprimerLienParcousOeuvre($id){
            
            $id=$this->filtre($id);
            
            $request="DELETE FROM parcours_oeuvre WHERE id_oeuvre='$id'";
            $result = $this->_db->query($request);
            
            if ($result !== FALSE) 
            {
                return true;              
            } 
        }
    
    
    
    
    
    
    // ---------------------------------------------MODIFIER OEUVRE-----------------------------------------------
    // @author Fred
    // Modifie l'oeuvre dans la table oeuvre
    public function modifierOeuvre($array, $array2){
    
    //filtre tous les elements du tableau
    $ID=$this->filtre($array["ID"]);
    $Titre=$this->filtre($array["titre"]);
    $NomCollection=$this->filtre($array["nomCollection"]);
    $NomCollectionAng=$this->filtre($array["nomCollectionAng"]);
    $Technique=$this->filtre($array["technique"]);
    $TechniqueAng=$this->filtre($array["techniqueAng"]);
    $Dimensions=$this->filtre($array["dimensions"]);
    $Arrondissement=$this->filtre($array["arrondissement"]);
    $Batiment=$this->filtre($array["batiment"]);
    $AdresseCivique=$this->filtre($array["adresseCivique"]);
    $CoordonneeLatitude=$this->filtre($array2["lat"]);
    $CoordonneeLongitude=$this->filtre($array2["lon"]);
    $dateCreation=$this->filtre($array["dateCreation"]);
        
        //si les conditions des champs sont bien respectés
        if(is_numeric($ID) && is_numeric($CoordonneeLatitude) && is_numeric($CoordonneeLongitude) && is_string($Technique) && is_string($TechniqueAng) && is_string($NomCollection) && is_string($NomCollectionAng)){
                
                //requete
                $request="UPDATE oeuvre
                        SET Titre = '$Titre', NomCollection ='$NomCollection', NomCollectionAng='$NomCollectionAng',Technique='$Technique', TechniqueAng='$TechniqueAng', Dimensions='$Dimensions', Arrondissement='$Arrondissement', Batiment='$Batiment', AdresseCivique='$AdresseCivique', CoordonneeLatitude='$CoordonneeLatitude', CoordonneeLongitude='$CoordonneeLongitude', dateCreation= '$dateCreation'
                        WHERE id_oeuvre='$ID';";
    
                        //execute requete
                        $result = $this->_db->query($request);
                        //var_dump($result);
                        if ($result !== FALSE) 
                        {
                            return true;              
                        }
                        else 
                        {
                            return "wrong code";
                        }
            }
        //si conditions non respectés refresh la page et msg erreur
        else
        {
            header("Location: /art-public-mtl/api/admin/oeuvre/".$ID."/modifier");
            echo "Veuillez vérifiez vos champs. Vous ne pouvez entrez des caractères dans les coordonnées ou des chiffres dans les techniques !";
        }
        

        }
    
    
    // @author Fred
    // ajoute un matériaux s'il n'existe pas, puis link mat a l'oeuvre, sinon link l'existant a l'oeuvre
    public function modifierMateriaux($array){
        
       
    // recup ID oeuvre modifié
        $ID = $this->filtre($array["ID"]);
        //reset le tableau intermediaire pour l'oeuvre en question
        $request = "DELETE FROM materiaux_oeuvre WHERE id_oeuvre='$ID'";
        $result = $this->_db->query($request);
        
        
        // separe les matériaux ajoutés
        $materiaux=explode (", ", $this->filtre($array["materiaux"]));
        //compte le nombre de matériaux
        $n=count($materiaux);
        if($n==0){
            return true;
        }
        //boucle dans le tableau de materiaux
        for ($i = 0; $i < $n; $i++) {
            //on associe a value un mat du tableau
             $value = $materiaux[$i];
            //verifie si le tableau existe deja
            $request = "SELECT * FROM materiaux WHERE Nom='$value'";
            $result = $this->_db->query($request);
            $rows=$result->num_rows;
            $exist=$result->fetch_assoc();
            //s'il existe alors ne pas l'ajouté
            if ($rows>0) {
                //verifie si le lien existe entre l'oeuvre et le materiau
                $id_mat=$exist["id_mat"];
                $request = "SELECT * FROM materiaux_oeuvre WHERE id_oeuvre='$ID' and id_materiaux='$id_mat'";
                $result = $this->_db->query($request);
                $rows=$result->num_rows;
                //si le lien existe pas alors return
                if($rows==0){
                    //si le lien n'existe pas , on le crée
                    $request = "INSERT INTO materiaux_oeuvre(id_materiaux, id_oeuvre) VALUES($id_mat, $ID)";
                    $result = $this->_db->query($request); 
                }
            //sinon ajouté le matériaux dans la table matériaux.
            }else{
                $request = "INSERT INTO materiaux(Nom) VALUES('$value')";
               
                // si le matériau a bien été ajouté, on add les liens dans la table intermédiaire. (+ recup dernier ID crée dans la table matériaux.)
                if( $result = $this->_db->query($request)){
                     $request = "INSERT INTO materiaux_oeuvre(id_materiaux, id_oeuvre) VALUES((SELECT MAX(id_mat) FROM materiaux), $ID)";
                    $result = $this->_db->query($request);
                }
            }
        }
        return true;
    }
    
    
        
    // @author Fred
    // modifie la catégorie de l'oeuvre
    public function modifierCat($array){
    // recup ID oeuvre modifié
        $ID = $this->filtre($array["ID"]);
        $categorie = $this->filtre($array["categorie"]);

            //verifie si le tableau existe deja
            $request = "SELECT * FROM categorie WHERE Nom='$categorie'";
            $result = $this->_db->query($request);
            $rows=$result->num_rows;
            $exist=$result->fetch_assoc();
        
            //s'il existe alors update
            if ($rows>0) {
                //verifie si le lien existe entre l'oeuvre et la categorie
                $id_cat=$exist["id_categorie"];
                $request = "UPDATE categorie_oeuvre
                SET id_oeuvre = '$ID', id_categorie = '$id_cat'
                WHERE id_oeuvre = '$ID'";
                $result = $this->_db->query($request);
                }
            //sinon msg erreur.
            else{
                echo "erreur";
                }
        return true;
            
        }
    
        // @author Fred
    // modifie la sous catégorie de l'oeuvre
    public function modifierSousCat($array){
    // recup ID oeuvre modifié
        $ID = $this->filtre($array["ID"]);
        $sous_categorie = $this->filtre($array["sousCategorie"]);
            //verifie si le tableau existe deja
            $request = "SELECT * FROM sous_categorie WHERE Nom='$sous_categorie'";
            $result = $this->_db->query($request);
            $rows=$result->num_rows;
            $exist=$result->fetch_assoc();

            //s'il existe alors update
            if ($rows>0) {
                //verifie si le lien existe entre l'oeuvre et la categorie
                $id_sous_cat=$exist["id_sous_categorie"];
                $request = "UPDATE sous_categorie_oeuvre
                SET id_oeuvre = '$ID', id_sous_categorie = '$id_sous_cat'
                WHERE id_oeuvre = '$ID'";
                $result = $this->_db->query($request);
                }
            //sinon msg erreur.
            else{
                echo "erreur";
                }
      return true;
        }
    
      // ---------------------------------------------AJOUTER OEUVRE-----------------------------------------------
    // @author Fred
    // ajoute une oeuvre dans le form AJOUT
    public function ajoutOeuvre($array, $array2){
    
        //filtre tous les elements du tableau
        $Titre=$this->filtre($array["titre"]);
        $NomCollection=$this->filtre($array["nomCollection"]);
        $NomCollectionAng=$this->filtre($array["nomCollectionAng"]);
        $Technique=$this->filtre($array["technique"]);
        $TechniqueAng=$this->filtre($array["techniqueAng"]);
        $Dimensions=$this->filtre($array["dimensions"]);
        $Arrondissement=$this->filtre($array["arrondissement"]);
        $Batiment=$this->filtre($array["batiment"]);
        $AdresseCivique=$this->filtre($array["adresseCivique"]);
        $CoordonneeLatitude=$this->filtre($array2["lat"]);
        $CoordonneeLongitude=$this->filtre($array2["lon"]);
        $dateCreation=$this->filtre($array["dateCreation"]);

        
        //si les conditions des champs sont bien respectés
        if(is_numeric($CoordonneeLatitude) && is_numeric($CoordonneeLongitude) && is_string($Technique) && is_string($TechniqueAng) && is_string($NomCollection) && is_string($NomCollectionAng)){
                
                //requete
                $request="INSERT INTO oeuvre (Titre, NomCollection, NomCollectionAng, Technique, TechniqueAng, Dimensions, Arrondissement, Batiment, AdresseCivique, CoordonneeLatitude, CoordonneeLongitude, dateCreation)
                VALUES ('$Titre', '$NomCollection', '$NomCollectionAng', '$Technique', '$TechniqueAng', '$Dimensions', '$Arrondissement', '$Batiment', '$AdresseCivique', '$CoordonneeLatitude', '$CoordonneeLongitude', '$dateCreation')";
    
                //execute requete
                $result = $this->_db->query($request);
                //var_dump($result);
                if ($result !== FALSE) 
                {
                    return true;              
                }
                else 
                {
                    return "wrong code";
                }
            }
        //si conditions non respectés refresh la page et msg erreur
        else
        {
            header("Location: /art-public-mtl/api/admin/oeuvre/ajout");
            echo "Veuillez vérifiez vos champs. Vous ne pouvez entrez des caractères dans les coordonnées ou des chiffres dans les techniques !";
        }
        

    }
    
    
    
        // @author Fred
    // ajoute les materiaux pour la derniere oeuvre créée
    public function ajoutMateriaux($array){
        
        
        
        // separe les matériaux ajoutés
        $materiaux=explode (", ", $this->filtre($array["materiaux"]));
        //compte le nombre de matériaux
        $n=count($materiaux);
        if($n==0){
            return true;
        }
        //boucle dans le tableau de materiaux
        for ($i = 0; $i < $n; $i++) {
            //on associe a value un mat du tableau
             $value = $materiaux[$i];
            //verifie si le tableau existe deja
            $request = "SELECT * FROM materiaux WHERE Nom='$value'";
            $result = $this->_db->query($request);
            $rows=$result->num_rows;
            $exist=$result->fetch_assoc();
            //s'il existe alors ne pas l'ajouté
            if ($rows>0) {
                // faire le lien entre le mat existant et l'oeuvre créée
                $id_mat=$exist["id_mat"];
                //requete d'ajout dans la table mat oeuvre
                $request = "INSERT INTO materiaux_oeuvre(id_materiaux, id_oeuvre) VALUES($id_mat, (SELECT MAX(id_oeuvre) FROM oeuvre))";
                $result = $this->_db->query($request); 
            //sinon ajouté le matériaux dans la table matériaux.
            }else{
                $request = "INSERT INTO materiaux(Nom) VALUES('$value')";
               
                // si le matériau a bien été ajouté, on add les liens dans la table intermédiaire. (+ recup dernier ID crée dans la table matériaux.)
                if( $result = $this->_db->query($request)){
                     $request = "INSERT INTO materiaux_oeuvre(id_materiaux, id_oeuvre) VALUES((SELECT MAX(id_mat) FROM materiaux), (SELECT MAX(id_oeuvre) FROM oeuvre))";
                    $result = $this->_db->query($request);
                }
            }
        }
        return true;
    }
    
   // @author Fred
    // ajoute la cat + lien dans le form Ajout Oeuvre
    public function ajoutCat($array){
        
            // recup categorie del'oeuvre ajoutée
            $categorie = $this->filtre($array["categorie"]);

            //verifie si le tableau existe deja
            $request = "SELECT * FROM categorie WHERE Nom='$categorie'";
            $result = $this->_db->query($request);
            $rows=$result->num_rows;
            $exist=$result->fetch_assoc();
        
            //s'il existe alors update
            if ($rows>0) {
                //verifie si le lien existe entre l'oeuvre et la categorie
                $id_cat=$exist["id_categorie"];
                $request = "INSERT INTO categorie_oeuvre(id_oeuvre, id_categorie)
                VALUES((SELECT MAX(id_oeuvre) FROM oeuvre), '$id_cat')";
                $result = $this->_db->query($request);
                }
            //sinon msg erreur.
            else{
                echo "erreur";
                }
        return true;
            
        }
    
       // @author Fred
    // ajoute la sous cat + lien dans le form Ajout Oeuvre
    public function ajoutSousCat($array){
        
            // recup categorie del'oeuvre ajoutée
            $sous_categorie = $this->filtre($array["sousCategorie"]);

            //verifie si le tableau existe deja
            $request = "SELECT * FROM sous_categorie WHERE Nom='$sous_categorie'";
            $result = $this->_db->query($request);
            $rows=$result->num_rows;
            $exist=$result->fetch_assoc();
        
            //s'il existe alors update
            if ($rows>0) {
                //verifie si le lien existe entre l'oeuvre et la categorie
                $id_sous_cat=$exist["id_sous_categorie"];
                $request = "INSERT INTO sous_categorie_oeuvre(id_oeuvre, id_sous_categorie)
                VALUES((SELECT MAX(id_oeuvre) FROM oeuvre), '$id_sous_cat')";
                $result = $this->_db->query($request);
                }
            //sinon msg erreur.
            else{
                echo "erreur";
                }
        return true;
            
        }
    
    
      // @author Fred 
    // API GOOGLE GEOCODING => on envoie l'adresse et on recoit lat long
    public function getXmlCoordsFromAdress($array)
    {
        $adresseComplete= $this->filtre($array["adresseCivique"]);
        $coords=array();
        $base_url="https://maps.googleapis.com/maps/api/geocode/xml?";
        // ajouter &region=FR si ambiguité (lieu de la requete pris par défaut)
        $request_url = $base_url . "address=" . urlencode($adresseComplete).'&sensor=false&key=AIzaSyDnHiKY4EfV1GMVgQR48AMJsfVnJWilVSE';
        $xml = simplexml_load_file($request_url) or die("url not loading");
        //print_r($xml);
        $coords['lat']=$coords['lon']='';
        $coords['status'] = $xml->status ;
        if($coords['status']=='OK')
        {
            $coords['lat'] = $xml->result->geometry->location->lat ;
            $coords['lon'] = $xml->result->geometry->location->lng ;
        }
        return $coords;
    }
    
    
    
    // author Fred 
    // filtre qui empeche les injections sql/ XSS
    function filtre($variable)
    {
        $varFiltre = $this->_db->real_escape_string($variable);
        $varFiltre=htmlspecialchars($varFiltre);
        //ici, on pourrait appliquer d'autres filtres.... (ex: strip_tags qui enlèverait les tags HTML dans un texte...)
        return $varFiltre;
    }
}
	





?>