
<?php 
namespace Manager;

class HistoryManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
<<<<<<< HEAD
		$this->setTable();
=======
		$this->setTable('History');
>>>>>>> check-in-Florian
	}

}

