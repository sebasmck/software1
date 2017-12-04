<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    


class Afiliados extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
    }

        public function index()
    {

        $this->load->helper('url');
        $this->load->view('inicio');
    }


}