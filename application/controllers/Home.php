<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
        $this->load->model('Berita_model', 'berita');
    }

    public function index()
    {
        $data['title'] = "Home Page";
        $data['page'] = 'home';

        $data['featured']    = $this->berita->getFeatured();
        $data['choice']      = $this->berita->getChoice();
        $data['popular']     = $this->berita->getMostPopular()->row();
        $data['trending']    = $this->berita->getThread();
        $data['lastNews']    = $this->berita->getLastNews();
        $data['about']       = $this->base->get('about')->row();
        // $data['sosmed']      = $this->base_model->get('sosmed')->result();
        // $data['video_game']  = $this->posting->getVideoGames();
        $data['category']    = $this->berita->getKategori();

        $this->load->view('front/layouts/app', $data);
    }
}
