<?php //-->
/*
 * This file is part a custom application package.
 */

/**
 * Default logic to output a page
 */
class Front_Page_Index extends Front_Page {
	/* Constants
	-------------------------------*/
	/* Public Properties
	-------------------------------*/
	/* Protected Properties
	-------------------------------*/
	protected $_title = 'Style and Beauty Hub';
	protected $_class = 'index';
	protected $_template = '/order.phtml';
	
	/* Private Properties
	-------------------------------*/
	/* Magic
	-------------------------------*/
	/* Public Methods
	-------------------------------*/
	public function render() {
		$orders = front()->orders()->getList();
		$this->_body['orders'] = $orders;
		return $this->_page();
	}	
	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}