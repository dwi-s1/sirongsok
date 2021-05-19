<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin
		$this->load->view("admin/_partials/head");
		$this->load->view("admin/_partials/navbar");
		$this->load->view("admin/_partials/sidenav");
        $this->load->view("admin/home");
        $this->load->view("admin/_partials/footer");
		$this->load->view("admin/_partials/script");
	}
}