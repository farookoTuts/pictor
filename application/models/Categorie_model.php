<?php
class Categorie_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function  getAllCategories()
    {
        $query = $this->db->get('categories');
        return $query;
    }
    
    function  getCategorieById($id)
    {
        $query = $this->db->where('id', $id);
        $query = $this->db->get('categories');
        return $query;
    }
    
    function insert($data)
    {
        $this->db->insert('categories', $data);
        return  $this->db->insert_id();
    }
    
    function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('categories', $data);
    }
    
    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('categories');
    }
    
}