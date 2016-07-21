
<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\AdminManager;

class AdminController extends Controller
{

	/**
	 * Page Employer Login 
	 rule -> user || employe || admin
	 */
    public function e_login()
    {
    	$adm = new AdminManager();
		
    $ff= $adm->findAll();
    //debug($_POST['adm_id']);
    debug($ff);
    	echo 'Employer Login';
        //traiter le formulaire login ici...
        //
        $this->show('backoffice_view/e_login');
    } // end Login #######################################################################




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