<?php defined('BASEPATH') OR exit('Tidak diijinkan');

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Hitung extends REST_Controller
{
	
	function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->helper('url','form');
	}

	function kali_post() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('v1', 'Variabel 1', 'required|integer');
		$this->form_validation->set_rules('v2', 'Variabel 2', 'required|integer');
		if ($this->form_validation->run()) {
			$data['v1'] 	= (int)$this->input->post('v1', true);
			$data['v2'] 	= (int)$this->input->post('v2', true);
			$data['hasil']  = $data['v1']*$data['v2'];
		} else {
			$data['v1'] 	= 0;
			$data['v2'] 	= 0;
			$data['hasil']  = 0;
		}

		$this->response($data, 200);
	}

	function bagi_post() {
		$data['v1']		= (int)$this->input->post('v1',true);
		$data['v2']		= (int)$this->input->post('v2',true);
		if ($data['v2' && 'v1']>0) {
			$data['hasil'] = $data['v1']/$data['v2'];
		} else {
			$data['hasil'] = 'Error, angka tidak boleh 0 !';
		}

		$this->response($data, 200);
	}

	function tambah_post() {
		$data['v1']		= (int)$this->input->post('v1',true);
		$data['v2']		= (int)$this->input->post('v2',true);
		$data['hasil']	= $data['v1']+$data['v2'];

		$this->response($data, 200);
	}

	function kurang_post () {
		$data['v1'] 	= (int)$this->input->post('v1',true);
		$data['v2'] 	= (int)$this->input->post('v2',true);
		$data['hasil']  = $data['v1']-$data['v2'];

		$this->response($data, 200);
	}
}