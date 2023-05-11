<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tags extends CI_Controller
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
          'title'       => 'Tag',
          'tags'    => $this->db->get('tags')->result_array()  
        ];
        $this->template->load('template', 'tags/data', $data);
    }

    public function add()
    {
        $post = $this->input->post(null, true);

        $params = [
            'nama_Tags'     => $post['nama'],
        ];

        $this->base->add('tags', $params);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil disimpan');
        } else {
            set_pesan('Terjadi Kesalahan, Harap Coba Kembali', FALSE);
        }

        redirect('tags');
    }

    public function edit($id)
    {
        $post = $this->input->post(null, true);

        $params = [
            'nama_tags'     => $post['nama']
        ];

        $this->base->edit('tags', $params, ['id_tags' => $id]);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil disimpan');
        } else {
            set_pesan('Terjadi Kesalahan, Harap Coba Kembali', FALSE);
        }

        redirect('tags');
    }
    
    public function delete($id)
    {
        $this->base->del('tags', ['id_tags' => $id]);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data berhasil dihapus');
        } else {
            set_pesan('Terjadi Kesalahan, Harap Coba Kembali', FALSE);
        }

        redirect('tags');
        
    }

   
  
}
