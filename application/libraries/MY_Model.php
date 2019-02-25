<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    
    private $_tableName = '';

	public function __construct(){
		parent::__construct();
    }
    
    protected function set_table_name($table) {
        $this->_tableName = $table;
    }

}
