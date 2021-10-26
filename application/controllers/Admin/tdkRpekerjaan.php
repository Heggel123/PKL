<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rpekerjaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("rpekerjaan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["rpekerjaan"] = $this->rpekerjaan_model->getAll();
        $this->load->view("admin/rpekerjaan/list", $data);
    }

    public function add()
    {
        $riwirausaha = $this->rpekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($riwirausaha->rules());

        if ($validation->run()) {
            $riwirausaha->save();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil ditambahkan');
            redirect(site_url('admin/rpekerjaan'));
        }

        $this->load->view("admin/rpekerjaan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/rpekerjaan');
       
        $riwirausaha = $this->rpekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($riwirausaha->rules());
        
        if ($validation->run()) {
            $riwirausaha->update();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil dirubah');            
            redirect(site_url('admin/rpekerjaan'));
            
        }

        $data["rpekerjaan"] = $riwirausaha->getById($id);
        if (!$data["rpekerjaan"]) show_404();
        
        $this->load->view("admin/rpekerjaan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->rpekerjaan_model->delete($id)) {
            redirect(site_url('admin/rpekerjaan'));
        }
    }
}