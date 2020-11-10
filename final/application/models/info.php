<?php
class info extends CI_Model{
    private $table='info';
    public function  __construct()
    {
        $this->load->database();
    }
    public function get_items(){
        $this->db->order_by('updated','desc');
        return $this->db->get($this->table)->result();
    }

    public function get_item_by_id($id)
    {
        return $this->db->get_where($this->table,['id'=>$id])->row();
    }

    public function create_item($value){
        $this->db->insert($this->table, $value);
    }
    public function delete_item($id)
    {
        $this->db->delete($this->table,['id'=>$id]);
    }
    public function update_item($id,$value)
    {
        $this->db->set('updated','now()', false);
        $this->db->update($this->table, $value,['id'=>$id]);
    }
}
