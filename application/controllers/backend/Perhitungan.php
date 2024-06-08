<?php
class Perhitungan extends CI_Controller{
/**
* Description of Controller
*
* 
*/	
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login_user');
            redirect($url);
        };
		$this->load->model('backend/Dashboard_model', 'dashboard_model');
		$this->load->model('backend/Download_data_model','download_data_model');
		$this->load->model('Site_model','site_model');
		
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('upload');
	}
	public function index()
	{
		$data['title'] = 'Pajak Penghasilan';
		$site = $this->site_model->get_site_data()->row_array();
        $x['site_title'] = $site['site_title'];
        $x['site_favicon'] = $site['site_favicon'];
        $x['images'] = $site['images'];
		$x['title'] = 'Pajak Penghasilan';

		$this->load->view('backend/menu',$x);
		$this->load->view('backend/v_pajak.php',$data,$x);
		$this->load->view('backend/_partials/templatejs');
		
	}
}
	?>