<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rpekerjaan_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nama_perusahaan',
            'label' => 'Nama_perusahaan',
            'rules' => 'required'],

            ['field' => 'bidang_usaha',
            'label' => 'Bidang_usaha',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'telp',
            'label' => 'Telp',
            'rules' => 'required'],

            ['field' => 'website',
            'label' => 'Website',
            'rules' => 'required'],

            ['field' => 'tahun_masuk',
            'label' => 'Tahun_masuk',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get('rpekerjaan')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('rpekerjaan', ["id_rpekerjaan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_rpekerjaan = uniqid();
        $this->nama_perusahaan         = $post["nama_perusahaan"];
        $this->bidang_usaha        = $post["bidang_usaha"];
        $this->alamat   = $post["alamat"];
        $this->email   = $post["email"];
        $this->telp   = $post["telp"];
        $this->website   = $post["website"];
        $this->tahun_masuk   = $post["tahun_masuk"];
        $this->db->insert('rpekerjaan', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id_rpekerjaan = $post["id"];
        $this->nama_perusahaan         = $post["nama_perusahaan"];
        $this->bidang_usaha        = $post["bidang_usaha"];
        $this->alamat   = $post["alamat"];
        $this->email   = $post["email"];
        $this->telp   = $post["telp"];
        $this->website   = $post["website"];
        $this->tahun_masuk   = $post["tahun_masuk"];
        $this->db->update('rpekerjaan', $this, array('id_rpekerjaan' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('rpekerjaan', array("id_rpekerjaan" => $id));
    }

}