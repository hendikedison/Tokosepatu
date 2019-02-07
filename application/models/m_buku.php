<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {
    public function tampil()
    {
        $tm_buku=$this->db
                      ->join('kategori','kategori.id_kategori=buku.id_kategori')
                      ->get('buku')
                      ->result();
        return $tm_buku;
    }
    public function data_kategori()
    {
        return $this->db->get('kategori')
                        ->result();
    }
    public function simpan_buku($file_cover)
    {
        if ($file_cover=="") {
             $object = array(
                'id_buku' => $this->input->post('id_buku'), 
                'judul_buku' => $this->input->post('judul_buku'), 
                'tahun' => $this->input->post('tahun'), 
                'id_kategori' => $this->input->post('id_kategori'), 
                'harga' => $this->input->post('harga'),
                'penerbit' => $this->input->post('penerbit'),   
                'stok' => $this->input->post('stok')
             );
        }else{
            $object = array(
                'id_buku' => $this->input->post('id_buku'), 
                'judul_buku' => $this->input->post('judul_buku'), 
                'tahun' => $this->input->post('tahun'), 
                'id_kategori' => $this->input->post('id_kategori'), 
                'harga' => $this->input->post('harga'),
                'penerbit' => $this->input->post('penerbit'),   
                'stok' => $this->input->post('stok'),
                'foto_cover' => $file_cover
             );
        }
        return $this->db->insert('buku', $object);
    }
    public function detail($a)
    {
        $tm_buku=$this->db
                      ->join('kategori', 'kategori.id_kategori=buku.id_kategori')
                      ->where('id_buku', $a)
                      ->get('buku')
                      ->row();
        return $tm_buku;
    }
    public function edit_buku()
    {
        $data = array(
                'id_buku' => $this->input->post('id_buku'), 
                'judul_buku' => $this->input->post('judul_buku'), 
                'tahun' => $this->input->post('tahun'), 
                'id_kategori' => $this->input->post('id_kategori'), 
                'stok' => $this->input->post('stok'), 
                'harga' => $this->input->post('harga'), 
                'penerbit' => $this->input->post('penerbit')

            );

        return $this->db->where('id_buku', $this->input->post('id_buku_lama'))
                        ->update('buku', $data);
    }
    public function edit_buku_dengan_foto($file_cover)
    {
        $data = array(
                'id_buku' => $this->input->post('id_buku'), 
                'judul_buku' => $this->input->post('judul_buku'), 
                'tahun' => $this->input->post('tahun'), 
                'id_kategori' => $this->input->post('id_kategori'), 
                'stok' => $this->input->post('stok'), 
                'harga' => $this->input->post('harga'), 
                'penerbit' => $this->input->post('penerbit'), 
                'foto_cover' => $file_cover

            );

        return $this->db->where('id_buku', $this->input->post('id_buku_lama'))
                        ->update('buku', $data);
    }
    public function hapus_buku($id_buku='')
    {
        return $this->db->where('id_buku', $id_buku)
                    ->delete('buku');
    }
    

}

/* End of file M_buku.php */
/* Location: ./application/models/M_buku.php */