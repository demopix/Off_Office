<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

	/**
	 * Page d'affichage du pdf genere et insert in db + lien pour vers server location du pdf enregistrer ex; http://offoffice/eclient/clientname39409/ymd-hms-docname.pdf rule -> user || employe || admin
	 */
	public function e_login()
	{

		//
		$this->show('backoffice_view/e_login');
	}




/**
	 * Page Employer ajouter nouveau client ou nouveau employe
	 */
	public function employ_add()
	    {
	    	echo 'Employe add client ou admin add all types';
	        //traiter le form de insertion de client   ici...
	        //
	        $this->show('backoffice_view/user_add');
	    } // end add user #######################################################################
	    public function employ_delete()
	    {
	    	echo 'delete';
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //$this->show('open_view/client_details');
	    }
    
}