<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rwirausaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("rwirausaha_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["rwirausaha"] = $this->rwirausaha_model->getAll();
        $this->load->view("admin/rwirausaha/list", $data);
    }

    public function add()
    {
        $riwirausaha = $this->rwirausaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($riwirausaha->rules());

        if ($validation->run()) {
            $riwirausaha->save();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil ditambahkan');
            redirect(site_url('admin/rwirausaha'));
        }

        $this->load->view("admin/rwirausaha/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/rwirausaha');
       
        $riwirausaha = $this->rwirausaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($riwirausaha->rules());
        
        if ($validation->run()) {
            $riwirausaha->update();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil dirubah');            
            redirect(site_url('admin/rwirausaha'));
            
        }

        $data["rwirausaha"] = $riwirausaha->getById($id);
        if (!$data["rwirausaha"]) show_404();
        
        $this->load->view("admin/rwirausaha/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->rwirausaha_model->delete($id)) {
            redirect(site_url('admin/rwirausaha'));
        }
    }
}