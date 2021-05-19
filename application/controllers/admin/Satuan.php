<?php

class Satuan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Satuan_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
        // load view
		$data["satuan"] = $this->Satuan_model->getAll();
        $this->load->view("admin/_partials/head");
		$this->load->view("admin/_partials/navbar");
		$this->load->view("admin/_partials/sidenav");
		$this->load->view("admin/satuan",$data);
        $this->load->view("admin/_partials/footer");
		$this->load->view("admin/_partials/script");
	}

    public function edit($id = null)
    {
        if (!isset($id)) redirect('satuan');
       
        $satuan = $this->Satuan_model;
        $validation = $this->form_validation;
        $validation->set_rules($satuan->rules());

        if ($validation->run()) {
            $satuan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/satuan'));
        }

        $data["satuan"] = $satuan->getById($id);
        if (!$data["satuan"]) show_404();

        $this->load->view("admin/_partials/head");
		$this->load->view("admin/_partials/navbar");
		$this->load->view("admin/_partials/sidenav");
        $this->load->view("admin/page/ubahsatuan", $data);
        $this->load->view("admin/_partials/footer");
		$this->load->view("admin/_partials/script");
    }
	
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Satuan_model->delete($id)) {
            redirect(site_url('admin/satuan'));
        }
    }
}