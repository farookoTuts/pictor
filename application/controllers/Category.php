<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    
    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->lang->load('information',$this->session->userdata('site_lang'));
        $this->data['categories'] = $this->Categorie_model->getAllCategories();
    }
    
    public function detail()
    {
        $this->data["page"] = "expertise";
        $this->data["menu"] = "expertise";
        $this->load->view('template', $this->data);
    }
}
