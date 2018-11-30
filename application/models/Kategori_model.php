<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    private $_table = "kategori";

    public $ID_KATEGORI;
    public $NAMA_KATEGORI;

    public function rules()
    {
        return [
            ['field' => 'id_kategori',
            'label' => 'id_kategori',
            'rules' => 'required'],

            ['field' => 'nama_kategori',
            'label' => 'nama_kategori',
            'rules' => 'required'],        
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->ID_JENIS_BERKAS = $post['id_kategori'];
        $this->NAMA_JENIS_BERKAS = $post['nama_kategori'];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->ID_JENIS_BERKAS = $post['id_kategori'];
        $this->NAMA_JENIS_BERKAS = $post['nama_kategori'];
        $this->db->update($this->_table, $this, array('ID_KATEGORI' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("ID_KATEGORI" => $id));
    }

    function auth_dosen($id,$password){
        return $this->db->get_where($this->_table, ["ID_KATEGORI" => $id, "PASSWORD" => $password]);
    }
}
