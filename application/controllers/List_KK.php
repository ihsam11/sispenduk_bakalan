<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Author: Muhammad Ikhsan
 	Since 07/10/2020
 */
class List_KK extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master');
	}

	public function index() {
		$page = array(
			'title' 	=> 'List Pengajuan KK',
			'page_title'=> 'List Pengajuan KK',
			'page_content' => $this->load->view('list_kk/index', '', TRUE)
		);

		$this->parser->parse('template', $page);
	}

	public function set_forms() {
		$forms = [
			$this->load->view('list_kk/create/form_jenis_kk', '', TRUE),
			$this->load->view('list_kk/create/form_kepala_keluarga', $this->get_formdata(1), TRUE),
			$this->load->view('list_kk/create/form_keluarga', '', TRUE)
		];

		return $forms;
	}

	public function create() {				
		$data['forms'] = $this->set_forms();

		$page = array(
			'title' 	=> 'Pengajuan Baru',
			'page_title'=> 'Pengajuan Baru',
			'page_content' => $this->load->view('list_kk/create/create', $data, TRUE)
		);

		$this->parser->parse('template', $page);
	}	

	public function get_formdata($form = 0) {
		if ($form == 1) {
			$data['satuan_wilayah'] = $this->master->get_satuan_wilayah()->result();		
			
		}
		else if ($form == 2) {
			$data = array(
				'pekerjaan'	=> $this->master->get_pekerjaan()->result(),
				'pendidikan'=> $this->master->get_pendidikan()->result(),
				'golongan_darah' => $this->master->get_golongan_darah()->result(),
				'agama' => $this->master->get_agama()->result(),
				'status_nikah' => $this->master->get_status_nikah()->result(),
				'hubungan_keluarga' => $this->master->get_hubungan_keluarga()->result(),
				'jenis_cacat' => $this->master->get_jenis_cacat()->result()
			);
		}
		else {
			$data  =  "invalid form";
		}

		return $data;
	}

	public function get_dusun() {
		$id_wilayah = $_POST['id'];		
		$dusun = array (
			'count_rt' => $this->master->get_dist_rt($id_wilayah)->result(),
			'count_rw' => $this->master->get_dist_rw($id_wilayah)->result()
		);
		echo json_encode($dusun);
	}

	public function detail_modal() {		
		$data['count'] = $_POST['count'];
		$data = array_merge($data, $this->get_formdata(2));		
		$modal = $this->load->view('list_kk/create/detail_modal', $data, TRUE);
		echo $modal;
		
	}
}