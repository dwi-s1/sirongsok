<?php

class Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view login
        $this->load->view("page/login");
	}
}