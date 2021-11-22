<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_m extends CI_Model {
  public function get_where($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  public function get($table)
  {
    return $this->db->get($table);
  }
  function data_siswa()
    {
      $query = $this->db->query("select * from siswa");
      return $query;
    }

    function simpan(){
      $data = array('id_siswa' => $this->input->post('id_siswa'),
          'nis' => $this->input->post('nis'),
          'nama_siswa' => $this->input->post('nama'),
          'kelas' => $this->input->post('kelas'),
          'no_telp' => $this->input->post('nomortelepon'),
      	  'tahun_ajaran' => $this->input->post('tahunajaran'),
      	  'alamat' => $this->input->post('alamat'),
      	  'kompetensi_keahlian' => $this->input->post('kompetensikeahlian'));
      $insert = $this->db->insert('siswa',$data);
    }

    function data_siswa_by_id($id)
    {
      $query = $this->db->query("select * from siswa where id_siswa = '$id'");
      return $query;
    }

    function update()
    {
      $where = array('id_siswa'=> $this->input->post('id_siswa'));
      $data1 = array('nis'=> $this->input->post('nis'), 'nama_siswa' => $this->input->post('nama'), 'kelas' => $this->input->post('kelas'), 'no_telp' => $this->input->post('nomortelepon'), 'tahun_ajaran' => $this->input->post('tahun_ajaran'), 'alamat' => $this->input->post('alamat'), 'kompetensi_keahlian' => $this->input->post('kompetensikeahlian'));

      if(empty($this->input->post('password')))
      {
        $this->db->where($where);
        $query = $this->db->update('siswa',$data1);
      } else {
        $this->db->where($where);
        $query = $this->db->update('siswa',$data1);
      }

      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan','Data Siswa Berhasil Diperbaharui');
      }
    }

    function hapus_data_siswa($id)
    {
      $query = $this->db->query("delete from siswa where id_siswa = '$id'");
      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan', 'Data Siswa Berhasil Dihapus');
      } else {
        $this->session->set_flashdata('gagalsimpan', 'Data Siswa Gagal Dihapus');
      }
    }
  }
  
?>
