<?php
defined('BASEPATH') or exit('No direct script access');

class Barang_model extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }
}
