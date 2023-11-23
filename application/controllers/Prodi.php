<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('prodi_model');
    }
    public function index()
    {
      $data['judul'] = "Halaman prodi";
      $data['prodi'] = $this->prodi_model->get();

      $this->load->view('layout/header' );
      $this->load->view('prodi/vw_prodi', $data);
      $this->load->view('layout/footer');
    }


    function upload ()
    {
      $data = [ 
        'nama'=> $this->input->POST('nama'),
        'ruangan'=> $this->input->POST('ruangan'),
        'jurusan'=> $this->input->POST('jurusan'),
        'akreditasi'=> $this->input->POST('akreditasi'),
        'nama_kaprodi'=> $this->input->POST('nama_kaprodi'),
        'tahun_berdiri'=> $this->input->POST('tahun_berdiri'),
        'output_lulusan'=> $this->input->POST('output_lulusan'),
      ];
      $this-> prodi_model-> insert($data);
      redirect('Mahasiswa');
  
    }
    
  public function hapus($id)
  {
    $this->prodi_model->delete($id);
    redirect('Prodi');
  }
    public function tambah()
  {
    $data['judul'] = "Halaman prodi";
    $this->load->view('layout/header', $data);
    $this->load->view('prodi/vw_tambah_prodi', $data);
    $this->load->view('layout/footer', $data);
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman prodi";
    $data['prodi'] = $this->prodi_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('prodi/vw_ubah_prodi', $data);
    $this->load->view('layout/footer');
  }
  public function update ()
  {
    $data = [
        'nama'=> $this->input->POST('nama'),
        'ruangan'=> $this->input->POST('ruangan'),
        'jurusan'=> $this->input->POST('jurusan'),
        'akreditasi'=> $this->input->POST('akreditasi'),
        'nama_kaprodi'=> $this->input->POST('nama_kaprodi'),
        'tahun_berdiri'=> $this->input->POST('tahun_berdiri'),
        'output_lulusan'=> $this->input->POST('output_lulusan'),
    ];
    $id = $this->input->POST('id');
    $this->prodi_model->update(['id'=> $id], $data);
    redirect('prodi');
 }

  public function detail($id)
  {
    $data['judul'] = "Halaman prodi";
    $data['prodi'] = $this->prodi_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('prodi/vw_detail_prodi', $data);
    $this->load->view('layout/footer');
  }
}