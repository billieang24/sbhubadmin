<?php //-->

class Transactions extends Eden_Class {
	protected $_database = NULL;
	
	public function __construct(Eden_Sql_Database $database) {
		$this->_database = $database;
	}
	
	public function create() {
		// $this->_database
		// 	->model()
		// 	->setCustLname($lname)
		// 	->setCustFname($fname)
		// 	->setCustMi($mi)
		// 	->setCustAddress($address)
		// 	->setCustIg($ig)
		// 	->setCustFb($fb)
		// 	->setCustMod($mod)
		// 	->setCustDop($dop)
		// 	->save('orders');
		
		return $this;
	}
	
	// public function getList($start, $end) {
	// 	return $this->_database
	// 		->search('user')
	// 		->innerJoinOn('freetime','user_id=freetime_user')
	// 		->leftJoinOn('booked','booked_freetime=freetime_id')
	// 		->addFilter('booked_freetime is null')
	// 		->addFilter('(freetime_start between \''.$start.'\' and \''.$end.'\')'.
	// 			' and (freetime_end between \''.$start.'\' and \''.$end.'\')')
	// 		->setGroup('user_id')
	// 		->getRows();
	// }
	
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