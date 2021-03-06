<?php 
namespace Manager;

class UsersManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
		$this->setTable('users');
	}
	/**
	 * Récupère une token de la table en fonction d'un identifiant
	 * @param  string token
	 * @return mixed Les données
	 */
	public function getTok($token)
	{
		

		$sql = "SELECT * FROM " . $this->table . " WHERE user_token = :tok LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":tok", $token);
		$sth->execute();

		return $sth->fetch();
	}

	/**
	 * Récupère une ligne de la table en fonction d'un nº de contract
	 * @param  string name
	 * @return mixed Les données
	 */
	public function findName($search_c)
	{
		

		$sql = "SELECT * FROM " . $this->table . " WHERE contract_num = :search_c LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":search_c", $search_c);
		$sth->execute();

		return $sth->fetch();
	}

	/**
	 * rowCount
	 * @param  string name
	 * @return mixed Les données
	 */
	public function countR($search_c)
	{
		

		$sql = "SELECT * FROM " . $this->table . " WHERE contract_num = :search_c LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":search_c", $search_c);
		$sth->execute();

		return $sth->rowCount();
	}

	 /**
	 * Page Employer delete client = 'status inatif' 'ce methode sera créer au OpenController '
	*/
    public function delete($id)
    {
    	if($id){
        $Usr = new UsersManager();
        $c = $Usr->find($id);



    	echo'vous etes sur que vous voulez effacer de façon définitive le Client: '.$emp['employ_name'];
    	echo' - email: '.$c['employ_email'].' -  role:'.$c['role'];

        //$del = $contractBD->delete($id);	
    	}
      
    	        
    	        //traiter suppression de client   ici...
        //$this->show('backoffice_view/backoffice');
    }


}


