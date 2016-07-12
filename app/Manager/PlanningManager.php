
<?php 
namespace Manager;

class PlanningManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
		$this->setTable('planning');
	}

}

