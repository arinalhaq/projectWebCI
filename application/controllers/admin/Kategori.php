<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kategori_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["kategori"] = $this->kategori_model->getAll();
        $this->load->view("admin/kategori/kategori", $data);
    }

    public function add()
    {
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kategori/kategori_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kategori/kategori');
       
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->update($id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kategori"] = $kategori->getById($id);
        if (!$data["kategori"]) show_404();
        
        $this->load->view("admin/kategori/kategori_edit", $data);
    }

    public function del($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kategori_model->delete($id)) {
            redirect(site_url('kategori'));
        }
    }
}