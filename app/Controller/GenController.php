<?php

namespace Controller;

use \W\Controller\Controller;

class GenController extends Controller
{
 		
	/**
	 * Page d'affichage du pdf genere et insert in db + lien pour vers server location du pdf enregistrer ex; http://offoffice/eclient/clientname39409/ymd-hms-docname.pdf rule -> user || employe || admin
	 */
	public function gen_pdf()
	{

		//$this->show('open_view/gen_pdf');
	}


   /**
	 * utiliser la function phpmailler ajouter les parametres ici rule -> user || employe || admin
	 */

    public function forward_pdf()
    {
    	echo 'formulaire envoyer par email';
        //enoyer par email 1 ou plus destinataires ...
        //$this->show('open_view/gen_pdf');
    }

}