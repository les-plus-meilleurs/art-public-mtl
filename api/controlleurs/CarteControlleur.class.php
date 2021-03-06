<?php
/**
 * Class Controler
 * Gère les requêtes HTTP
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2016-03-03
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 */
 
 /*
 * TODO : Commenter selon les standards du département.
 *
 */ 
 
class CarteControlleur extends Controlleur 
{
	// GET : 
	// 		/oeuvre/ - Liste des oeuvres
	// 		/oeuvre/{id}/ - Une oeuvre
	// 		/oeuvre/?q=nom,arrond,etc&valeur=chaineDeRecherche
	
	public function getAction(Requete $requete)
	{
//        var_dump($_SESSION['id']);
     
        
        $types=array();
		$res = array();
		//var_dump($requete->url_elements);
		 if	(isset($requete->url_elements[0]) && $requete->url_elements[0]=='carte')// page de la carte
        {
			$res = $this->getListeOeuvre();
        }
		
		if(isset($_GET['json']))
		{
			echo json_encode($res);	
		}
		else
		{			
			$oVue = new Vue();
			$oVue->afficheEntete("carte");			
			$oVue->afficheCarte($res);
			$oVue->affichePied();			
		}		
	}	

	protected function getListeOeuvre()
	{
		
		$oOeuvre = new Oeuvre();
		$aOeuvre = $oOeuvre->getListe();

		return $aOeuvre;
	}
	
	
	
	public function postAction(Requete $requete)
    {
		if(!empty($_POST)){
			echo "POST";
		}         
	}
}
?>