<?php

namespace Controller;

use \W\Controller\Controller;

class OpenController extends Controller
{

	/**
	 * Page d'accueil home -> rule pulbic
	 */
		public function home()
		{
			$this->show('open_view/homev');
		}


	/**
	 * Page visualisé et modifié les information client rule -> user || employe || admin
	 */

     	public function client_details()
	    {
	    	echo 'Details de client et update ';
	        //traiter les details de client avec placeholder get details de la base de données updade  ici...
	        //$this->show('open_view/c_detailsv');
	    
		}

	        /**
	 * Page Planning rule -> user || employe || admin
	 */
    	public function claim_add()
	    {
	    	//echo 'renseignement d\'une sinistre';
	        //traiter le formulaire options upload img pdf ou champ texte obs; ajouter info client apartir de la db 
	        $contract = $stm->fetch();
		//echo $contract['contract_dir'];
		//echo $contract['user_lname'].'<br>';
		//print_r($contract);


$dossier = 'eclient/'.$contract['contract_dir']; 
$fichier = date('Ymd').'-'.$contract['user_lname'].basename($_FILES['avatar']['name']);
$taille_maxi = 1000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.doc','.pdf','.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//érifications de sécurité
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur,  upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
	        //$this->show('open_view/claim_addv');
	    }

	/**
	 * Page Espace de Client après login authorisé le access ; doc_request, e_client, claim_add
	rule -> user || employe || admin
	 */
    	public function e_client()
	    {
	    	echo 'Espace de Client et cancel un demande de sinistre ';
	        //traiter le formulaire login ici...
	        //$this->show('open_view/e_clientv');
	    }


    /**
	 * Demande un document form ajouter les données du client atravers de la db avec 3 checkbox '1= carte gris voiture , 2= home protect 3= copy du contract'  rule -> user || employe || admin
	 */
	    public function doc_request()
	    {
	    	echo 'Demande un document';
	        //traiter le form de demande de doc de client et reevoier au GenController -> methode gen_pdf  ici...
	        //$this->show('open_view/doc_requestv');
	    }


    /**
	 * Page Verification de docs -> rule pulbic
	 */
	    public function verification()
	    {
	    	echo 'Verification de docs publiées ';
	        //traiter le docs client si le doc est valable echo nom client, nº doc , nom doc, date de fin de validité   ici...
	        //$this->show('open_view/verificationv');
	    }


    
    /**
	 * Page signup client -> rule pulbic
	 */
		public function signup()
	    {
	    	echo 'Inscription';
	        //traiter le form de Inscription de client   ici...
	        // avec confirm password
	        //$this->show('open_view/signupv');
	    }
   /**
	 * Page reinstalation de mot de pass client -> rule pulbic
	 */
		public function resetpass()
	    {
	    	echo 'recovery password';
	        //traiter le email de recuperation de mot pass   ici...
	        // avec token créer le champ a la table users et duplique le process pour le controller admin
	        //$this->show('open_view/recoveryv');
	    }
   /**
	 * Page reinstalation de mot de pass client -> rule pulbic
	 */
		public function recoverypass()
	    {
	    	echo 'recovery password';
	        //traiter le form de recuperation de mot pass   ici...
	        // avec confirm password
	        //$this->show('open_view/recoveryv');
	    }
    
    /**
	 * Page Employer delete client = 'status inatif' rule -> user || employe || admin
	 */
    	public function client_delete()
	    {
	    	echo 'delete';
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //$this->show('open_view/client_detailsv');
	    }





}
