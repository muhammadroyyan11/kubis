<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data = [
          'title'       => 'Posting',
          'berita'    => $this->db->get('berita ')->result_array()  
        ];
        $this->template->load('template', 'posting/data', $data);
    }

    public function add()
    {

        if (!$_POST) {
            $input = (object) $this->base_model->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        $data = [
            'title'         => 'Add berita',
            'kategori'      => $this->base_model->getOrder('kategori')->result(),
            'input'         => $input
        ];

        $this->template->load('template', 'posting/add', $data);
    }

    public function edit($id)
    {
        $post = $this->input->post(null, true);

        $params = [
            'nama_posting'     => $post['nama']
        ];

        $this->base->edit('posting', $params, ['id_posting' => $id]);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil disimpan');
        } else {
            set_pesan('Terjadi Kesalahan, Harap Coba Kembali', FALSE);
        }

        redirect('posting');
    }
    
    public function delete($id)
    {
        $this->base->del('posting', ['id_posting' => $id]);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil dihapus');
        } else {
            set_pesan('Terjadi Kesalahan, Harap Coba Kembali', FALSE);
        }

        redirect('posting');
        
    }

    public function toggle($getId)
    {
        $status = $this->base_model->getUser('posting', ['id_posting' => $getId])['isActive'];

        // var_dump($status);
        $toggle = $status ? 0 : 1;
        $pesan = $toggle ? 'user diaktifkan.' : 'user dinonaktifkan.';

        if ($this->base_model->update('posting', 'id_posting', $getId, ['isActive' => $toggle])) {
            set_pesan($pesan);
        }
        redirect('posting');
    }
  
}
