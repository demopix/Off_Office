
<?php 
namespace Manager;

class UsersManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
		$this->setTable('users');
	}

}

