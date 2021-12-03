<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
     public function __construct(){
         parent::__construct();
         $this->load->model('HomeModel');
         
     }

     public function index()
	{
        $data['title'] = 'Home';
        $data['kandidat'] = $this->db->get('kandidat')->result();
        $this->load->view('templates/header',$data);
		$this->load->view('home', $data);
        $this->load->view('templates/footer');
	}

     public function visimisi($id_kandidat)
     {
        $data['title'] = 'Visi & Misi';
        $data['kandidat'] = $this->db->get_where('kandidat', ['id' => $id_kandidat])->row();
        $data['visimisi'] = $this->db->get_where('visimisi', ['id_kandidat' => $id_kandidat])->row();
        $this->load->view('templates/header',$data);
		$this->load->view('visimisi', $data);
        $this->load->view('templates/footer');
     }


}
