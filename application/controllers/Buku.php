<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Buku_model');

        if ($this->session->userdata('status') != 'logged in') 
        {
            
            redirect('Login/index');
            
        }
    }
    public function index()
    {
        $data['title'] = 'Index';
        
        if ($this->input->get('keyword')) 
        {
            $keyword = $this->input->get('keyword');
            $data['buku'] = $this->Buku_model->search($keyword);
        }
        else {
            $data['buku'] = $this->Buku_model->getBuku();
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('buku/buku_view', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Tambah Data';

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('penulis', 'Penulis', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|exact_length[4]',array('required' => '%s harus diisi', 'exact_length' => 'Format tanggal : YYYY'));
        $this->form_validation->set_rules('harga', 'Harga', 'required|min_length[5]', array('required' => '%s harus diisi', 'min_length' => '%s minimal 5 digit angka'));
        
        if ($this->form_validation->run() == FALSE) 
        {
        $data['genre'] = $this->Buku_model->getGenre();
        

        $this->load->view('templates/header', $data);
        $this->load->view('buku/tambah_view');
        $this->load->view('templates/footer', $data);
        }
        else {
            $judul = $this->input->post('judul');
            $penulis = $this->input->post('penulis');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $harga = $this->input->post('harga');
            $id_genre = $this->input->post(id_genre);
            
        
            $data = array(
                'judul' => $judul,
                'penulis' => $penulis,
                'tahun_terbit' => $tahun_terbit,
                'harga' => $harga,
                'id_genre' => $id_genre
            );
            $this->Buku_model->tambah_data($data);
    
            $this->session->set_flashdata('success', 'ditambahkan');
            
            redirect('Buku/index');    
        }
    }
    
    public function edit($id)
    {
        $data['title'] = 'Edit Data';
        
        $where = array('id_buku' => $id);

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s belum dirubah'));
        $this->form_validation->set_rules('penulis', 'Penulis', 'required', array('required' => '%s belum dirubah'));
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|exact_length[4]',array('required' => '%s belum dirubah', 'exact_length' => 'Format tanggal : YYYY'));
        $this->form_validation->set_rules('harga', 'Harga', 'required|min_length[5]', array('required' => '%s belum dirubah', 'min_length' => '%s minimal 5 digit angka'));
        
        if ($this->form_validation->run() == FALSE) 
        {
        $data['buku'] = $this->Buku_model->getBukuId($id);
        $data['genre'] = $this->Buku_model->getGenre();
        $this->load->view('templates/header', $data);
        $this->load->view('buku/edit_view',$data);
        $this->load->view('templates/footer', $data);
        
        }

        else {
        
        $judul = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $harga = $this->input->post('harga');
        $id_genre = $this->input->post('id_genre');
        

        $data = array(
            'judul' => $judul,
            'penulis' => $penulis,
            'tahun_terbit' => $tahun_terbit,
            'harga' => $harga,
            'id_genre' => $id_genre
        );
        
        $this->Buku_model->edit_data($where,$data);
        
        
        redirect('Buku/index');
        }
        
        
    }
    
    public function hapus($id)
    {
        $where = array('id_buku' => $id);
        $this->Buku_model->hapus_data($where);
        $this->session->set_flashdata('success', 'dihapus');
        
        redirect('Buku/index');
    }
    public function search()
    {
        $keyword = $this->input->get('keyword');
        
        $data['buku'] = $this->Buku_model->search($keyword);
        
        $this->load->view('buku/buku_view', $data);
        
    }

   public function detail($id_buku)
   {
       $data['title'] = 'Detail View';
       $where = array('id_buku' => $id_buku);
       $data['buku'] = $this->Buku_model->getBukuById($where);
       $data['genre'] = $this->Buku_model->getGenre();
       $this->load->view('templates/header', $data);
       $this->load->view('buku/detail_view', $data);
       $this->load->view('templates/footer', $data);
    }

    public function home()
    {
        $data['title'] = 'Getting Started';     
        $this->load->view('templates/header', $data);
        $this->load->view('home/home', $data);
        $this->load->view('templates/footer', $data);
        
    }

}
