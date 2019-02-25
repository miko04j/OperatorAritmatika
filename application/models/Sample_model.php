<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_model extends My_Model {

	public function __construct(){
        parent::__construct();
        $this->set_table_name('sample_table');
    }
    

}
