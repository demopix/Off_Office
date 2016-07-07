<?php

namespace Controller;

use \W\Controller\Controller;

class BackOfficeController extends Controller
{

	/**
	 * Page d'accueil Back Office
	 */
		public function backoffice()
		{
			$this->show('backoffice_view/backofficev');
		}

	/**
	 * Page Client Management 
	 */
	    public function c_management()
	    {
	    	echo 'Client Management';
	        //traiter le info client et list de clients  ici...
	        //$this->show('backoffice_view/c_managementv');
	    }

    /**
	 * Page Employer ajouter nouveau contract 
	 */
	    public function contract_add()
	    {
	    	echo 'Employer add client';
	        //traiter le form de insertion de client   ici...
	        //$this->show('backoffice_view/contract_addv');
	    }

	/**
	 * Page Employer Login 
	 */
    public function e_login()
    {
    	echo 'Employer Login';
        //traiter le formulaire login ici...
        //$this->show('backoffice_view/e_loginv');
    }

    
    /**
	 * Page Employer ajouter nouveau client ou nouveau employe
	 */
	public function user_add()
	    {
	    	echo 'Employe add client ou admin add all types';
	        //traiter le form de insertion de client   ici...
	        //$this->show('backoffice_view/user_addv');
	    }
	    


	/**
	 * Page Employer modifié les information client 'ce methode sera créer au OpenController '
	 
     public function client_details()
    {
    	echo 'Details de client et update ';
        //traiter les details de client avec placeholder get details de la base de données updade  ici...
        //$this->show('open_view/c_detailsv');
    }*/

    
    /**
	 * Page Employer delete client = 'status inatif' 'ce methode sera créer au OpenController '
	
    public function client_delete()
    {
    	echo 'Employer Login';
        //traiter suppression de client   ici...
        //$this->show('backoffice_view/client_detailsv');
    }

 */



}