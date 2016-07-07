
<?php 
namespace Manager;

class ClaimsManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
<<<<<<< HEAD
		$this->setTable();
=======
		$this->setTable('Claims');
>>>>>>> check-in-Florian
	}

}

