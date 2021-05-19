<?php

class Tambahsatuan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Satuan_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
        // load view admin
		$this->load->view("admin/_partials/head");
		$this->load->view("admin/_partials/navbar");
		$this->load->view("admin/_partials/sidenav");
        $this->load->view("admin/page/tambahsatuan");
        $this->load->view("admin/_partials/footer");
		$this->load->view("admin/_partials/script");
	}

	public function add()
    {
        $satuan = $this->Satuan_model;
        $validation = $this->form_validation;
        $validation->set_rules($satuan->rules());

        if ($validation->run()) {
            $satuan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect(site_url('admin/satuan'));
    }
}