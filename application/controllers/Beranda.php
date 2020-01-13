<?php
/*
	Author: Muhammad Ikhsan
	Created on: 06 January 2020
*/	
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();				
	}

	public function index()
	{
		$data = array(
	        'title' 	 => 'Halaman Beranda',
	        'page_title' => 'Halaman Beranda',
	        'content'	 => '<i class="fas fa-plus"></i> Snap'
		);

		$this->parser->parse('template', $data);		
	}
}
