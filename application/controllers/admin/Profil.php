<?php

class Profil extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view profil
		$this->load->view("admin/_partials/head");
		$this->load->view("admin/_partials/navbar");
		$this->load->view("admin/_partials/sidenav");
        $this->load->view("admin/profil");
        $this->load->view("admin/_partials/footer");
		$this->load->view("admin/_partials/script");
	}
}