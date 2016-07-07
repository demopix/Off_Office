<?php

namespace Controller;

use \W\Controller\Controller;

class PlanningController extends Controller
{

	 /**
	 * Page Planning rule ->  employe || admin
	 */
    public function planning()
    {
    	echo 'Planning';
        //traiter le formulaire et le exibition du planning ici...
        //$this->show('backoffice_view/planningv');
    }
    



   /**
	 * utiliser l'api google calender ajouter new task rule ->  employe || admin
	 */

    public function task_add()
    {
    	echo 'form insert task';
        //enoyer par email 1 ou plus destinataires ...
        //$this->show('open_view/planningv');
    }
     /**
	 * Page Employer delete client = 'status inatif' rule ->  employe || admin
	 */
	public function task_delete()
    {
    	echo 'delete';
        //traiter suppression de tache par le employer author ou admin  ici...
        //$this->show('open_view/planningv');
    }

}