<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuaraModel extends CI_Model
{

    public function getsuara()
    {
        $this->db->select('*, suara.id as id_suara, user.nama as nama_user');
        $this->db->from('suara');
        $this->db->join('user', 'user.id = suara.id_user');
        return $this->db->get();
    }

    public function simpan()
    {
       $data = [
         'id_user' => $this->input->post('id_user'),
         'visi' => $this->input->post('visi', true),
         'misi' => $this->input->post('misi', true),
       ];
        $this->db->insert('suara', $data);
    }

    public function update()
    {
        $data = [
         'id_user' => $this->input->post('id_user'),
         'visi' => $this->input->post('visi', true),
         'misi' => $this->input->post('misi', true),
       ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('suara', $data);
    }
    
}