<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VisimisiModel');

        if($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }

    }

	
	public function index()
	{
        $data['title'] = 'visimisi';
        $data['rows'] = $this->VisimisiModel->getVisimisi()->result();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/visimisi', $data);
        $this->load->view('templates/admin_footer');
        
	}

    public function hapus($id)
    {
        $this->db->delete('visimisi', ['id' =>$id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi!</h4>
                Data Berhasil Di Hapus.
            </div>
                      
            ');
            redirect('admin/visi_misi');
        }
    }

    public function tambah()
	{
        $data['title'] = 'Tambah Visi&Misi';
        $data['kandidat'] = $this->db->get('kandidat')->result();
        
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/visimisi_tambah', $data);
        $this->load->view('templates/admin_footer');
       
	}

    public function simpan()
    {
        $this->VisimisiModel->simpan();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi!</h4>
                Data Berhasil Di Simpan.
            </div>
                      
            ');
            redirect('admin/visi_misi');
        }
    }

    public function edit($id)
	{
        $data['title'] = 'Edit visi_misi';
        $data['kandidat'] = $this->db->get('kandidat')->result();
        $data['row'] = $this->db->get_where('visimisi', ['id' => $id])->row();
        
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/visimisi_edit', $data);
        $this->load->view('templates/admin_footer');
       
	}

    public function update()
    {
        $this->VisimisiModel->update();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi!</h4>
                Data Berhasil Di Update.
            </div>
                      
            ');
            redirect('admin/visi_misi');
        }
    }

}
