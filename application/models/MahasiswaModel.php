<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MahasiswaModel extends CI_Model {
  // Fungsi untuk menampilkan semua data mahasiswa
  public function view(){
    return $this->db->get('mahasiswa')->result();
  }
  
  // Fungsi untuk menampilkan data mahasiswa berdasarkan NIM nya
  public function view_by($nim){
    $this->db->where('nim', $nim);
    return $this->db->get('mahasiswa')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIM tidak harus divalidasi
    // Jadi NIM di validasi hanya ketika menambah data mahasiswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_nim', 'NIm', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel mahasiswa
  public function save(){
    $data = array(
      "nim" => $this->input->post('input_nim'),
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->insert('mahasiswa', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data mahasiswa berdasarkan NIM 
  public function edit($nim){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->where('nim', $nim);
    $this->db->update('mahasiswa', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($nim){
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa'); // Untuk mengeksekusi perintah delete data
  }
}