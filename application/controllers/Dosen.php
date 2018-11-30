<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dosen"] = $this->dosen_model->getAll();
        $this->load->view("admin/dosen", $data);
    }

    public function add()
    {
        $dosen = $this->dosen_model;
        $this->load->model('prodi_model');
        $data['prodi'] = $this->prodi_model->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($dosen->rules());

        if ($validation->run()) {
            $dosen->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/dosen_form", $data);
    }
}
