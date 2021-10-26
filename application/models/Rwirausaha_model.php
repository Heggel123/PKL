<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rwirausaha_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'usaha',
            'label' => 'Usaha',
            'rules' => 'required'],

            ['field' => 'tahun',
            'label' => 'Tahun',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get('rwirausaha')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('rwirausaha', ["rwirausaha_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->rwirausaha_id = uniqid();
        $this->usaha         = $post["usaha"];
        $this->tahun        = $post["tahun"];
        $this->keterangan   = $post["keterangan"];
        $this->db->insert('rwirausaha', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->rwirausaha_id = $post["id"];
        $this->usaha         = $post["usaha"];
        $this->tahun        = $post["tahun"];
        $this->keterangan   = $post["keterangan"];
        $this->db->update('rwirausaha', $this, array('rwirausaha_id' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('rwirausaha', array("rwirausaha_id" => $id));
    }

}