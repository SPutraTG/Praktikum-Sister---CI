<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('MahasiswaModel'); // Load MahasiswaModel ke controller ini
  }
  
  public function index(){
    $data['mahasiswa'] = $this->MahasiswaModel->view();
    $this->load->view('mahasiswa/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->MahasiswaModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->MahasiswaModel->save(); // Panggil fungsi save() yang ada di MahasiswaModel.php
        redirect('mahasiswa');
      }
    }
    
    $this->load->view('mahasiswa/form_tambah');
  }
  
  public function ubah($nim){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->MahasiswaModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->MahasiswaModel->edit($nim); // Panggil fungsi edit() yang ada di MahasiswaModel.php
        redirect('mahasiswa');
      }
    }
    
    $data['mahasiswa'] = $this->MahasiswaModel->view_by($nim);
    $this->load->view('mahasiswa/form_ubah', $data);
  }
  
  public function hapus($nim){
    $this->MahasiswaModel->delete($nim); // Panggil fungsi delete() yang ada di MahasiswaModel.php
    redirect('mahasiswa');
  }
}