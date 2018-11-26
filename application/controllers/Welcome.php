<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->lang->load('information',$this->session->userdata('site_lang'));
        $this->data['categories'] = $this->Categorie_model->getAllCategories();
    }

	public function index()
	{
	    $this->data["page"] = "home";
	    $this->data["menu"] = "home";
		$this->load->view('template', $this->data);
	}
}
