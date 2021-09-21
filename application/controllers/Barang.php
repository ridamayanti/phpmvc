<?php
defined('BASEPATH') or exit('No direct script access');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    function index()
    {
        $data['judul'] = "Barang";
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->view('templates/header', $data);
        $this->load->view('barang/index');
        $this->load->view('templates/footer');
    }
}
