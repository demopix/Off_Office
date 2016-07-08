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
	    	echo 'renseignement d\'une sinistre';
	        //traiter le formulaire options upload img pdf ou champ texte obs; ajouter info client apartir de la db 
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
