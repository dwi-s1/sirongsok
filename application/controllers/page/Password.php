<?php

class Password extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view password
        $this->load->view("page/password");
	}
}