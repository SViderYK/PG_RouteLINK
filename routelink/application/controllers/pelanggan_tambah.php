<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan_tambah extends CI_Controller {

public function index()
	{
		$API = new mixweb();
		$API->connect('203.190.113.62', 'rizal', 'kpugm21');

        $this->load->view('template/main');
		$this->load->view('pelanggan/pelanggan_tambah');
	}
}
?>