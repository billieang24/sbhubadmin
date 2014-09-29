<?php //-->

class Orders extends Eden_Class {
	protected $_database = NULL;
	
	public function __construct(Eden_Sql_Database $database) {
		$this->_database = $database;
	}
	
	public function create($lname, $fname, $mi, $address, $ig, $fb, $mod, $dop) {
		$this->_database
			->model()
			->setCustLname($lname)
			->setCustFname($fname)
			->setCustMi($mi)
			->setCustAddress($address)
			->setCustIg($ig)
			->setCustFb($fb)
			->setCustMod($mod)
			->setCustDop($dop)
			->save('orders');
		
		return $this;
	}
	
	public function getList() {
		return $this->_database
			->search('orders')
			->getRows();
	}
	
	// public function getDetail($id) {
	// 	return $this->_database->getRow('user', 'user_id', $id);
	// }

	// public function getDetailByUid($uid) {
	// 	return $this->_database->getRow('user', 'uid', $uid);
	// }
	
	// public function update($id, $name, $email) {
	// 	$this->_database
	// 		->model()
	// 		->setUserId($id)
	// 		->setUserName($name)
	// 		->setUserEmail($email)
	// 		->save('user');
		
	// 	return $this;
	// }
	
	// public function remove($id) {
	// 	$this->_database
	// 		->model()
	// 		->setUserId($id)
	// 		->remove('user');
		
	// 	return $this;
	// }
}